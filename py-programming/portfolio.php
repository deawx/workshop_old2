<?php include_once('includes/header.php'); ?>
<?php include_once('includes/navigation.php'); ?>
<style media="screen">
  img { cursor: zoom-in; }
</style>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">แฟ้มสะสมผลงาน <small></small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a> </li>
        <li class="active">Portfolio</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <?php
    $path = 'images/portfolio/';
    if (isset($_GET['album']))
    {
      $dir = $path.$_GET['album'];
      if (is_dir($dir))
      {
        include_once('images/portfolio/'.$_GET['album'].'/index.html');
      }
    }
    else
    {
      foreach (scandir($path) as $key => $value)
      {
        if (strlen($value) > 2)
        {
          $name = iconv("tis-620", "utf-8", $value);
          ?>
          <div class="col-sm-6 col-md-4 img-portfolio" style="min-height:400px;">
            <img class="img-responsive img-hover" src="<?php echo $path.$name; ?>/1.png" alt="">
            <h3> <a href="portfolio.php?album=<?php echo $name; ?>"><?php echo $name; ?></a> </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
          <?php
        }
      }
    }
    ?>
  </div>
  <hr>
  <?php include_once('includes/footer.php'); ?>
</div>
<div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"> <img src="" class="enlargeImageModalSource img-responsive" style="width:100%;"> </div>
    </div>
  </div>
</div>
<?php include_once('includes/sources.php'); ?>
<script>
  $('img').on('click', function(){
    $('.enlargeImageModalSource')
      .attr('src', $(this)
      .attr('src'));
    $('#enlargeImageModal')
      .modal('show');
  });
</script>
</body>
</html>
