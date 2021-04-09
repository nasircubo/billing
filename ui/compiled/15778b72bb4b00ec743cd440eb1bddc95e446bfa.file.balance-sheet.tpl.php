<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:53:32
         compiled from "ui\theme\softhash\balance-sheet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:341933976066f7ace78982-57040111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15778b72bb4b00ec743cd440eb1bddc95e446bfa' => 
    array (
      0 => 'ui\\theme\\softhash\\balance-sheet.tpl',
      1 => 1433223874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '341933976066f7ace78982-57040111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'ds' => 0,
    '_c' => 0,
    'tbal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066f7ad3246c2_49159982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066f7ad3246c2_49159982')) {function content_6066f7ad3246c2_49159982($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance Sheet'];?>
 </h5>

        </div>
        <div class="ibox-content">

            <table class="table table-bordered sys_table">

                <th width="80%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
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
            <table class="table invoice-total">
                <tbody>

                <tr>
                    <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                    <td><strong><span <?php if ($_smarty_tpl->tpl_vars['tbal']->value<0){?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['tbal']->value,2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</strong></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Widget-2 end-->
</div> <!-- Row end-->


<!-- Row end-->


<!-- Row end-->

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>