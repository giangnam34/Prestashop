<?php
/* Smarty version 4.3.1, created on 2024-04-23 16:12:14
  from 'C:\xampp\htdocs\prestashop\adminGiangNam\themes\new-theme\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66277b6ec55eb7_99137509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8801f2c6e5cdc8b4989e2f39241a3ae6c5800fd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminGiangNam\\themes\\new-theme\\template\\layout.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/layout/quick_access.tpl' => 1,
    'file:components/layout/search_form.tpl' => 1,
    'file:components/layout/mobile_quickaccess.tpl' => 1,
    'file:components/layout/shop_list.tpl' => 1,
    'file:components/layout/notifications_center.tpl' => 1,
    'file:components/layout/employee_dropdown.tpl' => 1,
    'file:components/layout/nav_bar.tpl' => 1,
    'file:components/layout/error_messages.tpl' => 1,
    'file:components/layout/information_messages.tpl' => 1,
    'file:components/layout/confirmation_messages.tpl' => 1,
    'file:components/layout/warning_messages.tpl' => 1,
    'file:components/layout/non-responsive.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:error.tpl' => 1,
  ),
),false)) {
function content_66277b6ec55eb7_99137509 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
">
<head>
  <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

</head>

<body
  class="lang-<?php echo $_smarty_tpl->tpl_vars['iso_user']->value;
if ($_smarty_tpl->tpl_vars['lang_is_rtl']->value) {?> lang-rtl<?php }?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strtolower' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['controller_name']->value )) ));
if ($_smarty_tpl->tpl_vars['collapse_menu']->value) {?> page-sidebar-closed<?php }
if ((isset($_smarty_tpl->tpl_vars['is_multishop']->value)) && $_smarty_tpl->tpl_vars['is_multishop']->value) {?> multishop-enabled<?php }
if ((isset($_smarty_tpl->tpl_vars['lite_display']->value)) && $_smarty_tpl->tpl_vars['lite_display']->value) {?> light_display_layout<?php }
if (!empty($_smarty_tpl->tpl_vars['debug_mode']->value)) {?> developer-mode<?php }?>"
  <?php if ((isset($_smarty_tpl->tpl_vars['js_router_metadata']->value['base_url']))) {?>data-base-url="<?php echo $_smarty_tpl->tpl_vars['js_router_metadata']->value['base_url'];?>
"<?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['js_router_metadata']->value['token']))) {?>data-token="<?php echo $_smarty_tpl->tpl_vars['js_router_metadata']->value['token'];?>
"<?php }?>
>

<?php if ($_smarty_tpl->tpl_vars['display_header']->value) {?>
  <header id="header" class="d-print-none">

    <nav id="header_infos" class="main-header">
      <button class="btn btn-primary-reverse onclick btn-lg unbind ajax-spinner"></button>

            <i class="material-icons js-mobile-menu">menu</i>
      <a id="header_logo" class="logo float-left" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8' ));?>
"></a>
      <span id="shop_version"><?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
</span>

      <div class="component" id="quick-access-container">
        <?php $_smarty_tpl->_subTemplateRender("file:components/layout/quick_access.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <div class="component component-search" id="header-search-container">
        <div class="component-search-body">
          <div class="component-search-top">
            <?php $_smarty_tpl->_subTemplateRender("file:components/layout/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <button class="component-search-cancel d-none"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) ) ));?>
</button>
          </div>

          <?php $_smarty_tpl->_subTemplateRender("file:components/layout/mobile_quickaccess.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="component-search-background d-none"></div>
      </div>

      <?php if ((isset($_smarty_tpl->tpl_vars['debug_mode']->value)) && $_smarty_tpl->tpl_vars['debug_mode']->value == true) {?>
        <div class="component hide-mobile-sm" id="header-debug-mode-container">
          <a class="link shop-state"
             id="debug-mode"
             data-toggle="pstooltip"
             data-placement="bottom"
             data-html="true"
             title="<p class=&quot;text-left&quot;><strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your store is in debug mode.','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) ) ));?>
</strong></p><p class=&quot;text-left&quot;><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.','html'=>true,'sprintf'=>array('[1]'=>'<strong>','[/1]'=>'</strong>'),'d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) ) ));?>
</p>"
             href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPerformance'),'html','UTF-8' ));?>
"
          >
            <i class="material-icons">bug_report</i>
            <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Debug mode','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) ) ));?>
</span>
          </a>
        </div>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['maintenance_mode']->value)) && $_smarty_tpl->tpl_vars['maintenance_mode']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?>
          <p class="text-left text-nowrap">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your store is in maintenance mode.','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>
</strong>
          </p>
          <p class="text-left">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your visitors and customers cannot access your store while in maintenance mode.','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>

          </p>
          <p class="text-left">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To manage the maintenance settings, go to Shop Parameters > General > Maintenance tab.','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>

          </p>
          <?php if ((isset($_smarty_tpl->tpl_vars['maintenance_allow_admins']->value)) && $_smarty_tpl->tpl_vars['maintenance_allow_admins']->value) {?>
            <p class="text-left">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Admins can access the store front office without storing their IP.','d'=>'Admin.Navigation.Notification'),$_smarty_tpl ) );?>

            </p>
          <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <div class="component hide-mobile-sm" id="header-maintenance-mode-container">
          <a class="link shop-state"
             id="maintenance-mode"
             data-toggle="pstooltip"
             data-placement="bottom"
             data-html="true"
             title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'htmlspecialchars' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title') ));?>
"
             href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMaintenance'),'html','UTF-8' ));?>
"
          >
            <i class="material-icons"
              style="<?php if ((isset($_smarty_tpl->tpl_vars['maintenance_allow_admins']->value)) && $_smarty_tpl->tpl_vars['maintenance_allow_admins']->value) {?>color: var(--green);<?php }?>"
            >build</i>
            <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maintenance mode','d'=>'Admin.Navigation.Header'),$_smarty_tpl ) ) ));?>
</span>
          </a>
        </div>
      <?php }?>

      <div class="header-right">
        <?php if (!(isset($_smarty_tpl->tpl_vars['hideLegacyStoreContextSelector']->value)) || !$_smarty_tpl->tpl_vars['hideLegacyStoreContextSelector']->value) {?>
          <div class="component" id="header-shop-list-container">
            <?php $_smarty_tpl->_subTemplateRender("file:components/layout/shop_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_orders']->value || $_smarty_tpl->tpl_vars['show_new_customers']->value || $_smarty_tpl->tpl_vars['show_new_messages']->value) {?>
          <div class="component header-right-component" id="header-notifications-container">
            <?php $_smarty_tpl->_subTemplateRender("file:components/layout/notifications_center.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        <?php }?>

        <div class="component" id="header-employee-container">
          <?php $_smarty_tpl->_subTemplateRender("file:components/layout/employee_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['displayBackOfficeTop']->value))) {
echo $_smarty_tpl->tpl_vars['displayBackOfficeTop']->value;
}?>
      </div>
    </nav>
  </header>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['display_header']->value) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:components/layout/nav_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['page_header_toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['page_header_toolbar']->value;
}?>

<div id="main-div">
    <?php if ($_smarty_tpl->tpl_vars['install_dir_exists']->value) {?>
      <div class="alert alert-warning">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For security reasons, you must also delete the /install folder.','d'=>'Admin.Login.Notification'),$_smarty_tpl ) ) ));?>

      </div>
    <?php } else { ?>
      <?php if ((isset($_smarty_tpl->tpl_vars['modal_module_list']->value))) {
echo $_smarty_tpl->tpl_vars['modal_module_list']->value;
}?>

      <div class="<?php if ($_smarty_tpl->tpl_vars['display_header']->value) {?>content-div<?php }?> <?php if (!(isset($_smarty_tpl->tpl_vars['page_header_toolbar']->value))) {?>-notoolbar<?php }?> <?php if ($_smarty_tpl->tpl_vars['current_tab_level']->value == 3) {?>with-tabs<?php }?>">

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminAfterHeader'),$_smarty_tpl ) );?>


        <?php if ($_smarty_tpl->tpl_vars['display_header']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/error_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/information_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/confirmation_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php $_smarty_tpl->_subTemplateRender('file:components/layout/warning_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminEndContent'),$_smarty_tpl ) );?>


      </div>
    <?php }?>
</div>

<?php if ((!(isset($_smarty_tpl->tpl_vars['lite_display']->value)) || ((isset($_smarty_tpl->tpl_vars['lite_display']->value)) && !$_smarty_tpl->tpl_vars['lite_display']->value))) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:components/layout/non-responsive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="mobile-layer"></div>

  <?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['php_errors']->value))) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ((!(isset($_smarty_tpl->tpl_vars['lite_display']->value)) || ((isset($_smarty_tpl->tpl_vars['lite_display']->value)) && !$_smarty_tpl->tpl_vars['lite_display']->value))) {?>
  <?php if ((isset($_smarty_tpl->tpl_vars['modals']->value))) {?>
    <div class="bootstrap">
      <?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

    </div>
  <?php }
}?>

</body>
</html>
<?php }
}
