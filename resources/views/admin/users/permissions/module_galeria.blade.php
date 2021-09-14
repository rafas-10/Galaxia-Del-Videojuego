<div class="col-md-6">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-images"></i> Galería</h1>
        </div> <!-- Header -->    
        <div class="inside">
            <div class="form-check">
                <input type="checkbox" value="true" name="galeria_view" @if(kvfj($u->permissions, 'galeria_view')) checked @endif>
                <label for="galeria_view"> Puede ver las imagenes.</label>
            </div>    
            
            <div class="form-check">
                <input type="checkbox" value="true" name="galeria_new" @if(kvfj($u->permissions, 'galeria_new')) checked @endif>
                <label for="galeria_new"> Puede agregar las imágenes.</label>
            </div> 

            <div class="form-check">
                <input type="checkbox" value="true" name="galeria_add" @if(kvfj($u->permissions, 'galeria_add')) checked @endif>
                <label for="galeria_add"> Puede terminar completar todo el proceso de imágenes.</label>
            </div> 

            <div class="form-check">
                <input type="checkbox" value="true" name="galeria_delete" @if(kvfj($u->permissions, 'galeria_delete')) checked @endif>
                <label for="galeria_delete"> Puede eliminar las imágenes.</label>
            </div> 

        </div><!-- Inside -->
    </div><!-- Panel Shadow -->
</div><!-- Col-md-4 -->