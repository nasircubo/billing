<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:47:26
         compiled from "ui\theme\softhash\ps-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21125510146066f63ece6fd5-88915118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b93614f041bfa1f26ee7c2f56b32bfdf864ae3' => 
    array (
      0 => 'ui\\theme\\softhash\\ps-list.tpl',
      1 => 1433532256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21125510146066f63ece6fd5-88915118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'type' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066f63f030749_83187998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066f63f030749_83187998')) {function content_6066f63f030749_83187998($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrapper wrapper-content animated fadeInUp">

<div class="ibox">
<div class="ibox-title">
    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['List'];?>
 <?php if ($_smarty_tpl->tpl_vars['type']->value=='Product'){?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
 <?php }?></h5>
    <div class="ibox-tools">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>
</a>
    </div>
</div>
<div class="ibox-content" id="ibox_form">
<div class="input-group"><input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
" id="txtsearch" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" id="search" class="btn btn-sm btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button> </span></div>
    <input type="hidden" id="stype" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">

<div class="project-list mt-md">
    <div id="progressbar">
    </div>

<div id="sysfrm_ajaxrender">


</div>


</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>