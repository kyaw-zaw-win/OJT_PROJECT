<!DOCTYPE html>
<html>
<head>
  <title>Carousel</title>
  <style>
  .carousel-inner img {
    width:100%;
    height:100%;
  }
  </style>
</head>
<body>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Slide0.1.jpg" alt="Los Angeles" width="700" height="150">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/Slide0.2.jpg" alt="Chicago" width="1000" height="200">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/Slide0.3.jpg" alt="New York" width="1000" height="200">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>  
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>