<?php include_once('includes/header.php'); ?>
<?php include_once('includes/navigation.php'); ?>
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
    $dir = "images/portfolio";
    if (is_dir($dir))
    {
      if ($dh = opendir($dir))
      {
        while (($fols = readdir($dh)) !== false)
        {
          $fol = "images/portfolio/".$fols;
          if (is_dir($fol) && strpos($fol, '.') === false)
          {
            if ($pcs = opendir($fol))
            {
              while (($pc = readdir($pcs)) !== false)
              {
                if ($pc === '1.png')
                {
                  ?>
                  <div class="col-md-4 img-portfolio">
                    <a href="<?php echo $fols; ?>"> <img class="img-responsive img-hover" src="<?php echo $fol.'/'.$pc; ?>" alt=""> </a>
                    <h3> <a href="<?php echo $fols; ?>"><?php echo $fols; ?></a> </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                  </div>
                  <?php
                }
              }
              closedir($pcs);
            }
          }
        }
        closedir($dh);
      }
    }
    ?>
  </div>
  <hr>
  <?php include_once('includes/footer.php'); ?>
</div>
<?php include_once('includes/sources.php'); ?>
</body>
</html>
