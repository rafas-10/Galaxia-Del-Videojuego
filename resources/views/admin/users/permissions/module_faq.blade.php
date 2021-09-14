<div class="col-md-6">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-question"></i> FAQ</h1>
        </div> <!-- Header -->    
        <div class="inside">
            
            <div class="form-check">
                <input type="checkbox" value="true" name="faq_list" @if(kvfj($u->permissions, 'faq_list')) checked @endif>
                <label for="faq_list"> Puede ver las preguntas y respuestas.</label>
            </div>

            <div class="form-check">
                <input type="checkbox" value="true" name="faq_add" @if(kvfj($u->permissions, 'faq_add')) checked @endif>
                <label for="faq_add"> Puede agregar preguntas y respuestas.</label>
            </div>
            
            <div class="form-check">
                <input type="checkbox" value="true" name="faq_edit" @if(kvfj($u->permissions, 'faq_edit')) checked @endif>
                <label for="faq_edit"> Puede editar las preguntas y respuestas.</label>
            </div>

            <div class="form-check">
                <input type="checkbox" value="true" name="faq_delete" @if(kvfj($u->permissions, 'faq_delete')) checked @endif>
                <label for="faq_delete"> Puede eliminar las preguntas y respuestas.</label>
            </div>
        </div><!-- Inside -->
    </div><!-- Panel Shadow -->
</div><!-- Col-md-4 -->