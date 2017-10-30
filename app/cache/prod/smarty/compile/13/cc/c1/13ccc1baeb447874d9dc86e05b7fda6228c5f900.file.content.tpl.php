<?php /* Smarty version Smarty-3.1.19, created on 2017-10-26 20:32:52
         compiled from "C:\wamp64\www\hechoenmexico\admin041qtkyqt\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420559f28cc4aec844-55923636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ccc1baeb447874d9dc86e05b7fda6228c5f900' => 
    array (
      0 => 'C:\\wamp64\\www\\hechoenmexico\\admin041qtkyqt\\themes\\default\\template\\content.tpl',
      1 => 1509031879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420559f28cc4aec844-55923636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f28cc4b0fad1_74646297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f28cc4b0fad1_74646297')) {function content_59f28cc4b0fad1_74646297($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
