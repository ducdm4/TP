<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> <?php echo $__env->yieldContent('title'); ?> - Teach+ Network</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(url('public/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('public/css/mystyle_front.css')); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php if(!Session::has('userId')): ?>
    <script>
        window.location.href = '<?php echo e(url("/Admin")); ?>';
    </script>
<?php endif; ?>
<body style="padding-top: 90px">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">TeachPlus</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Settings</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><?php echo(Session::get('username')) ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo e(url('/Admin/Logout')); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="<?php echo e(url('/Admin/Manage')); ?>">Quản lý Admin <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Reports</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
            </ul>
        </div>
        <?php echo $__env->yieldContent('backContent'); ?>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo e(url('public/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(url('public/js/customFront.js')); ?>"></script>
</body>
</html>