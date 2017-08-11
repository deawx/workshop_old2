<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>บริษัท เจ.พี. แอคเคาน์ติ้ง จำกัด (J.P. ACCOUNTING CO.,LTD.)</title>
  <meta name="description" content="บริษัท เจ.พี. แอคเคาน์ติ้ง จำกัด (J.P. ACCOUNTING CO.,LTD.)">
  <meta name="keywords" content="">
  <meta name="author" content="PY-Programming">

  <meta property="og:url" content="http://www.jp-accounting.com"/>
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="JP-Accounting Co,ltd."/>
  <meta property="og:description" content="บริษัท เจ.พี. แอคเคาน์ติ้ง จำกัด (J.P. ACCOUNTING CO.,LTD.) บริการทำบัญชี บริการด้านเวิร์คเพอร์มิต บริการด้านการต่อวีซ่า"/>
  <meta property="og:image" content="http://www.jp-accounting.com/images/team1.jpg" />

  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/theme.min.css" rel="stylesheet">
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style media="screen">
    html, body { font-size: 16px; }
    img { margin: 0 auto; }
    .thumbnail { border: none; }
    .thumbnail img { width: 100%; }
    .teams div:hover img {
      opacity: 1;
      -webkit-animation: flash 1.5s;
      animation: flash 1.5s;
    }
    @-webkit-keyframes flash {
      0% {
        opacity: .4;
      }
      100% {
        opacity: 1;
      }
    }
    @keyframes flash {
      0% {
        opacity: .4;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>

<?php
$_COOKIE['jp_language'] = (isset($_GET['language']))
  ? $_GET['language']
  : 'thai';
$language = (in_array($_COOKIE['jp_language'], array('thai','english')))
 ? $_COOKIE['jp_language']
 : 'thai';
setcookie('jp_language', $language);
include($language.".php");
?>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>
  <script type="text/javascript">
  var allowSubmit = false;
  function capcha_filled () {
    allowSubmit = true;
  }
  function capcha_expired () {
    allowSubmit = false;
  }
  function check_if_capcha_is_filled (e) {
    if(allowSubmit) return true;
    e.preventDefault();
    alert('Fill in the reCapcha!');
  }
  </script>
</body>
</html>
