<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>本科教学督导工作平台-教务处</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="本科教学督导工作平台 北京师范大学">
    <meta name="author" content="信息科学与技术学院 大数据与物联网实验室 北京师范大学">
    <!--[if lt IE 9]>
    <script src='/jwcdd/Public/assets/javascripts/html5shiv.js' type='text/javascript'></script>
    <![endif]-->
    <link href='/jwcdd/Public/assets/stylesheets/bootstrap/bootstrap.css' media='all' rel='stylesheet' type='text/css' />
    <link href='/jwcdd/Public/assets/stylesheets/bootstrap/bootstrap-responsive.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jquery ui -->
    <link href='/jwcdd/Public/assets/stylesheets/jquery_ui/jquery-ui-1.10.0.custom.css' media='all' rel='stylesheet' type='text/css' />
    <link href='/jwcdd/Public/assets/stylesheets/jquery_ui/jquery.ui.1.10.0.ie.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / switch buttons -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/bootstrap_switch/bootstrap-switch.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / xeditable -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/xeditable/bootstrap-editable.css' media='all' rel='stylesheet' type='text/css' />
    <link href='/jwcdd/Public/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / wysihtml5 (wysywig) -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jquery file upload -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / full calendar -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/fullcalendar/fullcalendar.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / select2 -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/select2/select2.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / mention -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/mention/mention.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / tabdrop (responsive tabs) -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/tabdrop/tabdrop.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jgrowl notifications -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/jgrowl/jquery.jgrowl.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / datatables -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/datatables/bootstrap-datatable.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / dynatrees (file trees) -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/dynatree/ui.dynatree.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / color picker -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/bootstrap_colorpicker/bootstrap-colorpicker.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / datetime picker -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / daterange picker) -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / flags (country flags) -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/flags/flags.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / slider nav (address book) -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/slider_nav/slidernav.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / fuelux (wizard) -->
    <link href='/jwcdd/Public/assets/stylesheets/plugins/fuelux/wizard.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / flatty theme -->
    <link href='/jwcdd/Public/assets/stylesheets/light-theme.css' id='color-settings-body-color' media='all' rel='stylesheet' type='text/css' />
    <!-- / demo -->
    <link href='/jwcdd/Public/assets/stylesheets/demo.css' media='all' rel='stylesheet' type='text/css' />
</head>
<body class='contrast-red fixed-header fixed-navigation'>
<header>
    <div class='navbar navbar-fixed-top'>
        <div class='navbar-inner'>
            <div class='container-fluid'>
                <a class='brand' href='index.html'>
                    <i class='icon-heart-empty'></i>
                    <span class='hidden-phone'>本科教学督导工作平台</span>
                </a>
                <!--a class='toggle-nav btn pull-left' href='#'>
                    <i class='icon-reorder'></i>
                </a-->
                <ul class='nav pull-right'>
                    <!--li class='dropdown light only-icon'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                            <i class='icon-adjust'></i>
                        </a>
                        <ul class='dropdown-menu color-settings'>
                            <li class='color-settings-body-color'>
                                <div class='color-title'>Body color</div>
                                <a data-change-to='/jwcdd/Public/assets/stylesheets/light-theme.css' href='#'>
                                    Light
                                    <small>(default)</small>
                                </a>
                                <a data-change-to='/jwcdd/Public/assets/stylesheets/dark-theme.css' href='#'>
                                    Dark
                                </a>
                                <a data-change-to='/jwcdd/Public/assets/stylesheets/dark-blue-theme.css' href='#'>
                                    Dark blue
                                </a>
                            </li>
                            <li class='divider'></li>
                            <li class='color-settings-contrast-color'>
                                <div class='color-title'>Contrast color</div>
                                <a href="#" data-change-to="contrast-red"><i class='icon-adjust text-red'></i>
                                    Red
                                    <small>(default)</small>
                                </a>
                                <a href="#" data-change-to="contrast-blue"><i class='icon-adjust text-blue'></i>
                                    Blue
                                </a>
                                <a href="#" data-change-to="contrast-orange"><i class='icon-adjust text-orange'></i>
                                    Orange
                                </a>
                                <a href="#" data-change-to="contrast-purple"><i class='icon-adjust text-purple'></i>
                                    Purple
                                </a>
                                <a href="#" data-change-to="contrast-green"><i class='icon-adjust text-green'></i>
                                    Green
                                </a>
                                <a href="#" data-change-to="contrast-muted"><i class='icon-adjust text-muted'></i>
                                    Muted
                                </a>
                                <a href="#" data-change-to="contrast-fb"><i class='icon-adjust text-fb'></i>
                                    Facebook
                                </a>
                                <a href="#" data-change-to="contrast-dark"><i class='icon-adjust text-dark'></i>
                                    Dark
                                </a>
                                <a href="#" data-change-to="contrast-pink"><i class='icon-adjust text-pink'></i>
                                    Pink
                                </a>
                                <a href="#" data-change-to="contrast-grass-green"><i class='icon-adjust text-grass-green'></i>
                                    Grass green
                                </a>
                                <a href="#" data-change-to="contrast-sea-blue"><i class='icon-adjust text-sea-blue'></i>
                                    Sea blue
                                </a>
                                <a href="#" data-change-to="contrast-banana"><i class='icon-adjust text-banana'></i>
                                    Banana
                                </a>
                                <a href="#" data-change-to="contrast-dark-orange"><i class='icon-adjust text-dark-orange'></i>
                                    Dark orange
                                </a>
                                <a href="#" data-change-to="contrast-brown"><i class='icon-adjust text-brown'></i>
                                    Brown
                                </a>
                            </li>
                        </ul>
                    </li-->
                    <li class='dropdown medium only-icon widget'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                            <i class='icon-rss'>提醒</i>
                            <span class='label'>5</span>
                        </a>
                        <ul class='dropdown-menu'>
                            <li>
                                <a href='#'>
                                    <div class='widget-body'>
                                        <div class='pull-left icon'>
                                            <i class='icon-comment text-info'></i>
                                        </div>
                                        <div class='pull-left text'>
                                            [2014-09-08] 宏观经济学
                                            <small class='muted'>教九401</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='divider'></li>
                            <li>
                                <a href='#'>
                                    <div class='widget-body'>
                                        <div class='pull-left icon'>
                                            <i class='icon-comment text-info'></i>
                                        </div>
                                        <div class='pull-left text'>
                                            [2014-09-08] 国际金融
                                            <small class='muted'>教八314</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='divider'></li>
                            <li>
                                <a href='#'>
                                    <div class='widget-body'>
                                        <div class='pull-left icon'>
                                            <i class='icon-comment text-info'></i>
                                        </div>
                                        <div class='pull-left text'>
                                            [2014-09-08] 政治经济学
                                            <small class='muted'>教七201</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='divider'></li>
                            <li>
                                <a href='#'>
                                    <div class='widget-body'>
                                        <div class='pull-left icon'>
                                            <i class='icon-comment text-info'></i>
                                        </div>
                                        <div class='pull-left text'>
                                            [2014-09-08] 理论力学
                                            <small class='muted'>教十212</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class='divider'></li>
                            <li>
                                <a href='#'>
                                    <div class='widget-body'>
                                        <div class='pull-left icon'>
                                            <i class='icon-comment text-info'></i>
                                        </div>
                                        <div class='pull-left text'>
                                            [2014-09-08] 有机化学
                                            <small class='muted'>教九101</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!--li class='widget-footer'>
                                <a href='#'>All notifications</a>
                            </li-->
                        </ul>
                    </li>
                    <li class='dropdown dark user-menu'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                            <img alt='Mila Kunis' height='23' src='/jwcdd/Public/assets/images/admin.ico' width='23' />
                            <span class='user-name hidden-phone'>管理员</span>
                            <b class='caret'></b>
                        </a>
                        <ul class='dropdown-menu'>
                            <li>
                                <a href='<?php echo U('User/user_profile');?>'>
                                    <i class='icon-user'></i>
                                    个人信息
                                </a>
                            </li>
                            <li>
                                <a href='<?php echo U('User/user_modify');?>'>
                                    <i class='icon-cog'></i>
                                    修改
                                </a>
                            </li>
                            <li class='divider'></li>
                            <li>
                                <a href='<?php echo U('Login/logout');?>'>
                                    <i class='icon-signout'></i>
                                    退出
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--form accept-charset="UTF-8" action="search_results.html" class="navbar-search pull-right hidden-phone" method="get" /><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
                    <button class="btn btn-link icon-search" name="button" type="submit"></button>
                    <input autocomplete="off" class="search-query span2" id="q_header" name="q" placeholder="搜索..." type="text" value="" />
                </form-->
            </div>
        </div>
    </div>
</header>
<div id='wrapper'>
<div id='main-nav-bg'></div>
<nav class='main-nav-fixed' id='main-nav'>
<div class='navigation'>
<ul class='nav nav-stacked'>
<!--li class='active'>
    <a href='index.html'>
        <i class='icon-exclamation-sign'></i>
        <span>通知</span>
    </a>
</li-->
<li>
    <a class='dropdown-collapse' href='#'>
        <i class='icon-user'></i>
        <span>人员管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='<?php echo U('User/user');?>'>
                <i class='icon-caret-right'></i>
                <span>系统用户</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('User/user_dd');?>'>
                <i class='icon-caret-right'></i>
                <span>督导用户</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-tasks'></i>
        <span>听课任务管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='<?php echo U('Task/task');?>'>
                <i class='icon-caret-right'></i>
                <span>分配</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('Task/showTask');?>'>
                <i class='icon-caret-right'></i>
                <span>查看</span>
            </a>
        </li>
    </ul>
</li>
<li class=''>
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-edit'></i>
        <span>听课记录</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='<?php echo U('Record/record');?>'>
                <i class='icon-caret-right'></i>
                <span>填写</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('Record/showRecord');?>'>
                <i class='icon-caret-right'></i>
                <span>查看</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a class='dropdown-collapse' href='#'>
        <i class='icon-table'></i>
        <span>数据报表</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='<?php echo U('Analysis/analysis');?>'>
                <i class='icon-caret-right'></i>
                <span>数据检索</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('Analysis/department');?>'>
                <i class='icon-caret-right'></i>
                <span>按院系统计</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('Analysis/month');?>'>
                <i class='icon-caret-right'></i>
                <span>按院系月份统计</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('Analysis/supervisor');?>'>
                <i class='icon-caret-right'></i>
                <span>按督导统计</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('Analysis/teacher');?>'>
                <i class='icon-caret-right'></i>
                <span>按教师职称统计</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo U('Analysis/course');?>'>
                <i class='icon-caret-right'></i>
                <span>按课程名统计</span>
            </a>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
<section id='content'>
<div class='container-fluid'>
<div class='row-fluid' id='content-wrapper'>
<div class='span12'>
<div class='row-fluid'>
    <div class='span12'>
        <div class='page-header'>
            <h1 class='pull-left'>
                <i class='icon-table'></i><span>数据报表</span></h1>
            <div class='pull-right'>
                <ul class='breadcrumb'>
                    <li>
                        <a href="index.html"><i class='icon-bar-chart'></i>
                        </a>
                    </li>
                    <li class='separator'>
                        <i class='icon-angle-right'></i>
                    </li>
                    <li class='active'>数据检索</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--课程名称、学生院系、年级、课程类别 -->

<div class='row-fluid'>
<div class='span3'>
    <div class='row-fluid'>
        <strong>学年学期</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <optgroup label='2014-2015 学年'>
                <option value='AK' />2013-2014 学年第 1 学期
                <option value='HI' />2013-2014 学年第 2 学期
            </optgroup>
            <optgroup label='2012-2013 学年'>
                <option value='AK' />2012-2013 学年第 1 学期
                 <option value='HI' />2012-2013 学年第 2 学期
            </optgroup>
            <optgroup label='2013-2014 学年'>
                <option value='AK' />2011-2012 学年第 1 学期
                <option value='HI' />2011-2012 学年第 2 学期
            </optgroup>
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>组别</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />督导小组-1
            <option value='HI' />督导小组-2
            <option value='CA' />督导小组-3
            <option value='NV' />督导小组-4
            <option value='OR' />督导小组-5
            <option value='WA' />督导小组-6
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>月份</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />1
            <option value='HI' />2
            <option value='CA' />3
            <option value='NV' />4
            <option value='OR' />5
            <option value='WA' />6
            <option value='AK' />7
            <option value='AK' />8
            <option value='HI' />9
            <option value='CA' />10
            <option value='NV' />11
            <option value='OR' />12
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>总体评价</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />好
            <option value='HI' />较好
            <option value='CA' />一般
            <option value='NV' />较差
            <option value='OR' />差
            <option value='WA' />未评价
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>听课专家</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />李春生
            <option value='HI' />张燕平
            <option value='CA' />连慕兰
            <option value='NV' />郑光宇
            <option value='OR' />尹冬冬
            <option value='WA' />谢文杰
        </select>
    </div>
</div>
</div>

<div class='row-fluid' style="margin-top:10px; margin-bottom:2px;">
<div class='span2'>
    <div class='row-fluid'>
        <strong>教师名称</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />林树明
            <option value='HI' />陈燕
            <option value='CA' />林明
            <option value='NV' />赵三
            <option value='OR' />王五
            <option value='WA' />小李
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>教师职称</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />教授
            <option value='HI' />副教授
            <option value='CA' />讲师
            <option value='NV' />高级工程师
            <option value='OR' />工程师
        </select>
    </div>
</div>
<div class='span4'>
    <div class='row-fluid'>
        <strong>教师单位</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />经济与工商管理学院
            <option value='HI' />信息科学与技术学院
            <option value='CA' />物理学系
            <option value='NV' />数学系
            <option value='OR' />化学学院
            <option value='WA' />天文系
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>上课地点</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />电子楼103
            <option value='HI' />教七304
            <option value='CA' />教八404
            <option value='NV' />教九301
            <option value='OR' />敬文讲堂
            <option value='WA' />教九502
        </select>
    </div>
</div>
</div>

<div class='row-fluid' style="margin-top:10px; margin-bottom:2px;">
<div class='span2'>
    <div class='row-fluid'>
        <strong>课程名称</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />计算机体系结构
            <option value='HI' />数理逻辑
            <option value='CA' />概率论
            <option value='NV' />历史文化赏析
            <option value='OR' />英文电影赏析
            <option value='WA' />数据库系统与应用
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>课程类别</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />实验课
            <option value='HI' />双语课
            <option value='CA' />新生研讨课
            <option value='NV' />新生研讨课\双语课
            <option value='OR' />新生研讨课\绪论课
            <option value='HI' />绪论课
            <option value='CA' />专业必修课
            <option value='NV' />公共必修课
            <option value='OR' />专业任选课
            <option value='OR' />公共任选课
        </select>
    </div>
</div>
<div class='span4'>
    <div class='row-fluid'>
        <strong>学生院系</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />经济与工商管理学院
            <option value='HI' />信息科学与技术学院
            <option value='CA' />物理学系
            <option value='NV' />数学系
            <option value='OR' />化学学院
            <option value='WA' />天文系
        </select>
    </div>
</div>
<div class='span2'>
    <div class='row-fluid'>
        <strong>年级</strong>
        <select class='select2 input-block-level'>
            <option value='-1' />------请选择------
            <option value='AK' />2014级
            <option value='HI' />2013级
            <option value='CA' />2012级
            <option value='NV' />2011级
        </select>
    </div>
</div>
<button class="btn btn-defalut pull-right" style="margin:17px 0px 0px 0px;">检索 | Search</button>
</div>
<div class='row-fluid'>
<div class='span12 box bordered-box green-border' style='margin-bottom:0;'>
<div class='box-header green-background'>
    <div class='text-center'>2013-2014学年第二学期督导听课汇总表</div>
    <button class='btn btn-success btn-large' name='button' style='position:absolute; left:0px;top:2px;'><i class='icon-share'>&nbsp;&nbsp;导入</i></button>
</div>
<div class='box-content box-no-padding'>
<div class='responsive-table'>
<div class='scrollable-area'>
<table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
<thead>
<tr>
          <td><b>序号</b></td>
          <td><b>组别</b></td>
          <td><b>听课月份</b></td>
          <td><b>教师姓名</b></td>
          <td><b>教师职称</b></td>
          <td><b>教师单位</b></td>
          <td><b>课程名称</b></td>
          <td><b>学生院系</b></td>
          <td><b>年级</b></td>
          <td><b>上课时间</b></td>
          <td><b>上课地点</b></td>
          <td><b>听课节数</b></td>
          <td><b>绪论课（导航课）评价</b></td>
          <td><b>助教工作情况</b></td>
          <td><b>对课堂教学的具体评价</b></td>
          <td><b>总体评价</b></td>
          <td><b>对学生学习的建议</b></td>
          <td><b>对教学环境的评价</b></td>
          <td><b>课程类别</b></td>
          <td><b>听课专家</b></td>
</tr>
</thead>
<tbody>
<tr>
    <td>44</td><td>1</td><td>4月</td><td>毕少兰</td><td>教授</td><td>天文系</td><td>恒星大气</td><td>天文系</td><td>2011</td><td>周二1-2节</td><td>教十206</td><td>2</td><td></td><td>有1名助教，负责收发、批改作业。</td><td>教师授课讲解到位，内容丰富充实，注重基本概念与教学表达。建议适当增加一些互动环节，调动所有学生的学习积极性。</td><td>较好</td><td>无迟到，大部分学生听讲认真，能跟上教师的讲课进度，互动环节欠主动。</td><td>投影仪有些偏暗</td><td></td><td>张燕平</td>
</tr>
<tr>
    <td>37</td><td>1</td><td>6月</td><td>曾少举</td><td>教授</td><td>生命科学学院</td><td>发育生物学与人类健康</td><td>生命科学学院</td><td>2013</td><td>周五5-6节</td><td>教八111</td><td>2</td><td></td><td>未见</td><td>基本情况：1、这门课的负责人提出，“以教师讲为主，介绍自己的学科”。曾少举老师作为团队一员，讲3次课，最后一节课时间给学生提问和讨论。2.神经发育内容复杂，一年级新生理解较困难。本次讲课的缺点是：主线不突出，基本发育过程讲的不透彻（可能是时间所限）压缩式，听不懂。加上教师语速快，条理不很清楚，显得匆匆忙忙的。3.从大小标题看，内容还是合适的有条理的，就是讲的不够清楚。</td><td>较好</td><td>到课15人，无迟到，比较专心听讲，2人瞌睡。向学校建议：研讨课选课应面向本院学生，尤其是理科院系更要如此。因为外系专业知识不够，无法“研讨”。</td><td>一般良好</td><td></td><td>连慕兰</td>
</tr>
<tr>
    <td>56</td><td>1</td><td>3月</td><td>陈燕</td><td>副教授</td><td>经济与工商管理学院</td><td>组织行为学</td><td>经济学院国际经贸</td><td>2012</td><td>周五9-10节</td><td>教九404</td><td>2</td><td></td><td>本门课配备了研究生助教谢宇涛，全程听了本次课。</td><td>教师授课态度认真，课前准备充分，采用了多媒体教学手段，课件板书突出了教学内容的重点。教师讲授清晰，概念、理论与实例有很好的结合，学生较易理解。建议增加课堂上与学生的交流互动。</td><td>较好</td><td>5人迟到5分钟，1人迟到10分钟，2人迟到20分钟，2人在课堂上玩手机，2人玩电脑，在课堂上与教师交流互动少。</td><td>教学环境好，多媒体设施运转正常。</td><td></td><td>郑光宇</td>
</tr>
<tr>
    <td>57</td><td>1</td><td>3月</td><td>陈阳</td><td>副教授</td><td>物理学系</td><td>量子物理学</td><td>天文系</td><td>2011.2012.2013辅修</td><td>周一3-4节</td><td>教八403</td><td>2</td><td></td><td>本门课配备了研究生助教，张聪慧，助教全程听了本次课。</td><td>教师授课态度认真，课前准备充分。对授课内容熟悉。采用了多媒体PPT，课件板书突出了教学内容中的重点，教师讲授较清晰，注重理论与实际的结合，建议在课堂上多与学生交流互动。</td><td>较好</td><td>无人迟到早退，学生听课注意力集中，课堂秩序好，在课堂上没有与教师交流互动。</td><td>教学环境好，多媒体设施运转正常。</td><td></td><td>郑光宇</td>
</tr>
<tr>
    <td>16</td><td>1</td><td>4月</td><td>陈阳</td><td>副教授</td><td>天文系</td><td>星系天文学</td><td>天文学及辅修</td><td>2011、2012、2013、</td><td>周二5-6节</td><td>教四111</td><td>2</td><td></td><td>助教听课</td><td>优点：1.讲课清楚，条理性，逻辑性均好。2.讲法是提出问题，针对性的讲、好。不足之处：1.学生认为，该教师讲课比较平淡，虽然思路清晰，却缺乏“语言生动富有感染力”，课堂气氛不够活跃。</td><td>较好</td><td>学生11人全到，纪律尚可</td><td>良好</td><td></td><td>连慕兰</td>
</tr>
<tr>
    <td>45</td><td>1</td><td>4月</td><td>陈阳</td><td>副教授</td><td>天文系</td><td>星系天文学</td><td>天文系</td><td>2011</td><td>4.15下午5-6节</td><td>教四111</td><td>2</td><td></td><td>无</td><td>教师能较清晰第讲授基本概念，讲授条理性清楚。教学内容充实，能反映学科发展的前沿及存在的问题，在教学过程中能设计互动环节，有一定的效果。但由于学生欠主动，没有达到预期的活跃课堂气氛的效果。教师讲课语言还欠生动，应在重点内容加重语气，注意抑扬顿挫。</td><td>较好</td><td>无迟到，绝大部分同学能认真听讲，小班上课教学效果较好，但与老师互动还欠主动</td><td>好</td><td></td><td>张燕平</td>
</tr>
<tr>
    <td>50</td><td>1</td><td>6月</td><td>崔丽</td><td>副教授</td><td>数学科学学院</td><td>数学建模</td><td>数学与应用数学</td><td>2012</td><td>6.3下午5-6节</td><td>教八106</td><td>2</td><td></td><td></td><td>教师上课用ppt与板书相结合，讲课基本清楚，能够当堂给学生布置小作业，当堂回答问题，讲课表达上语言缺少抑扬顿挫，应突出重点，在重要概念时应加重语气或重复，避免平淡和语气过快。</td><td>较好</td><td>由21名学生迟到，部分同学注意力不够集中个，在用笔记本做别的事情，部分同学互动不主动</td><td>好</td><td></td><td>张燕平</td>
</tr>
<tr>
    <td>2</td><td>1</td><td>3月</td><td>崔雪锋</td><td>副教授</td><td>全球变化与地球系统科学研究院</td><td>当代大学生对全球变化的认识与思辨</td><td>新生研讨课</td><td>2013</td><td>周二11-12节</td><td>教八212</td><td>2</td><td></td><td>不清楚</td><td>教学方式：教师讲一部分，学生分组准备选题，作报告，教师点评、提问，同学针对报告提问、讨论。优点：教师讲得好，内容科学性强，处于科学前沿。讲授清楚、态度亲和，比较随意。缺点：原定两组学生报告，有一组说“没有准备好”，不讲了。说明教学的组织工作未抓紧、落实。以致课堂时间多20及分钟浪费了，整个课堂气氛不紧凑。学生的ppt较草率，图注未写文字说明，发言也不连贯，说话偏少，效果不够好。</td><td>较好</td><td>总共约25人到课，迟到数人。同学作报告时，其他同学未专心听，做自己的事，瞌睡。</td><td>课桌抽屉里有垃圾。其他设施良好</td><td>新生研讨课</td><td>连慕兰</td>
</tr>
<tr>
   <td>41</td><td>1</td><td>3月</td><td>邓富国</td><td>教授</td><td>物理学系</td><td>电磁学</td><td>天文系、物理系</td><td>2013</td><td>周二3-4节</td><td>教十111</td><td>2</td><td></td><td>1名助教，负责收发作业</td><td>教师讲述清晰，表达准确，语言生动，讲课有节奏，系统性强。能够很自然地与学生产生互动，边讲边提问，互动很自然，取得良好的教学效果</td><td>好</td><td>3人迟到，全体学生注意力集中，能跟上老师的讲解进度，效果很好。</td><td>教室稍小，前排多遮挡</td><td></td><td>张燕平</td>
</tr>
<tr>
    <td>72</td><td>1</td><td>4月</td><td>狄承锋</td><td>副教授</td><td>经济与工商管理学院</td><td>外国经济思想史</td><td>经济学</td><td>2012</td><td>周二3-4节</td><td>教九301</td><td>2</td><td></td><td>本课程未配备研究生助教</td><td>教师教授态度认真，课前准备充分，课程讲授流利，使用了多媒体教学手段，课件板书突出了教学内容中的重点，注重拓宽学生的知识领域，对历史人物的全面评价，对学生的批判精神的语言有帮助。</td><td>较好</td><td>无人迟到早退，学生课堂听课注意力集中，课堂秩序好，课堂上与教师的教学互动较少。</td><td>教学环境好，多媒体设施运转正常。</td><td></td><td>郑光宇</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<hr class='hr-double' />

</section>
</div>
<!-- / jquery -->
<script src='/jwcdd/Public/assets/javascripts/jquery/jquery.min.js' type='text/javascript'></script>
<!-- / jquery mobile events (for touch and slide) -->
<script src='/jwcdd/Public/assets/javascripts/plugins/mobile_events/jquery.mobile-events.min.js' type='text/javascript'></script>
<!-- / jquery migrate (for compatibility with new jquery) -->
<script src='/jwcdd/Public/assets/javascripts/jquery/jquery-migrate.min.js' type='text/javascript'></script>
<!-- / jquery ui -->
<script src='/jwcdd/Public/assets/javascripts/jquery_ui/jquery-ui.min.js' type='text/javascript'></script>
<!-- / bootstrap -->
<script src='/jwcdd/Public/assets/javascripts/bootstrap/bootstrap.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/flot/excanvas.js' type='text/javascript'></script>
<!-- / sparklines -->
<script src='/jwcdd/Public/assets/javascripts/plugins/sparklines/jquery.sparkline.min.js' type='text/javascript'></script>
<!-- / flot charts -->
<script src='/jwcdd/Public/assets/javascripts/plugins/flot/flot.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/flot/flot.resize.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/flot/flot.pie.js' type='text/javascript'></script>
<!-- / bootstrap switch -->
<script src='/jwcdd/Public/assets/javascripts/plugins/bootstrap_switch/bootstrapSwitch.min.js' type='text/javascript'></script>
<!-- / fullcalendar -->
<script src='/jwcdd/Public/assets/javascripts/plugins/fullcalendar/fullcalendar.min.js' type='text/javascript'></script>
<!-- / datatables -->
<script src='/jwcdd/Public/assets/javascripts/plugins/datatables/jquery.dataTables.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js' type='text/javascript'></script>
<!-- / wysihtml5 -->
<script src='/jwcdd/Public/assets/javascripts/plugins/common/wysihtml5.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/common/bootstrap-wysihtml5.js' type='text/javascript'></script>
<!-- / select2 -->
<script src='/jwcdd/Public/assets/javascripts/plugins/select2/select2.js' type='text/javascript'></script>
<!-- / color picker -->
<script src='/jwcdd/Public/assets/javascripts/plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js' type='text/javascript'></script>
<!-- / mention -->
<script src='/jwcdd/Public/assets/javascripts/plugins/mention/mention.min.js' type='text/javascript'></script>
<!-- / input mask -->
<script src='/jwcdd/Public/assets/javascripts/plugins/input_mask/bootstrap-inputmask.min.js' type='text/javascript'></script>
<!-- / fileinput -->
<script src='/jwcdd/Public/assets/javascripts/plugins/fileinput/bootstrap-fileinput.js' type='text/javascript'></script>
<!-- / modernizr -->
<script src='/jwcdd/Public/assets/javascripts/plugins/modernizr/modernizr.min.js' type='text/javascript'></script>
<!-- / retina -->
<script src='/jwcdd/Public/assets/javascripts/plugins/retina/retina.js' type='text/javascript'></script>
<!-- / fileupload -->
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/tmpl.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/load-image.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/canvas-to-blob.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/jquery.iframe-transport.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/jquery.fileupload.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/jquery.fileupload-fp.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/jquery.fileupload-ui.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/fileupload/jquery.fileupload-init.js' type='text/javascript'></script>
<!-- / timeago -->
<script src='/jwcdd/Public/assets/javascripts/plugins/timeago/jquery.timeago.js' type='text/javascript'></script>
<!-- / slimscroll -->
<script src='/jwcdd/Public/assets/javascripts/plugins/slimscroll/jquery.slimscroll.min.js' type='text/javascript'></script>
<!-- / autosize (for textareas) -->
<script src='/jwcdd/Public/assets/javascripts/plugins/autosize/jquery.autosize-min.js' type='text/javascript'></script>
<!-- / charCount -->
<script src='/jwcdd/Public/assets/javascripts/plugins/charCount/charCount.js' type='text/javascript'></script>
<!-- / validate -->
<script src='/jwcdd/Public/assets/javascripts/plugins/validate/jquery.validate.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/validate/additional-methods.js' type='text/javascript'></script>
<!-- / naked password -->
<script src='/jwcdd/Public/assets/javascripts/plugins/naked_password/naked_password-0.2.4.min.js' type='text/javascript'></script>
<!-- / nestable -->
<script src='/jwcdd/Public/assets/javascripts/plugins/nestable/jquery.nestable.js' type='text/javascript'></script>
<!-- / tabdrop -->
<script src='/jwcdd/Public/assets/javascripts/plugins/tabdrop/bootstrap-tabdrop.js' type='text/javascript'></script>
<!-- / jgrowl -->
<script src='/jwcdd/Public/assets/javascripts/plugins/jgrowl/jquery.jgrowl.min.js' type='text/javascript'></script>
<!-- / bootbox -->
<script src='/jwcdd/Public/assets/javascripts/plugins/bootbox/bootbox.min.js' type='text/javascript'></script>
<!-- / inplace editing -->
<script src='/jwcdd/Public/assets/javascripts/plugins/xeditable/bootstrap-editable.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/xeditable/wysihtml5.js' type='text/javascript'></script>
<!-- / ckeditor -->
<script src='/jwcdd/Public/assets/javascripts/plugins/ckeditor/ckeditor.js' type='text/javascript'></script>
<!-- / filetrees -->
<script src='/jwcdd/Public/assets/javascripts/plugins/dynatree/jquery.dynatree.min.js' type='text/javascript'></script>
<!-- / datetime picker -->
<script src='/jwcdd/Public/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js' type='text/javascript'></script>
<!-- / daterange picker -->
<script src='/jwcdd/Public/assets/javascripts/plugins/bootstrap_daterangepicker/moment.min.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js' type='text/javascript'></script>
<!-- / max length -->
<script src='/jwcdd/Public/assets/javascripts/plugins/bootstrap_maxlength/bootstrap-maxlength.min.js' type='text/javascript'></script>
<!-- / dropdown hover -->
<script src='/jwcdd/Public/assets/javascripts/plugins/bootstrap_hover_dropdown/twitter-bootstrap-hover-dropdown.min.js' type='text/javascript'></script>
<!-- / slider nav (address book) -->
<script src='/jwcdd/Public/assets/javascripts/plugins/slider_nav/slidernav-min.js' type='text/javascript'></script>
<!-- / fuelux -->
<script src='/jwcdd/Public/assets/javascripts/plugins/fuelux/wizard.js' type='text/javascript'></script>
<!-- / flatty theme -->
<script src='/jwcdd/Public/assets/javascripts/nav.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/tables.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/theme.js' type='text/javascript'></script>
<!-- / demo -->
<script src='/jwcdd/Public/assets/javascripts/demo/jquery.mockjax.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/demo/inplace_editing.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/demo/charts.js' type='text/javascript'></script>
<script src='/jwcdd/Public/assets/javascripts/demo/demo.js' type='text/javascript'></script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>