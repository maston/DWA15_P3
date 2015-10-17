@extends('layouts.master')

@section('navbar')
    <!-- begin site navigation : bootstrap medium columns : 12 wide -->
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
	<!-- begin form section -->
	  <H4 class="col-md-12">Welcome to the Random User Generator!</H4>
	  <div class="col-md-12">
	    <p class="instructions">
	    <span>Instructions</span><br>
	    This tool will generate random users for you to use.<br>
	    Just enter the various parameters you would like and click 'Generate.'
	    </p>  
	   </div>
	    <form method="POST" accept="/randomuser/generate" id="randomgenerator-form" class="col-md-12">
	    <!-- generate csrf token -->
	    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
	      <fieldset>
	        <label for="txt-num-users">Enter number of users:</label>
	        @if(isset($num_to_generate))
          		<input type="number" name="num_users" id="txt-num-users" min="1" max="25" value="{{ $num_to_generate }}">
        	@else
          		<input type="number" name="num_users" id="txt-num-users" min="1" max="25">
        	@endif
        	<br>
	        <p>Optional Parameters</p>
	        <label for="chk-birthdate">Add Birthdate:</label>
	        @if(isset($add_birthday))
          		<input type="checkbox" name="add_birthday" id="chk-birthdate" checked>
        	@else
          		<input type="checkbox" name="add_birthday" id="chk-birthdate">
        	@endif
	        <br>
	        <label for="chk-profile">Add Profile:</label>
	        @if(isset($add_profile))
          		<input type="checkbox" name="add_profile" id="chk-profile" checked>
        	@else
          		<input type="checkbox" name="add_profile" id="chk-profile">
        	@endif	        
	        <input type="submit" value="Generate" id="param-submit-button">
	      </fieldset>
	    </form>
		@if(isset($fakePeople))
		<div class="row">
			<div class="col-md-12 table-responsive">
		    	
				<table class="table table-striped">
				<h4>Here are your generated user(s):</h4>
				<thead>
			      <tr>
			        <th>Name</th>
			        <th>Phone Number</th>
			        <th>City</th>
			        <th>State</th>
			        <th>Zip Code</th>
			        @if($add_birthday==TRUE)
						<th>DOB</th>
			        @endif
			        @if($add_profile==TRUE)
						<th>Profile</th>
			        @endif
			      </tr>
			    </thead>
              	@foreach($fakePeople as $person)
	                <tr>
						<td>{{ $person['name'] }}</td>
						<td>{{ $person['phone'] }}</td>
						<td>{{ $person['city'] }}</td>
						<td>{{ $person['state'] }}</td>
						<td>{{ $person['zip'] }}</td>
						@if($add_birthday==TRUE)
							<td>{{ $person['dob'] }}</td>
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


@stop
