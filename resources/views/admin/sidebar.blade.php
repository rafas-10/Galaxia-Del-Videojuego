<div class="sidebar shadow">
    <div class="section-top shadow">
        <div class="logo">
            <img class="img-fluid" src="/img/invert.jpg" alt="Galaxia del Videojuego">
        </div>

        <div class="user">
            
            
        </div>
    </div>
<div class="col-md-12">
    <div class="main">
        <ul class="list-group list-group-flush">
            @if(kvfj(Auth::user()->permissions, 'dashboard'))
            <li>
                <a href="{{ url('/admin') }}" class="lk-dashboard"> <i class="fas fa-user-shield"></i> Admin</a>
            </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'user_list'))
            <li>
                <a href="{{ url('/admin/usuarios/all') }}" class="lk-user_list lk-user_edit"><i class="fas fa-users"></i> Usuarios</a>
            </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'galeria_view'))
            <li>
                <a href="{{ url('/admin/galeria') }}"> <i class="fas fa-images"></i> Galería</a>
            </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'faq_list'))
            <li>
                <a href="{{ url('/admin/faq') }}"> <i class="fas fa-question"></i> FAQ</a>
            </li>
            @endif
            
        </ul>            
    </div>
</div>

</div>
