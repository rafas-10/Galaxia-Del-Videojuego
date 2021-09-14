<div class="col-md-6 d-flex">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-home"></i> Dashboard</h1>
        </div> <!-- Header -->    
        <div class="inside">
            <div class="form-check">
                <input type="checkbox" value="true" name="dashboard" @if(kvfj($u->permissions, 'dashboard')) checked @endif>
                <label for="dashboard"> Puede ver el Dashboard.</label>
            </div>

                <div class="form-check">
                    <input type="checkbox" value="true" name="dashboard_small_stats" @if(kvfj($u->permissions, 'dashboard_small_stats')) checked @endif>
                    <label for="dashboard_small_stats"> Puede ver las estadísticas rápidas.</label>
                </div>
        </div><!-- Inside -->
    </div><!-- Panel Shadow -->
</div><!-- Col-md-4 -->