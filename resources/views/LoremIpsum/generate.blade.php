@extends('layouts.master')


@section('content')
<!-- begin form section -->
  <H4 class="col-md-12">Welcome to the Lorem Ipsum Generator!</H4>
  <div class="col-md-6">
    <p class="instructions">
    <span>Instructions</span><br>
    This tool will generate paragraphs of Lorem Ipsum text for you for all your fancy development needs.<br>
    Just enter the number of paragraphs you would like and click 'Generate.'
    </p>  
   
    <form method="POST" action="/loremipsum/generate" id="loremipsum-form">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <fieldset>
        <label for="txt-num-paragraph">Number of paragraphs you want:</label>
        <input type="number" name="num_paragraph" id="txt-num-paragraph" min="1" max="25">
        <input type="submit" value="Generate" id="param-submit-button">
      </fieldset>
    </form>
  </div>

  <div class="col-md-6">
  <p class="about">
  <img src="../img/owl.png" alt="knowledge owl">
  <span>Learn more about lorem ipsum</span><br>
  From <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">Wikipedia</a>: "In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, 
  translated as "pain itself") is a filler text commonly used to demonstrate the graphic 
  elements of a document or visual presentation. Replacing meaningful content with placeholder 
  text allows viewers to focus on graphic aspects such as font, typography, and page layout 
  without being distracted by the content. It also reduces the need for the designer to come 
  up with meaningful text, as they can instead use quickly-generated lorem ipsum."</p>
 </div>
<!-- end form section -->

    @if(isset($paragraphs))
      <div class="col-md-6 loremipsum-output">
      <h4>Here is your generated text:</h4>
        {{ implode("<br>",$paragraphs) }}
      </div>
    @endif 

@stop
