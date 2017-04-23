<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           <i class="fa fa-user"></i>
                       <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
        </div>
      </div>
      <!-- search form -->
        <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>User Management</span>
          </a>
          <ul class="treeview-menu">
               <li><a href="/users"><i class="fa fa-users"></i>List</a></li>
          </ul>
        </li>
        <li  >
          <a href="/change-password">
          <i class="fa fa-lock"></i>
            Change Password</a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>MailBox</span>
          </a>
          <ul class="treeview-menu">
               <li><a href="/message/inbox"><i class="fa fa-envelope"></i>Inbox</a></li>
               <li><a href="/message/sent"><i class="fa fa-envelope"></i>Sent</a></li>
               @if(Auth::user()->hasRole('admin'))
               <li><a href="/message/all-messages"><i class="fa fa-users"></i>All</a></li>
               @endif
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>