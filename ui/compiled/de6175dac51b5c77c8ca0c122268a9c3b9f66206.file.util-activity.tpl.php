<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:45:58
         compiled from "ui\theme\softhash\util-activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20535486936066f5e60cbf38-91793853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de6175dac51b5c77c8ca0c122268a9c3b9f66206' => 
    array (
      0 => 'ui\\theme\\softhash\\util-activity.tpl',
      1 => 1433318614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20535486936066f5e60cbf38-91793853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'cnt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066f5e64834e9_09532468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066f5e64834e9_09532468')) {function content_6066f5e64834e9_09532468($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row animated fadeInDown">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
: <?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
 </h5>
                <a href="#" class="btn btn-primary btn-sm pull-right" id="clear_logs"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Clear Old Data'];?>
</a>



            </div>
            <div class="ibox-content" id="sysfrm_ajaxrender">


                <table class="table table-bordered sys_table" id="sys_logs">
                    <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['ID'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['UID'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP'];?>
</th>

                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>