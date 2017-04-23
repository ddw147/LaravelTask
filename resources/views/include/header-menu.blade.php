<ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <i class="fa fa-user"></i>
                       <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                 <i class="fa fa-user"></i>
                       <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

                <p>
                  {{Auth::user()->name}}
                  <small>Member since {{Auth::user()->created_at->diffForHumans(null,true)}}</small>
                </p>
              </li>
              <!-- Menu Body -->
               <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat btnpost">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         </ul>