<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:15:50
         compiled from "ui\theme\softhash\users-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8791488666066eed6150058-07306478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79bc735a408be2938cf5a27ef7cbe1b5317cd193' => 
    array (
      0 => 'ui\\theme\\softhash\\users-edit.tpl',
      1 => 1435502122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8791488666066eed6150058-07306478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066eed6acad89_93860957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066eed6acad89_93860957')) {function content_6066eed6acad89_93860957($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit User'];?>
</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit-post">
                    <div class="form-group">
                        <label for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
">
                    </div>
                    <?php if (($_smarty_tpl->tpl_vars['user']->value['id'])!=($_smarty_tpl->tpl_vars['d']->value['id'])){?>
                        <div class="form-group">
                            <label for="user_type">User <?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                            <select name="user_type" id="user_type" class="form-control">
                                <option value="Admin" <?php if ($_smarty_tpl->tpl_vars['d']->value['user_type']=='Admin'){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Administrator'];?>
</option>
                                <option value="Employee" <?php if ($_smarty_tpl->tpl_vars['d']->value['user_type']=='Employee'){?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Employee'];?>
</option>

                            </select>
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['user_type_help'];?>
</span>
                        </div>
                    <?php }?>
                    <div class="form-group">
                        <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
                    </div>

                    <div class="form-group">
                        <label for="cpassword"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm Password'];?>
</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>

                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                </form>

            </div>
        </div>



    </div>



</div>




<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>