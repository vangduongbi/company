<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?=base_url('public/')?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dịch vụ vệ sinh chuyên nghiệp</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <script>

    </script>
    <!-- =======================================================
      Theme Name: Company
      Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<?php
?>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"> <img src="images/logo.jpg"  style="    max-width: 48px;
    margin-top: -12px;" class= "img-reposive" alt="Cây Chổi Vàng ">  </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse nav-tab" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li role="presentation"><a href="<?=base_url()?>index.php" class="<?= $segment == 'index' ? 'active' : '' ?>">Trang chủ</a></li>
                        <li role="presentation"><a href="<?=base_url()?>about" class="<?= $segment == 'about' ? 'active' : '' ?>">Giới thiệu</a></li>
                        <li role="presentation"><a href="<?=base_url()?>service" class="<?= $segment == 'service' ? 'active' : '' ?>">Dịch vụ</a></li>
                        <li role="presentation"><a href="#" class="">Tuyển dụng</a></li>
                        <li role="presentation"><a href="<?=base_url()?>news" class="<?= $segment == 'news' ? 'active' : '' ?>">Tin tức</a></li>

                        <li role="presentation"><a href="<?=base_url()?>contact" class="<?= $segment == 'contact' ? 'active' : '' ?>">Liên hệ</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </nav>
</header>