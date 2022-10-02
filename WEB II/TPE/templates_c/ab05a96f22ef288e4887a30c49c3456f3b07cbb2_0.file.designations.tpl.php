<?php
/* Smarty version 4.2.1, created on 2022-09-30 19:34:02
  from 'C:\xampp\htdocs\Web 2\TPE\templates\designations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6337288a71b354_97065903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab05a96f22ef288e4887a30c49c3456f3b07cbb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TPE\\templates\\designations.tpl',
      1 => 1664559239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:umpires.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6337288a71b354_97065903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:umpires.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de arbitros -->
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['umpires']->value, 'umpire');
$_smarty_tpl->tpl_vars['umpire']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['umpire']->value) {
$_smarty_tpl->tpl_vars['umpire']->do_else = false;
?>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['umpire']->value->nombre;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['umpire']->value->asociacion;?>
 - <?php echo $_smarty_tpl->tpl_vars['umpire']->value->region;?>
 </span>
          
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p class="mt-3"><small>Mostrando arbitros disponibles</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
