<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="?controller=employees&action=create" role="button">Agregar Empleado</a>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($employees as $employee) {?>
        <tr>
            <td> <?php echo $employee->id; ?> </td>
            <td> <?php echo $employee->nombre; ?> </td>
            <td> <?php echo $employee->correo; ?> </td>
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controller=employees&action=edit&id=<?php echo $employee->id; ?>" class="btn btn-primary">Editar</a>
                <a href="?controller=employees&action=delete&id=<?php echo $employee->id; ?>" class="btn btn-warning">Borrar</a>
            </div>    
            
            </td>
        </tr>
<?php } ?>
    </tbody>
</table>

    </div>
</div>



