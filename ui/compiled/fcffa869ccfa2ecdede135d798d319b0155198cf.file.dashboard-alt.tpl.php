<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:23:11
         compiled from "ui\theme\softhash\dashboard-alt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10349793606066f08f1a4a00-64267791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcffa869ccfa2ecdede135d798d319b0155198cf' => 
    array (
      0 => 'ui\\theme\\softhash\\dashboard-alt.tpl',
      1 => 1435511486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10349793606066f08f1a4a00-64267791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_c' => 0,
    'ti' => 0,
    '_url' => 0,
    'te' => 0,
    'mi' => 0,
    'me' => 0,
    'net_worth' => 0,
    'pg' => 0,
    'pgb' => 0,
    'pgc' => 0,
    'd' => 0,
    'ds' => 0,
    'inc' => 0,
    'incs' => 0,
    'exp' => 0,
    'exps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066f08f6bb306_56695279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066f08f6bb306_56695279')) {function content_6066f08f6bb306_56695279($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-plus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Today'];?>
 </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ti']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit/" class="btn btn-success btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Deposit'];?>
</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="widget style1 red-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-minus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Today'];?>
 </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['te']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense/" class="btn btn-warning btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Expense'];?>
</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-plus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income This Month'];?>
 </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['mi']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 red-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-minus fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense This Month'];?>
 </span>
                    <h3 class="font-bold"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['me']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sortable ui-sortable" id="sys_sortable">
    <div class="row" id="sort_3">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income n Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                </div>
                <div class="ibox-content">
                    <div id="chart"></div>
                </div>
            </div>

        </div>
        <!-- Widget-5 end-->

    </div>
    <div class="row" id="sort_2">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="#" id="set_goal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-bullseye"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Goal'];?>
</a>
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth n Account Balances'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <div>
                        <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['net_worth']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h3>
                        <div>
                            <span><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['net_worth']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['_c']->value['networth_goal'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
 </span>
                            <small class="pull-right"><?php echo $_smarty_tpl->tpl_vars['pg']->value;?>
%</small>
                        </div>


                        <div class="progress progress-small">
                            <div style="width: <?php echo $_smarty_tpl->tpl_vars['pgb']->value;?>
%;" class="progress-bar progress-bar-<?php echo $_smarty_tpl->tpl_vars['pgc']->value;?>
"></div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered" style="margin-top: 26px;">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['balance']<0){?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['balance'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income vs Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                </div>
                <div class="ibox-content">
                    <div id="dchart"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- Row end-->
    <div class="row" id="sort_3">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Income'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['incs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incs']->key => $_smarty_tpl->tpl_vars['incs']->value){
$_smarty_tpl->tpl_vars['incs']->_loop = true;
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['incs']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['incs']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['incs']->value['description'];?>
</a> </td>
                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['incs']->value['amount'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>

        </div>


        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Expense'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <?php  $_smarty_tpl->tpl_vars['exps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['exps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['exp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['exps']->key => $_smarty_tpl->tpl_vars['exps']->value){
$_smarty_tpl->tpl_vars['exps']->_loop = true;
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['exps']->value['date']));?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['exps']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['exps']->value['description'];?>
</a> </td>
                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['exps']->value['amount'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            </tr>
                        <?php } ?>



                    </table>
                </div>
            </div>

        </div>


    </div></div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>