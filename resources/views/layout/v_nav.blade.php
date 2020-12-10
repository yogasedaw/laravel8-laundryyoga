
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"> <i class="fa fa-home"></i> <span>Home</span></span></a></li>
          <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="/admin"> <i class="fa fa-user"></i> <span>Admin</span></span></a></li>
          <li class="{{ request()->is('pengusaha') ? 'active' : '' }}"><a href="/pengusaha"> <i class="fa fa-id-badge"></i> <span>Pengusaha</span></span></a></li>
          <li class="{{ request()->is('pelanggan') ? 'active' : '' }}"><a href="/pelanggan"> <i class="fa fa-child"></i> <span>Pelanggan</span></span></a></li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Admin</a></li>
            <li class="treeview">
              <li><a href="#"><i class="fa fa-circle-o"></i> Pengusaha</a></li>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        
        
      </ul>