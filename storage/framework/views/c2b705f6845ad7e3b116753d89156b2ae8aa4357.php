<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SNSAnalytics</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" class="skin-blue sidebar-mini wysihtml5-supported">
    <?php /*<nav class="navbar navbar-default navbar-static-top">*/ ?>
        <?php /*<div class="container">*/ ?>
            <?php /*<div class="navbar-header">*/ ?>

                <?php /*<!-- Collapsed Hamburger -->*/ ?>
                <?php /*<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">*/ ?>
                    <?php /*<span class="sr-only">Toggle Navigation</span>*/ ?>
                    <?php /*<span class="icon-bar"></span>*/ ?>
                    <?php /*<span class="icon-bar"></span>*/ ?>
                    <?php /*<span class="icon-bar"></span>*/ ?>
                <?php /*</button>*/ ?>

                <?php /*<!-- Branding Image -->*/ ?>
                <?php /*<a class="navbar-brand" href="<?php echo e(url('/')); ?>">*/ ?>
                    <?php /*Laravel*/ ?>
                <?php /*</a>*/ ?>
            <?php /*</div>*/ ?>

            <?php /*<div class="collapse navbar-collapse" id="app-navbar-collapse">*/ ?>
                <?php /*<!-- Left Side Of Navbar -->*/ ?>
                <?php /*<ul class="nav navbar-nav">*/ ?>
                    <?php /*<li><a href="<?php echo e(url('/home')); ?>">Home</a></li>*/ ?>
                <?php /*</ul>*/ ?>

                <?php /*<!-- Right Side Of Navbar -->*/ ?>
                <?php /*<ul class="nav navbar-nav navbar-right">*/ ?>
                    <?php /*<!-- Authentication Links -->*/ ?>
                    <?php /*<?php if(Auth::guest()): ?>*/ ?>
                        <?php /*<li><a href="<?php echo e(url('/login')); ?>">Login</a></li>*/ ?>
                        <?php /*<li><a href="<?php echo e(url('/register')); ?>">Register</a></li>*/ ?>
                    <?php /*<?php else: ?>*/ ?>
                        <?php /*<li class="dropdown">*/ ?>
                            <?php /*<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">*/ ?>
                                <?php /*<?php echo e(Auth::user()->name); ?> <span class="caret"></span>*/ ?>
                            <?php /*</a>*/ ?>

                            <?php /*<ul class="dropdown-menu" role="menu">*/ ?>
                                <?php /*<li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>*/ ?>
                            <?php /*</ul>*/ ?>
                        <?php /*</li>*/ ?>
                    <?php /*<?php endif; ?>*/ ?>
                <?php /*</ul>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</div>*/ ?>
    <?php /*</nav>*/ ?>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
</body>
</html>
