<!-- formulario de alta de arbitros -->
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
