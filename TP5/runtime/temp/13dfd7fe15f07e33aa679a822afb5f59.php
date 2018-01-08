<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:82:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\auth_group\edit.html";i:1509271217;s:80:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\common\header.html";i:1508419877;s:77:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\common\top.html";i:1509538865;s:78:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\common\left.html";i:1508759517;s:78:"D:\study\PHPTutorial\WWW\TP5\public/../application/admin\view\common\foot.html";i:1508420199;}*/ ?>
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

<!-- 头部 -->
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__ADMIN__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__ADMIN__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('name'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('index/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div> 
<!-- /头部 -->	
<div class="main-container container-fluid">
	<div class="page-container">
		<!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                      <!--   <li>
                            <a href="http://www.chuanke.com/s2260700.html" target="_blank" class="menu-dropdown">
                                <i class="menu-icon fa fa-user"></i>
                                <span class="menu-text">ThinkPHP5视频教程</span>
                                <i class="menu-expand"></i>
                            </a>                            
                        </li> --> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">权限管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('AuthGroup/lst'); ?>">
                                    <span class="menu-text">用户组管理</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">管理员管理</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('AuthRule/lst'); ?>">
                                    <span class="menu-text">权限管理</span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文档</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                                           
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div> 
         <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                     <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="<?php echo url('lst'); ?>">用户组管理</a>
                    </li>
                    <li class="active">编辑用户组</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Body -->
            <div class="page-body">                   
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">编辑用户组</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="" method="post">
                                       <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">用户组名称</label>
                                            <div class="col-sm-6">
                                                <input class="form-control"  placeholder="" name="title" required="" type="text" value="<?php echo $info['title']; ?>">
                                                <input type="hidden" name='id' value="<?php echo $info['id']; ?>">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right">启用状态</label>
                                            <div class="col-sm-6">
                                            <p class="help-block col-sm-4 red">
                                                <label>
                                                    <input class="checkbox-slider colored-darkorange" name="status" value="1" <?php if($info['status']): ?>checked="checked"<?php endif; ?> type="checkbox">
                                                    <span class="text"></span>
                                                </label>
                                            </p>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                            <div class="col-sm-6">
                                               <table class="table table-hover">
                                                    <thead class="bordered-darkorange">
                                                        <tr>
                                                            <th>
                                                                配置权限
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                    <?php if(is_array($rule) || $rule instanceof \think\Collection || $rule instanceof \think\Paginator): $i = 0; $__LIST__ = $rule;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                                                  
                                                        <tr>
                                                            <td>
                                                                <label> 
                                                                 <?php echo str_repeat('&nbsp;', $vo['level']*5);?>
                                                                    <input <?php if(in_array($vo['id'],$info['rules'])){ echo 'checked = checked'; } ?> name="rules[]" value="<?php echo $vo['id']; ?>" dataid="id-<?php echo $vo['dataid']; ?>" class="inverted checkbox-parent <?php if($vo['level'] != 0): ?>checkbox-child <?php endif; ?>" type="checkbox">
                                                                    <span <?php if($vo['pid'] == 0): ?>style="font-size: 14px;font-weight:bold;"<?php endif; ?> class="text"><?php echo $vo['name']; ?></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Body -->
        </div>
    </div>  
</div>


	    <!--Basic Scripts-->
    <script src="__public__/admin/style/jquery_002.js"></script>
    <script src="__public__/admin/style/bootstrap.js"></script>
    <script src="__public__/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__public__/admin/style/beyond.js"></script>
    


</body>
</html>
<script type="text/javascript">
/* 权限配置 */
$(function () {
    //动态选择框，上下级选中状态变化
    $('input.checkbox-parent').on('change', function () {
        var dataid = $(this).attr("dataid");
        $('input[dataid^=' + dataid + ']').prop('checked', $(this).is(':checked'));
    });
    $('input.checkbox-child').on('change', function () {
        var dataid = $(this).attr("dataid");
        dataid = dataid.substring(0, dataid.lastIndexOf("-"));
        var parent = $('input[dataid=' + dataid + ']');
        if ($(this).is(':checked')) {
            parent.prop('checked', true);
            //循环到顶级
            while (dataid.lastIndexOf("-") != 2) {
                dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                parent = $('input[dataid=' + dataid + ']');
                parent.prop('checked', true);
            }
        } else {
            //父级
            if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                parent.prop('checked', false);
                //循环到顶级
                while (dataid.lastIndexOf("-") != 2) {
                    dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                    parent = $('input[dataid=' + dataid + ']');
                    if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                        parent.prop('checked', false);
                    }
                }
            }
        }
    });
});
    </script>