<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:15:50
         compiled from "ui\theme\softhash\sections\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12370753496066eed6ef1587-75862809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57d4045413032b314bf707dfc546c831dd2227e8' => 
    array (
      0 => 'ui\\theme\\softhash\\sections\\header.tpl',
      1 => 1435219376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12370753496066eed6ef1587-75862809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    'app_url' => 0,
    '_theme' => 0,
    '_c' => 0,
    'xheader' => 0,
    'nav0' => 0,
    '_sysfrm_menu' => 0,
    '_url' => 0,
    '_L' => 0,
    'nav1' => 0,
    'nav2' => 0,
    'nav3' => 0,
    'nav4' => 0,
    'nav5' => 0,
    'nav6' => 0,
    'user' => 0,
    '_st' => 0,
    'notify' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066eed81e8779_94414692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066eed81e8779_94414692')) {function content_6066eed81e8779_94414692($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/skins/all.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/animate.css" rel="stylesheet">
    <link href="ui/lib/toggle/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css?ver=2.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/custom.css" rel="stylesheet">

    <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl']=='1'){?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet">
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['xheader']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>
</head>

<body class="fixed-nav">
<section>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">

                <?php echo $_smarty_tpl->tpl_vars['nav0']->value;?>

                <li <?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='dashboard'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['_c']->value['redirect_url'];?>
/"><i class="fa fa-th-large"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span></a></li>
                <?php echo $_smarty_tpl->tpl_vars['nav1']->value;?>

                <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='contacts'){?>active<?php }?>">
                    <a href="#"><i class="fa fa-building-o"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['CRM'];?>
</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</a></li>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Contacts'];?>
</a></li>

                    </ul>
                </li>
                <?php echo $_smarty_tpl->tpl_vars['nav2']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='transactions'){?>active<?php }?>">
                        <a href="#"><i class="fa fa-database"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Deposit'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Expense'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/transfer/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Transactions'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
generate/balance-sheet/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance Sheet'];?>
</a></li>
                        </ul>
                    </li>
                    <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['nav3']->value;?>

                

                <?php if (($_smarty_tpl->tpl_vars['_c']->value['invoicing']=='1')||($_smarty_tpl->tpl_vars['_c']->value['quotes']=='1')){?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='invoices'){?>active<?php }?>">
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['invoicing']=='1'){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Invoice'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list-recurring/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring Invoices'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/recurring/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Recurring Invoice'];?>
</a></li>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['quotes']=='1'){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Quote'];?>
</a></li>
                            <?php }?>

                        </ul>
                    </li>

                    <?php }?>



                <?php echo $_smarty_tpl->tpl_vars['nav4']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='accounts'){?>active<?php }?>">
                        <a href="#"><i class="fa fa-building-o"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bank n Cash'];?>
</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Account'];?>
</a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Accounts'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/balances/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Balances'];?>
</a></li>

                        </ul>
                    </li>
                    <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['nav5']->value;?>

                <?php if (($_smarty_tpl->tpl_vars['_c']->value['invoicing']=='1')||($_smarty_tpl->tpl_vars['_c']->value['quotes']=='1')){?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='ps'){?>active<?php }?>">
                        <a href="#"><i class="fa fa-cube"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products n Services'];?>
</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Product'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Service'];?>
</a></li>


                        </ul>
                    </li>
                    <?php }?>


                <?php echo $_smarty_tpl->tpl_vars['nav6']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='reports'){?>active<?php }?>">
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/statement/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Statement'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Reports'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/expense/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Reports'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income-vs-expense/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Vs Expense'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports by Date'];?>
</a></li>
                            
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list-income/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Income'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list-expense/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Expense'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Transactions'];?>
</a></li>



                        </ul>
                    </li>

                    <?php }?>


                <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='util'){?>active<?php }?>">
                    <a href="#"><i class="fa fa-bars"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Utilities'];?>
 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity Log'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sent-emails/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Message Log'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbstatus/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database Status'];?>
</a></li>


                    </ul>
                </li>

                <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='my_account'){?>active<?php }?>">
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['My Account'];?>
 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>



                    </ul>
                </li>

                <?php if (($_smarty_tpl->tpl_vars['user']->value['user_type'])=='Admin'){?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_sysfrm_menu']->value=='settings'){?>active<?php }?>">
                        <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General Settings'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugins/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Users'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Gateways'];?>
</a></li>

                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['accounting']=='1'){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/expense-categories/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Categories'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/income-categories/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Categories'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/tags/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Methods'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
</a></li>
                            <?php }?>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/emls/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Settings'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/email-templates/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/customfields/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Contact Fields'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/automation/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation Settings'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/features/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</a></li>
                        </ul>
                    </li>
                    <?php }?>


            </ul>

        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-fixed-top white-bg" role="navigation" style="margin-bottom: 0">

                <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/system/logo.png" alt="Logo">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-dedent"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right hidden-xs">



                    <li>
                        <form class="navbar-form full-width" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search Customers'];?>
...">
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>

                    
                        
                            

                    

                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" id="get_activity" href="#" aria-expanded="true">
                            <i class="fa fa-bell"></i>
                        </a><div class="dropdown-backdrop"></div>
                        <ul class="dropdown-menu dropdown-alerts" id="activity_loaded">



                            <li id="activity_wait">
                                <div class="text-center link-block">
                                    <a href="javascript:void(0)">
                                        <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Please Wait'];?>
...</strong> <br> <br>
                                        <img class="text-center" src="sysfrm/uploads/system/download.gif" alt="Loading....">

                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown navbar-user">

                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <img src="ui/lib/imgs/default-user-avatar.png" alt="">
                            <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>
</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>

                        </ul>
                    </li>

                </ul>

            </nav>
        </div>

        <div class="row wrapper white-bg page-heading">
            <div class="col-lg-12">
                <h2 style="color: #2F4050; font-size: 16px; font-weight: 400; margin-top: 18px"><?php echo $_smarty_tpl->tpl_vars['_st']->value;?>
</h2>

            </div>

        </div>

        <div class="wrapper wrapper-content">
            <?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

<?php }?><?php }} ?>