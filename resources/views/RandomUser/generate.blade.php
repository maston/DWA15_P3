@extends('layouts.master')

@section('navbar')
	<!-- begin site navigation -->
	  	<nav id="site-nav" class="col-md-12">
		    <ul>
		      <li><a href="/">Home</a></li>
		      <li><a href="/loremipsum/generate">Lorem Ipsum Generator</a></li>
		      <li><a href="/randomuser/generate" class="youarehere">Random User Generator</a></li>
		    </ul>
	  	</nav>
	<!-- end site navigation -->
@stop

@section('content')
	<!-- begin main content section -->
		<H4 class="col-md-12">Welcome to the Random User Generator!</H4>
	  	<div class="col-md-12">
		    <p class="instructions">
		    <span>Instructions</span><br>
		    This tool will generate random users for you to use.<br>
		    Just enter the various parameters you would like and click 'Generate.'
		    </p>  
	   	</div>
	<!-- error trapping -->
	    @if(count($errors) > 0)
	      <ul class="error-list">
	        @foreach ($errors->all() as $error)
	          <li>{{ $error }}</li>
	        @endforeach
	      </ul>
	    @endif  
	 <!-- end error trapping -->
	
	 <!-- begin form -->
	    <form method="POST" accept="/randomuser/generate" id="randomgenerator-form" class="col-md-12">
	 	<fieldset>   
		    <!-- generate csrf token -->
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
	        <label for="txt-num-users">Enter number of users: (1-100) </label>
	        <!-- prefill num_to_generate if exists, else default to 1 -->
	        @if(isset($num_to_generate))
	      		<input type="number" name="num_users" id="txt-num-users" class="input-num-parameter" min="1" max="100" value="{{ $num_to_generate }}">
	    	@else
	      		<input type="number" name="num_users" id="txt-num-users" class="input-num-parameter" min="1" max="100" value=1>
	    	@endif
	    	<input type="submit" value="Generate" id="param-submit-button" class="btn btn-primary btn-sm">
	    	<br>
	        <p id="random-user-optional-param"><span id="random-user-optional-param-title">Optional Parameters</span><br>
		        <label for="chk-birthdate" class="random-user-optional-param-detail">Add Birthdate:</label>
				<!-- prefill add_birthday if exists, else default to unchecked -->
		        @if(isset($add_birthday))
	          		<input type="checkbox" name="add_birthday" id="chk-birthdate" checked>
	        	@else
	          		<input type="checkbox" name="add_birthday" id="chk-birthdate">
	        	@endif
		        
		        <br>
		        <label for="chk-profile" class="random-user-optional-param-detail">Add Profile:</label>
		        <!-- prefill add_profile if exists, else default to unchecked -->
		        @if(isset($add_profile))
	          		<input type="checkbox" name="add_profile" id="chk-profile" checked>
	        	@else
	          		<input type="checkbox" name="add_profile" id="chk-profile">
	        	@endif	
	    	</p>        

      	</fieldset>
	    </form>
	<!-- end form -->

	<!-- upon POST return the list of random users if exists -->
		@if(isset($fakePeople))
		<div class="row">
			<div class="col-md-12 table-responsive">	    	
				<table class="table table-striped table-bordered">
				<caption>Your Generated User(s)</caption>
				<thead>
			      <tr>
			        <th>Name</th>
			        <th nowrap>Phone Number</th>
			        <th>City</th>
			        <th>State</th>
			        <th nowrap>Zip Code</th>
			        <!-- Optional parameters will display if selected -->
			        @if($add_birthday==TRUE)
						<th nowrap>DOB</th>
			        @endif
			        @if($add_profile==TRUE)
						<th>Profile</th>
			        @endif
			      </tr>
			    </thead>
			    <!-- Generate User List -->
              	@foreach($fakePeople as $person)
	                <tr>
						<td nowrap>{{ $person['name'] }}</td>
						<td nowrap>{{ $person['phone'] }}</td>
						<td nowrap>{{ $person['city'] }}</td>
						<td nowrap>{{ $person['state'] }}</td>
						<td nowrap>{{ $person['zip'] }}</td>
						@if($add_birthday==TRUE)
							<td nowrap>{{ $person['dob'] }}</td>
			        	@endif
						@if($add_profile==TRUE)
							<td>{{ $person['profile'] }}</td>
			        	@endif
	                </tr>
              	@endforeach
              	</table>
		    </div>
		</div>
		@endif 
	<!-- end main content section -->
@stop
