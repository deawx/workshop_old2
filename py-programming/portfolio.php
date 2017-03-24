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
          <?php
          echo '<img src="'.$path.$name.'/1.png">';
          echo $name.'<br>';
        }
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
