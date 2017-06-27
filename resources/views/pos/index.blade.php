 @extends('layouts.master')
 @section('content')
 
 	<div class="jumbotron">
 		<h1 class="display-3">
 			Sje Services
 		</h1>
 		<p>
 			Quality Landscaping and building services in Plymouth and the surrounding areas
 		</p>
 		<p>
 			<a class="btn btn-primary btn-lg" href="#quote">
 				Get a Quote
 			</a>
 		</p>
 	</div>

 	<div class="container col-4">
 			<h2 class="display-4 text-left">
 				What we do
 			</h2>
  			<ul>
        <li><h5>Patios</h5></li>
        <li><h5>Deckings</h5></li>
        <li><h5>Kitchens</h5></li>
        <li><h5>Bathrooms</h5></li>
  		  </ul>
    </div>
    <div class="container col-12">
    <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/slide1.jpg" alt="First slide" style="height: auto;">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

@endsection