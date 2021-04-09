<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:43:56
         compiled from "ui\theme\softhash\list-contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13193201976066f56c6a2a09-05308852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a926230793dc6eb2e714fd6efea3d9289500ddbc' => 
    array (
      0 => 'ui\\theme\\softhash\\list-contacts.tpl',
      1 => 1433308528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13193201976066f56c6a2a09-05308852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
    '_L' => 0,
    't' => 0,
    'ts' => 0,
    'd' => 0,
    'ds' => 0,
    'app_url' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066f56ca40b46_22860867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066f56ca40b46_22860867')) {function content_6066f56ca40b46_22860867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">

                <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search by Name'];?>
..."/>
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add/" class="btn btn-success btn-block"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Contact'];?>
</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">
<h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter by Tags'];?>
</h3>
                <ul class="tag-list" style="padding: 0">
                 <?php  $_smarty_tpl->tpl_vars['ts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ts']->key => $_smarty_tpl->tpl_vars['ts']->value){
$_smarty_tpl->tpl_vars['ts']->_loop = true;
?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/<?php echo $_smarty_tpl->tpl_vars['ts']->value['text'];?>
/"><i class="fa fa-tag"></i> <?php echo $_smarty_tpl->tpl_vars['ts']->value['text'];?>
</a></li>
                 <?php } ?>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="row">

    <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
        <div class="col-md-3 sdiv">
            <!-- CONTACT ITEM -->
            <div class="panel panel-default">
                <div class="panel-body profile">
                    <div class="profile-image">
                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['img']=='gravatar'){?>
                            <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['email']));?>
?s=200" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                        <?php }elseif($_smarty_tpl->tpl_vars['ds']->value['img']==''){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
sysfrm/uploads/system/profile-icon.png" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['lname'];?>
">
                        <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
">
                        <?php }?>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</div>

                    </div>

                </div>
                <div class="panel-body">
                    <div class="contact-info">

                        <p><small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</small><br/><?php if ($_smarty_tpl->tpl_vars['ds']->value['email']!=''){?><?php echo $_smarty_tpl->tpl_vars['ds']->value['email'];?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['n_a'];?>
 <?php }?></p>

                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>

                            <a href="delete/crm-user/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END CONTACT ITEM -->
        </div>
    <?php } ?>


</div>
<div class="row">
    <div class="col-md-12">
       <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>