<?php /* Smarty version Smarty-3.1.19, created on 2017-10-26 20:32:54
         compiled from "C:\wamp64\www\hechoenmexico\modules\welcome\views\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2283759f28cc69cfca7-50197848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f7ff7f20370478f9acc6c798a86f51365b2c01' => 
    array (
      0 => 'C:\\wamp64\\www\\hechoenmexico\\modules\\welcome\\views\\navbar.tpl',
      1 => 1509031890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2283759f28cc69cfca7-50197848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f28cc6a1deb9_76662249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f28cc6a1deb9_76662249')) {function content_59f28cc6a1deb9_76662249($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
