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
   
    <form method="POST" accept="/loremipsum/generate" id="loremipsum-form">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <fieldset>
        <label for="txt-num-paragraph">Number of paragraphs you want:</label>
        <input type="number" name="num_paragraph" id="txt-num-paragraph" min="1" max="25">
        <input type="submit" value="Generate" id="param-submit-button">
      </fieldset>
    </form>
    <h4 class="loremipsum-output-header">Here is your generated text:</h4>
    <span class="loremipsum-output">
Vitae dapibus quisque euismod dolor duis lorem consectetur suspendisse dui blandit sem, metus facilisis ut commodo aenean lacinia quis blandit quisque amet. Aenean adipiscing mi luctus vivamus lacinia ut porttitor sapien placerat, metus nec purus accumsan faucibus etiam lacus fringilla, nam netus dolor aliquet scelerisque tincidunt sem ultricies. Ac arcu massa himenaeos ultrices sed primis dolor sit nullam volutpat, etiam nunc commodo placerat scelerisque volutpat laoreet suscipit himenaeos. Condimentum ac nullam lorem suscipit cras mauris leo feugiat, habitasse quam mattis sed venenatis fames placerat lacus euismod, ipsum nostra suspendisse lacus cursus habitant tortor. Lectus etiam maecenas pharetra sollicitudin per quisque molestie dictum pellentesque id diam libero, ullamcorper commodo platea ac sollicitudin mi dapibus id potenti vulputate commodo, accumsan varius adipiscing neque nisl himenaeos habitant arcu curae feugiat curabitur. Potenti inceptos fringilla quam tempus vehicula proin venenatis tincidunt, dapibus elementum libero lorem vehicula non suspendisse, integer curae aenean habitant per tellus himenaeos.
Nisl facilisis aliquam sollicitudin litora dictumst a per nec, torquent feugiat at auctor mauris himenaeos. Malesuada mi mollis ipsum aliquam vitae aptent accumsan, ullamcorper vel nisl accumsan quam quisque dictumst duis, quam porta facilisis elit class mauris. Consequat risus habitasse etiam hac nisi malesuada ultricies placerat netus in, adipiscing ac orci luctus lectus iaculis morbi vehicula sem egestas, donec aenean erat aenean dapibus aenean fermentum eros arcu. Nisl quis lorem sit massa laoreet ante tellus sollicitudin, lorem maecenas ligula lacinia lacus donec nibh non donec, in sem eleifend elit suspendisse ornare nam. Nisi orci vulputate quis congue vulputate luctus laoreet aenean varius, elementum dolor mauris bibendum venenatis ultricies pulvinar habitasse gravida consequat, quam fusce lacinia facilisis sagittis vitae potenti etiam. Fusce dictum vivamus scelerisque suscipit sapien habitasse gravida eros convallis turpis phasellus, torquent amet gravida nam lacinia leo dapibus nostra aliquam. Etiam euismod ullamcorper pellentesque ut accumsan dui phasellus pharetra consequat accumsan auctor, dictumst tortor augue maecenas purus nibh curabitur ligula lorem sollicitudin conubia congue, ultricies dictum accumsan etiam morbi purus turpis per auctor ligula. Netus diam rhoncus pharetra nibh elit taciti per lacus quam, dapibus venenatis a in morbi pellentesque aenean nunc metus, platea dictum sociosqu ante dictum pretium faucibus gravida.

Duis lacus curabitur dui justo blandit suspendisse faucibus, habitasse lectus ut aliquam vestibulum scelerisque taciti cursus, diam aliquet lorem non inceptos erat. Scelerisque elementum est varius lobortis tempus vehicula, aenean et non sodales nam semper etiam, sodales id per viverra convallis. Porttitor torquent habitant a nulla tortor turpis torquent euismod, nullam quis phasellus lorem turpis elementum fermentum pharetra massa, bibendum habitant amet magna vitae bibendum fermentum. Vulputate risus ipsum fames lorem duis, laoreet consectetur elit etiam, lorem quisque donec torquent. Dapibus cursus hac luctus blandit ullamcorper urna nam curabitur, pretium hac molestie enim aenean dapibus quisque lobortis, a mauris aliquet aptent torquent mi sociosqu. Ultricies vulputate integer ultricies suscipit accumsan sociosqu turpis sagittis justo non velit magna aliquam, pretium congue ultricies venenatis cras inceptos semper viverra curabitur bibendum neque.
    </span>
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
@stop


