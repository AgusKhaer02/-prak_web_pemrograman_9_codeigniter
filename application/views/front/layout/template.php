
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('asset/template/front')?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/template/front')?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('asset/template/front')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/template/front')?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('asset/template/front')?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/template/front')?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('asset/template/front')?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('asset/template/front')?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
	<?php $this->load->view('front/layout/header');?>
	<!-- End Header -->

  <!-- ======= Hero Section ======= -->
	<?php $this->load->view('front/layout/hero');?>
	<!-- End Hero -->

	<!-- ======= Main ======= -->
  <main id="main">
		<?php $this->load->view($contents);?>
  </main>
	<!-- End #main -->

  <!-- ======= Footer ======= -->
	<?php $this->load->view('front/layout/footer');?>
	<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('asset/template/front')?>/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url('asset/template/front')?>/vendor/aos/aos.js"></script>
  <script src="<?= base_url('asset/template/front')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('asset/template/front')?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('asset/template/front')?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('asset/template/front')?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('asset/template/front')?>/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('asset/template/front')?>/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('asset/template/front')?>/js/main.js"></script>

</body>

</html>
