<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> <?php echo $__env->yieldContent('title'); ?> - Teach+ Network</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/mystyle_front.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="padding-top: 90px">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img style="width: 100px" alt="Brand" src="public/img/logoicon.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" onclick="clearBeforeOpen()" data-toggle="modal" data-target="#loginModal">Đăng nhập</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--Start login modal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
            </div>
            <div class="modal-body">
                <form method="post" class="form-horizontal" action="">
                    <div class="form-group">
                        <div id="errorMess">
                            <span class="text-danger col-sm-offset-4 col-sm-8"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMail" class="col-sm-4 control-label">Email:</label>
                        <div class="col-sm-6">
                            <input type="text" id="txtUsername" name="username" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPass" class="col-sm-4 control-label">Mật khẩu:</label>
                        <div class="col-sm-6">
                            <input type="password" id="txtPassword" name="password" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <div class="checkbox">
                                <label>
                                    <input id="remember" type="checkbox">Nhớ tài khoản
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <button type="button" class="btn btn-register">Đăng kí</button>
                        </div>
                        <div class="col-sm-4">
                            <button id="btnlogin" type="button" onclick="ValidateUser()" class="btn btn-login">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="" class="btn btn-facebook">
                                <img src="<?php echo url('/public/img/facebook-icon.png') ?>" style="width: 20px"> Đăng nhập với Facebook
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="baseUrl" value="<?php echo e(url('/')); ?>"/>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Đóng</button>
                <a href="#">Quên mật khẩu ?</a>
            </div>
        </div>
    </div>
</div>
<!--End login modal-->
<script>
    $('#loginModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>

<?php echo $__env->yieldContent('page_content'); ?>

<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container-fluid">
        <br>
        <p>&copy; <?php echo date('Y') ?> - by Teach Plus  </p>
    </div>
</nav>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="public/js/bootstrap.js"></script>
<script src="public/js/customFront.js"></script>
</body>
</html>