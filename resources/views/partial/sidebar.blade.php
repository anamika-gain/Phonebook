
  <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">

            <nav class="drawer  drawer--dark">
                <div class="drawer-spacer drawer-spacer-border">
                    <div class="media align-items-center">
                        <img src="assets/images/avatars/andrew-robles-300868.jpg" class="img-fluid rounded-circle mr-2" width="40" alt="">
                        <div class="media-body" style="line-height: 1.2">
                            <a href="profile.html"><strong>Andrew Robles</strong></a>
                            <div>Site Manager</div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-clear-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="profile.html" class="dropdown-item dropdown-item-action ">View Profile</a>
                                <a href="account.html" class="dropdown-item dropdown-item-action ">Edit Account</a>
                                <a href="#" class="dropdown-item dropdown-item-action">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DROPDOWN -->
               
                <!-- HEADING -->
                <div class="drawer-heading">
                    Menu
                </div>
                <!-- MENU -->
                <ul class="drawer-menu" id="mainMenu" data-children=".drawer-submenu">
                    
                    <li class="drawer-menu-item ">
                        <a href="#">
                            <i class="material-icons">home</i>
                            <span class="drawer-menu-text">Dashboard</span>
                      </a>
                    </li>

                    <li class="drawer-menu-item drawer-submenu">
                        <a data-toggle="collapse" data-parent="#mainMenu" href="#" data-target="#pageMenu" aria-controls="pageMenu" aria-expanded="false" class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">Contacts</span>
                      </a>
                        <ul class="collapse" id="pageMenu">
                            
                            <li class="drawer-menu-item"><a href="{{url('contacts')}}">Contact List</a></li>
                            <li class="drawer-menu-item"><a href="#">Create New Bill - Old Patient</a></li>
                            <li class="drawer-menu-item"><a href="#">Token/Slip Generate</a></li>
                            <li class="drawer-menu-item"><a href="#">Due Collection</a></li>
                            <li class="drawer-menu-item"><a href="#">Collection History</a></li>
                            <li class="drawer-menu-item"><a href="#">View My Transction</a></li>
                        </ul>
                    </li>
                    <li class="drawer-menu-item drawer-submenu">
                        <a  href="{{url('favlist')}}"  class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">Favourite List</span>
                      </a>
                    </li>
                     <li class="drawer-menu-item drawer-submenu">
                        <a  href="{{route('logoutuser')}}"  class="collapsed">
                        <i class="material-icons">layers</i>
                        <span class="drawer-menu-text">Logout</span>
                      </a>
                    </li>
                    

                </ul>
               
            </nav>

        </div>
    </div>
</div>

</div>
<!-- // END drawer-layout -->