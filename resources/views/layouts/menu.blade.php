@if(Auth::user()->role === 'admin')
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Menu
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/home" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/petugas" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Petugas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/pengaduan" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Aduan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Generate Laporan</p>
                </a>
            </li>

        </ul>
    </li>
</ul>

@elseif(Auth::user()->role === 'petugas')
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Menu
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/home" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                </a>
            </li>
            
            <li class="nav-item">
                <a href="/pengaduan" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Aduan</p>
                </a>
            </li>        
        </ul>
    </li>
</ul>

@else
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Menu
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/home" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="Pengaduan" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajukan Pengaduan</p>
                </a>
            </li>

        </ul>
    </li>
</ul>
@endif
