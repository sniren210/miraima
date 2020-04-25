<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?=  base_url() ?>/assets/login/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=  base_url() ?>/assets/login/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=  base_url() ?>/assets/login/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?=  base_url() ?>/assets/login/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?=  base_url() ?>/assets/login/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?=  base_url() ?>/assets/login/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?=  base_url() ?>/assets/login/lib/animate.css/animate.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login" style="background-image: url(<?=  base_url() ?>/assets/login/img/pattern/purty_wood.png);">

      <div class="form-signin">
    <div class="text-center">
        <h3 style="font-family: monospace;">Miraima Admin</h3>
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <p class="text-muted text-center">
                Enter your username and password
            </p>
            <?php if ($this->session->flashdata('gagal')): ?>            
                <div class="alert alert-danger" role="alert">
                  <?=  $this->session->flashdata('gagal'); ?>
                </div>
            <?php endif ?>
            <form method="post" action="<?=  base_url('login') ?>">
                <input type="text" placeholder="Username" name="username" class="form-control top">
                <input type="password" placeholder="Password" name="password" class="form-control bottom">
                <hr>
<!--                 <div class="checkbox">
		  <label>
		    <input type="checkbox"> Remember Me
		  </label> -->
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
            <hr>
            <label>
                <a href="<?=  base_url('home') ?>"> < Kembali </a>
            </label>
		</div>
        </div>
    </div>
  </div>


    <!--jQuery -->
    <script src="<?=  base_url() ?>/assets/login/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="<?=  base_url() ?>/assets/login/lib/bootstrap/js/bootstrap.js"></script>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
</body>

</html>
