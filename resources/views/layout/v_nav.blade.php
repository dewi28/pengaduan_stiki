<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('/') ? 'active' : '' "><a href="home"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
          <li class="{{ request()->is('/') ? 'active' : '' "><a href="petugas"><i class="fa fa-user-plus"></i> <span>Petugas</span></a></li>
            <li class="{{ request()->is('/') ? 'active' : '' "><a href="user"><i class="fa fa-user"></i> <span>Mahasiswa</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Kategori</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="aplikasi"><i class="fa fa-circle-o"></i>Aplikasi</a></li>
          </ul>
        </li>
        <li class="{{ request()->is('/') ? 'active' : '' "><a href="pengaduan1"><i class="fa fa-book"></i> <span>Pengaduan</span></a></li>
      </ul>