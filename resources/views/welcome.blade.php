@extends('layouts.master')

@section('navbar')
    <!-- begin site navigation : bootstrap medium columns : 12 wide -->
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
    <h1>Things about this thing.</h1>
@stop


