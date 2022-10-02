<?php
/* Smarty version 4.2.1, created on 2022-09-30 19:04:48
  from 'C:\xampp\htdocs\Web 2\TPE\templates\umpires.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633721b055f950_21125575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebdf04a9c782631b80812cd1d35956d0c74cb7be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TPE\\templates\\umpires.tpl',
      1 => 1664557428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633721b055f950_21125575 (Smarty_Internal_Template $_smarty_tpl) {
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
