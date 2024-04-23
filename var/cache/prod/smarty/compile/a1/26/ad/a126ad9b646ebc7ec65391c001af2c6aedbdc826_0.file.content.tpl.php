<?php
/* Smarty version 4.3.1, created on 2024-04-23 16:12:14
  from 'C:\xampp\htdocs\prestashop\adminGiangNam\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66277b6e327b57_42361791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a126ad9b646ebc7ec65391c001af2c6aedbdc826' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminGiangNam\\themes\\new-theme\\template\\content.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66277b6e327b57_42361791 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
