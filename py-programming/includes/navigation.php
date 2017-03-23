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
        <li class="<?=(end(explode('/', $_SERVER['SCRIPT_NAME']))==='contact.php') ? 'active' : ''?>"> <a href="contact.php">ติดต่อเรา</a> </li>
        <li class="<?=(end(explode('/', $_SERVER['SCRIPT_NAME']))==='portfolio.php') ? 'active' : ''?>"> <a href="portfolio.php">แฟ้มสะสมผลงาน</a> </li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">อัลบั้มสะสมผลงาน <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li> <a href="portfolio-1-col.php">1 Column Portfolio</a> </li>
            <li> <a href="portfolio-2-col.php">2 Column Portfolio</a> </li>
            <li> <a href="portfolio-3-col.php">3 Column Portfolio</a> </li>
            <li> <a href="portfolio-4-col.php">4 Column Portfolio</a> </li>
            <li> <a href="portfolio-item.php">Single Portfolio Item</a> </li>
          </ul>
        </li> -->
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">บล็อกบทความ <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li> <a href="blog-home-1.php">Blog Home 1</a> </li>
            <li> <a href="blog-home-2.php">Blog Home 2</a> </li>
            <li> <a href="blog-post.php">Blog Post</a> </li>
          </ul>
        </li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li> <a href="full-width.php">Full Width Page</a> </li>
            <li> <a href="sidebar.php">Sidebar Page</a> </li>
            <li> <a href="faq.php">FAQ</a> </li>
            <li> <a href="404.php">404</a> </li>
            <li> <a href="pricing.php">Pricing Table</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
