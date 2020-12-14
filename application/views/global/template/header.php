<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mading Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="dicoding:email" content="sniren2002@gmail.com">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/animate.css">

  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/magnific-popup.css">

  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/aos.css">

  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/ionicons.min.css">

  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/flaticon.css">
  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/icomoon.css">
  <link rel="stylesheet" href="<?=  base_url('assets/mading') ?>/css/style.css">
</head>

<body style="background-image: url(<?=  base_url('assets/mading') ?>/images/purty_wood.png);">

  <div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight">
      <nav id="colorlib-main-menu" role="navigation">
        <ul>
          <li <?php if ($this->uri->segment(1) == 'home') {echo "class='colorlib-active'";} ?>><a
              href="<?=  base_url('home') ?>">Home</a></li>
          <li <?php if ($this->uri->segment(1) == 'mading') {echo "class='colorlib-active'";} ?>><a
              href="<?=  base_url('mading') ?>">Mading</a></li>
          <li <?php if ($this->uri->segment(1) == 'eskul') {echo "class='colorlib-active'";} ?>><a
              href="<?=  base_url('eskul') ?>">Eskul</a></li>
          <li <?php if ($this->uri->segment(1) == 'ajuan') {echo "class='colorlib-active'";} ?>><a
              href="<?=  base_url('ajuan') ?>">Ajuan</a></li>
          <li <?php if ($this->uri->segment(1) == 'tentang') {echo "class='colorlib-active'";} ?>><a href="">Tentang</a>
          </li>
          <?php if ($this->session->userdata('idUser')): ?>
          <li><a href="<?=  base_url('admin') ?>">Halaman Admin</a></li>
          <?php endif ?>
        </ul>
      </nav>

      <div class="footer" style="position: relative; top: 50px;">
        <h1 id="colorlib-logo" class="mb-4"><a href="<?=  base_url() ?>"
            style="background-image: url(<?=  base_url('assets/mading') ?>/images/bg_1.jpg);">Miraima</a></h1>
        <div class="form-group d-flex">
          <div class="icon"><span class="icon-paper-plane"></span></div>
          <form method="get" action="<?=  base_url('search') ?>">
            <input type="text" class="form-control" name="keyword" autocomplete="off" placeholder="Pencarian">
            <button type="submit" hidden> search</button>
          </form>
        </div>
        <p class="pfooter">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
          document.write(new Date().getFullYear());
          </script> All rights reserved | Made <i class="icon-heart" aria-hidden="true"></i> by <a
            href="https://rpl-stemanika.com" target="_blank">MiraiDev</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </aside> <!-- END COLORLIB-ASIDE -->