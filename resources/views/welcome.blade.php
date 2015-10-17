@extends('layouts.master')

@section('navbar')
  <!-- begin site navigation -->
    <nav id="site-nav" class="col-md-12">
      <ul>
        <li><a href="/" class="youarehere">Home</a></li>
        <li><a href="/loremipsum/generate">Lorem Ipsum Generator</a></li>
        <li><a href="/randomuser/generate">Random User Generator</a></li>
      </ul>
    </nav>
  <!-- end site navigation -->
@stop

@section('content')
  <!-- begin main content -->
    <div class="col-md-12 welcome-blurb">
    <h2>Welcome!  This is a site filled with tools to help a developer.</h2> 
    <h3>Catalog of Helpful Developer Tools</h3>
    <ul>
      <li><a href="/loremipsum/generate">Lorem Ipsum Generator</a></li>
      <li><a href="/randomuser/generate">Random User Generator</a></li>
    </ul>
    </div>
    <div class="col-md-12">
      <h4>Unhelpful Developer's Tools Cat-alog</h4>
      <img src="../img/dennis.png" alt="Dennis" class="not-helpful">
      <img src="../img/thomas.png" alt="Thomas" class="not-helpful">
    </div>
  <!-- end main content -->
@stop


