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
	  <div class="col-md-6">
	    <p class="instructions">
	    <span>Instructions</span><br>
	    This tool will generate random users for you to use.<br>
	    Just enter the various parameters you would like and click 'Generate.'
	    </p>  
	   
	    <form method="POST" accept="/randomuser/generate" id="randomgenerator-form">
	    <!-- generate csrf token -->
	    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
	      <fieldset>
	        <label for="txt-num-users">Enter number of users:</label>
	        <input type="number" name="num_users" id="txt-num-users" min="1" max="25"><br>
	        <p>Optional Parameters</p>
	        <label for="chk-birthdate">Add Birthdate:</label>
	        <input type="checkbox" name="add_birthday" id="chk-birthdate"><br>
	        <label for="chk-profile">Add Profile:</label>
	        <input type="checkbox" name="add_profile" id="chk-profile">
	        <input type="submit" value="Generate" id="param-submit-button">
	      </fieldset>
	    </form>
	    <h4 class="randomuser-output-header">Here are your generated user(s):</h4>
	    <span class="randomuser-output">
	    stuff
	    </span>
	  </div>
@stop
