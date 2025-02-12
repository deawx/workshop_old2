<?php include_once('includes/header.php'); ?>
<?php include_once('includes/navigation.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">การติดต่อเรา <small></small> </h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a> </li>
        <li class="active">Contact</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7961716.406742019!2d96.99273856689352!3d13.000172109848195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d8df747424db1%3A0x9ed72c880757e802!2z4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4Lii!5e0!3m2!1sth!2sth!4v1490276476387"
        width="100%" height="400px"
        frameborder="0" scrolling="no"
        marginheight="0" marginwidth="0"
        style="border:0" allowfullscreen>
      </iframe>
    </div>
    <div class="col-md-4">
      <h3>Contact Details</h3>
      <p> 3481 Melrose Place<br>Beverly Hills, CA 90210<br> </p>
      <p><i class="fa fa-phone"></i>
        <abbr title="Phone">P</abbr>: (123) 456-7890</p>
        <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a> </p>
        <p><i class="fa fa-clock-o"></i>
          <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li> <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a> </li>
            <li> <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a> </li>
            <li> <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a> </li>
            <li> <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a> </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
      <hr>
      <?php include_once('includes/footer.php'); ?>
    </div>
    <?php include_once('includes/sources.php'); ?>
    <script src="js/contact_me.js"></script>
  </body>
  </html>
