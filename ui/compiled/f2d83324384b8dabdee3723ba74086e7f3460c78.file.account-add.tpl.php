<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:23:50
         compiled from "ui\theme\softhash\account-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10479286736066f0b6990475-16705098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2d83324384b8dabdee3723ba74086e7f3460c78' => 
    array (
      0 => 'ui\\theme\\softhash\\account-add.tpl',
      1 => 1433213238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10479286736066f0b6990475-16705098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    '_c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066f0b6c124c3_74975170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066f0b6c124c3_74975170')) {function content_6066f0b6c124c3_74975170($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_Account'];?>
</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add-post">
                    <div class="form-group">
                        <label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Title'];?>
</label>
                        <input type="text" class="form-control" id="account" name="account">
                    </div>
                    <div class="form-group">
                        <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="balance"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Initial Balance'];?>
</label>
                        <input type="text" class="form-control amount" id="balance" name="balance" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">
                    </div>


                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </form>

            </div>
        </div>



    </div>



</div>




<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>