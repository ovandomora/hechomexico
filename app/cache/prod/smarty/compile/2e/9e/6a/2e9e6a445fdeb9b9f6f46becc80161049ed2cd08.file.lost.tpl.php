<?php /* Smarty version Smarty-3.1.19, created on 2017-10-26 20:32:54
         compiled from "C:\wamp64\www\hechoenmexico\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2093859f28cc6a39447-17353014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e9e6a445fdeb9b9f6f46becc80161049ed2cd08' => 
    array (
      0 => 'C:\\wamp64\\www\\hechoenmexico\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1509031890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2093859f28cc6a39447-17353014',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f28cc6a77c53_02585058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f28cc6a77c53_02585058')) {function content_59f28cc6a77c53_02585058($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
