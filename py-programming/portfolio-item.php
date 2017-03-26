<?php include_once('includes/header.php'); ?>
<?php include_once('includes/navigation.php'); ?>
<?php $album = isset($_GET['album']) ? $_GET['album'] : ''; ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><?php echo $album; ?> <small></small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a> </li>
        <li class="active"><?php echo $album; ?></li>
      </ol>
    </div>
  </div>
  <div class="row">
    <?php
    include_once('bin/portfolio.php');
    // echo '<pre>';
    // print_r($portfolio);
    // echo '</pre>';
    if (array_key_exists($album, $portfolio)) { ?>
      <div class="col-md-8">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active"> <img style="width:100%;" class="img-responsive" src="images/portfolio/<?php echo $album; ?>/1.png" alt=""> </div>
            <div class="item"> <img style="width:100%;" class="img-responsive" src="images/portfolio/<?php echo $album; ?>/2.png" alt=""> </div>
            <div class="item"> <img style="width:100%;" class="img-responsive" src="images/portfolio/<?php echo $album; ?>/3.png" alt=""> </div>
            <div class="item"> <img style="width:100%;" class="img-responsive" src="images/portfolio/<?php echo $album; ?>/4.png" alt=""> </div>
            <div class="item"> <img style="width:100%;" class="img-responsive" src="images/portfolio/<?php echo $album; ?>/5.png" alt=""> </div>
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
        <h3><?php echo $portfolio[$album]['title']; ?></h3>
        <p><?php echo $portfolio[$album]['description']; ?></p>
        <h3>รายละเอียดทั่วไป</h3>
        <ul>
          <?php foreach ($portfolio[$album]['detail'] as $detail) { ?>
            <li><?php echo $detail; ?></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <?php } ?>
  <div class="row">
    <div class="col-lg-12"> <h3 class="page-header">ผลงานที่น่าสนใจ</h3> </div>
    <?php foreach (array_rand($portfolio, 4) as $key => $value) { ?>
      <div class="col-sm-3 col-xs-6">
        <a href="portfolio-item.php?album=<?php echo $value; ?>">
          <img
            class="img-responsive img-hover img-related"
            src="images/portfolio/<?php echo $value; ?>/1.png" alt="">
        </a>
      </div>
    <?php } ?>
  </div>
  <hr>
  <?php include_once('includes/footer.php'); ?>
</div>
<?php include_once('includes/sources.php'); ?>
</body>
</html>
