@extends('layouts.master')

@section('navbar')
    <!-- begin site navigation -->
      <nav id="site-nav" class="col-md-12">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/loremipsum/generate" class="youarehere">Lorem Ipsum Generator</a></li>
          <li><a href="/randomuser/generate">Random User Generator</a></li>
        </ul>
      </nav>
    <!-- end site navigation -->
@stop

@section('content')
<!-- begin main content section -->
  <H4 class="col-md-12">Welcome to the Lorem Ipsum Generator!</H4>
  <!-- begin instructions / input section -->
  <div class="col-md-6">
    <p class="instructions">
    <span>Instructions</span><br>
    This tool will generate paragraphs of Lorem Ipsum text for you for all your fancy development needs.<br>
    Just enter the number of paragraphs you would like and click 'Generate.'
    </p>  
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
    <form method="POST" action="/loremipsum/generate" id="loremipsum-form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <fieldset>
        <label for="txt-num-paragraph">Enter number of paragraphs: (1-25)</label>
        @if(isset($num_paragraph))
          <input type="number" name="num_paragraph" id="txt-num-paragraph" class="input-num-parameter" min="1" max="25" value="{{ $num_paragraph }}">
        @else
          <input type="number" name="num_paragraph" id="txt-num-paragraph" class="input-num-parameter" min="1" max="25">
        @endif
        <input type="submit" value="Generate" id="param-submit-button" class="btn btn-primary btn-sm">
      </fieldset>
    </form>
    <!-- end form -->
  </div>
  <!-- end instructions / input section -->

  <!-- begin about section -->
  <div class="col-md-6">
  <p class="loremipsum-about">
    <img src="../img/owl.png" alt="knowledge owl">
    <span>Learn more about lorem ipsum</span><br>
    From <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">Wikipedia</a>: "In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, 
    translated as "pain itself") is a filler text commonly used to demonstrate the graphic 
    elements of a document or visual presentation. Replacing meaningful content with placeholder 
    text allows viewers to focus on graphic aspects such as font, typography, and page layout 
    without being distracted by the content. It also reduces the need for the designer to come 
    up with meaningful text, as they can instead use quickly-generated lorem ipsum."</p>
  </div>
<!-- end about section -->

<!-- upon POST return the generated paragraphs if exist -->
    @if(isset($paragraphs))
      <div class="col-md-12 loremipsum-output">
      <h4>Here is your generated text:</h4>
        <pre class="loremipsum-output">{{ implode("\n\n",$paragraphs) }}</pre>
      </div>
    @endif 
<!-- end main content section -->
@stop
