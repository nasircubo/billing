<?php /* Smarty version Smarty-3.1.13, created on 2021-04-02 06:25:23
         compiled from "ui\theme\softhash\transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3145922616066f1132f0b68-11863661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe40c712836d6b5f097dc576569c71fa44d1773' => 
    array (
      0 => 'ui\\theme\\softhash\\transactions.tpl',
      1 => 1435164820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3145922616066f1132f0b68-11863661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'paginator' => 0,
    'd' => 0,
    'ds' => 0,
    '_c' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6066f113684b61_68202639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6066f113684b61_68202639')) {function content_6066f113684b61_68202639($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>
. <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h5>

        </div>
        <div class="ibox-content">

            <table class="table table-bordered sys_table">
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
                <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
                    <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr']=='0.00'){?>warning <?php }else{ ?>info<?php }?>">
                        <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                        
                        

                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['type']=='Income'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income'];?>

                               <?php }elseif($_smarty_tpl->tpl_vars['ds']->value['type']=='Expense'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense'];?>

                                <?php }elseif($_smarty_tpl->tpl_vars['ds']->value['type']=='Transfer'){?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer'];?>

                                <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>

                        <?php }?>
                        </td>

                        <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['amount'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                        <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['dr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                        <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['cr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                        <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['bal']<0){?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['bal'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
                    </tr>
                <?php } ?>



            </table>

        </div>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>
 <!-- Widget-1 end-->

    <!-- Widget-2 end-->
</div> <!-- Row end-->


<!-- Row end-->


<!-- Row end-->

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>