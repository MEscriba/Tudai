<?php
/* Smarty version 4.2.1, created on 2022-09-30 19:01:27
  from 'C:\xampp\htdocs\Web 2\TPE\templates\tournament.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633720e7914555_74822480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be94e13a428e3343e3e074b98004491f402e863a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TPE\\templates\\tournament.tpl',
      1 => 1664557282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633720e7914555_74822480 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de designaciones -->
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-5">
            <div class="form-group">
                <label>Nombre y Apellido</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Asociacion</label>
                <input name="asociacion" type="text" class="form-control">  
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Region</label>  
                <input name="region" type="text" class="form-control">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php }
}
