<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\index\login.html";i:1509538306;s:80:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\common\header.html";i:1508419877;s:78:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\common\foot.html";i:1508420199;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__public__/admin/style/bootstrap.css" rel="stylesheet">
    <link href="__public__/admin/style/font-awesome.css" rel="stylesheet">
    <link href="__public__/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__public__/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__public__/admin/style/demo.css" rel="stylesheet">
    <link href="__public__/admin/style/typicons.css" rel="stylesheet">
    <link href="__public__/admin/style/animate.css" rel="stylesheet">
    
</head>


<div class="login-container animated fadeInDown">
        <form action="#" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="name" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" style="width:100px;float:left;" name="code" type="text">
                    <img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" width="120" style="float:left; cursor:pointer;" alt="captcha" />
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">ThinkPHP5.0</p>
                </div>
        </form>
    </div>


	    <!--Basic Scripts-->
    <script src="__public__/admin/style/jquery_002.js"></script>
    <script src="__public__/admin/style/bootstrap.js"></script>
    <script src="__public__/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__public__/admin/style/beyond.js"></script>
    


</body>
</html>