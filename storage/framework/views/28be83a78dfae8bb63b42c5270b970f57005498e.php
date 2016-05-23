<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> System login - Teach+ Network</title>

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
<?php if(Session::has('userId')): ?>
    <script>
        window.location.href = '<?php echo e(url("/Admin/Manage")); ?>';
    </script>
<?php endif; ?>
<div class="container mt20 text-center">
    <div class="row mt20 mb20">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h3>TeachPlus Network</h3></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row mt20 mb20">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-group"><span class="text-danger"><?php echo session('loginMessage'); ?></span></div>
            <form action="<?php echo e(url('/Admin/Login')); ?>" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <input type="text" value="<?php echo session('username'); ?>" required name="username" class="form-control" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                    <input type="password" value="<?php echo session('password'); ?>" required name="password" class="form-control" placeholder="Mật khẩu">
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo e(url('public/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(url('public/js/customFront.js')); ?>"></script>
</body>
</html>