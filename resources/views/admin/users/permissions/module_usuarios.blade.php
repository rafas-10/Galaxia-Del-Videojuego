<div class="col-md-6">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-users"></i> Usuarios</h1>
        </div> <!-- Header -->    
        <div class="inside">
            <div class="form-check">
                <input type="checkbox" value="true" name="user_list" @if(kvfj($u->permissions, 'user_list')) checked @endif> 
                <label for="user_list"> Puede listar los usuarios.</label>
            </div>
            
            <div class="form-check">
                <input type="checkbox" value="true" name="edit" @if(kvfj($u->permissions, 'edit')) checked @endif>
                <label for="edit"> Puede editar los usuarios.</label>
            </div>



            <div class="form-check">
                <input type="checkbox" value="true" name="permissions" @if(kvfj($u->permissions, 'permissions')) checked @endif>
                <label for="permissions"> Puede modificar los permisos.</label>
            </div>

            <div class="form-check">
                <input type="checkbox" value="true" name="delete" @if(kvfj($u->permissions, 'delete')) checked @endif>
                <label for="delete"> Puede eliminar los usuarios.</label>
            </div>
            
        </div><!-- Inside -->
    </div><!-- Panel Shadow -->
</div><!-- Col-md-4 -->