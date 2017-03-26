<?php include_once('includes/header.php'); ?>
<?php include_once('includes/navigation.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Three Column Portfolio <small>Subheading</small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a> </li>
        <li class="active">Three Column Portfolio</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <?php
    include_once('bin/portfolio.php');
    foreach ($portfolio as $key => $value) {
      ?>
      <div class="col-sm-6 col-md-4 img-portfolio" style="min-height:400px;">
        <img class="img-responsive img-hover" src="images/portfolio/<?php echo $key.'/'.$value['cover']; ?>" alt="">
        <h3> <a href="portfolio-item.php?album=<?php echo $key; ?>"><?php echo $value['title']; ?></a> </h3>
        <p><?php echo $value['description']; ?></p>
      </div>
      <?php
    }
    ?>
  </div>
  <hr>
  <?php include_once('includes/footer.php'); ?>
</div>
<?php include_once('includes/sources.php'); ?>
</body>
</html>
