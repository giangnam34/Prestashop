<?php
/* Smarty version 4.3.1, created on 2024-04-23 16:11:42
  from 'C:\xampp\htdocs\prestashop\adminGiangNam\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66277b4e2f3be0_41903403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b12c8b50e4c00ec6577dcc6a1858dea1317edb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminGiangNam\\themes\\default\\template\\content.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66277b4e2f3be0_41903403 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
