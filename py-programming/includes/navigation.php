<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand <?=(end(explode('/', $_SERVER['SCRIPT_NAME']))==='index.php') ? 'active' : ''?>" href="index.php">หน้าหลัก</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?=(end(explode('/', $_SERVER['SCRIPT_NAME']))==='about.php') ? 'active' : ''?>"> <a href="about.php">เกี่ยวกับเรา</a> </li>
        <li class="<?=(end(explode('/', $_SERVER['SCRIPT_NAME']))==='services.php') ? 'active' : ''?>"> <a href="services.php">บริการของเรา</a> </li>
        <li class="<?=(end(explode('/', $_SERVER['SCRIPT_NAME']))==='portfolio.php') ? 'active' : ''?>"> <a href="portfolio.php">แฟ้มสะสมผลงาน</a> </li>
        <li class="<?=(end(explode('/', $_SERVER['SCRIPT_NAME']))==='contact.php') ? 'active' : ''?>"> <a href="contact.php">ติดต่อเรา</a> </li>
      </ul>
    </div>
  </div>
</nav>
