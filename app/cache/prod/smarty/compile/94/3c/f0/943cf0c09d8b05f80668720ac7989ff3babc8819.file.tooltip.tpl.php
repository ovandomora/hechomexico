<?php /* Smarty version Smarty-3.1.19, created on 2017-10-26 20:32:54
         compiled from "C:\wamp64\www\hechoenmexico\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:981659f28cc6aa2bd9-26852218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943cf0c09d8b05f80668720ac7989ff3babc8819' => 
    array (
      0 => 'C:\\wamp64\\www\\hechoenmexico\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1509031890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '981659f28cc6aa2bd9-26852218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f28cc6abe165_54114980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f28cc6abe165_54114980')) {function content_59f28cc6abe165_54114980($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
