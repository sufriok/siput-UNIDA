<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-user fa-fw"></i> Admin<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('user.index') }}"><i class="fa fa-table fa-fw"></i> Data Admin</a>
                </li>
                <li>
                    <a href="{{ route('user.create') }}"><i class="fa fa-edit fa-fw"></i> Tambah Admin</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-cube fa-fw"></i> Paket<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('paket.index') }}"><i class="fa fa-table fa-fw"></i> Data Paket</a>
                </li>
                <li>
                    <a href="{{ route('paket.create') }}"><i class="fa fa-edit fa-fw"></i> Tambah Paket</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-envelope fa-fw"></i> Surat<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('surat.index') }}"><i class="fa fa-table fa-fw"></i> Data Surat</a>
                </li>
                <li>
                    <a href="{{ route('surat.create') }}"><i class="fa fa-edit fa-fw"></i> Tambah Surat</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
    </ul>
</div>