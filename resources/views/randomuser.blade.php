<!DOCTYPE html>
<html>
<head>
  <title>Developer's Best Friend</title>
  <meta charset="utf-8">
  <meta name="author" content="Sarah Maston">
  <meta name="description" content="CSCI E-15 - Dynamic Web Applications - Project Three - Developer's Best Friend">
  <!-- stylesheets: bootstrap, lavish-bootstrap theme and site -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/lavish-bootstrap.css"> -->
  <link rel="stylesheet" href="../css/site.css">
</head>

<body>
<!-- begin bootstrap container -->
<div class="container">
<!--  begin header section  -->
<header class="row">
  <h1 class="col-md-12">Developer's Best Friend</h1>
</header>
<!--  end header section  -->

<!-- begin bootstrap row -->
<div class="row">   
<!-- begin site navigation : bootstrap medium columns : 12 wide -->
  <nav id="site-nav" class="col-md-12">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/loremipsum/generate" class="youarehere">Lorem Ipsum Generator</a></li>
      <li><a href="/randomuser/generate">Random User Generator</a></li>
    </ul>
  </nav>
<!-- end site navigation -->
</div>
<!-- end bootstrap row -->

<!-- begin form section -->
<section class="row">
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

  <!-- <div class="col-md-6">
  <p class="about">
  <img src="../img/owl.png" alt="knowledge owl">
  <span>Learn more about lorem ipsum</span><br>
  From <a href="http://en.wikipedia.org/wiki/Lorem_ipsum">Wikipedia</a>: "In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, 
  translated as "pain itself") is a filler text commonly used to demonstrate the graphic 
  elements of a document or visual presentation. Replacing meaningful content with placeholder 
  text allows viewers to focus on graphic aspects such as font, typography, and page layout 
  without being distracted by the content. It also reduces the need for the designer to come 
  up with meaningful text, as they can instead use quickly-generated lorem ipsum."</p>
 </div> -->

</section>
<!-- end form section -->

</div>

<!-- end bootstrap container -->
</body>
</html>
