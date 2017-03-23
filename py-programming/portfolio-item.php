<?php include_once('includes/header.php'); ?>
<?php include_once('includes/navigation.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Portfolio Item
        <small>Subheading</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a>
        </li>
        <li class="active">Portfolio Item</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
          </div>
          <div class="item">
            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
          </div>
          <div class="item">
            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Project Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3>Project Details</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header">Related Projects</h3>
    </div>
    <div class="col-sm-3 col-xs-6">
      <a href="#">
        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
      </a>
    </div>
    <div class="col-sm-3 col-xs-6">
      <a href="#">
        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
      </a>
    </div>
    <div class="col-sm-3 col-xs-6">
      <a href="#">
        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
      </a>
    </div>
    <div class="col-sm-3 col-xs-6">
      <a href="#">
        <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
      </a>
    </div>
  </div>
  <hr>
  <?php include_once('includes/footer.php'); ?>
</div>
<?php include_once('includes/sources.php'); ?>
</body>
</html>
