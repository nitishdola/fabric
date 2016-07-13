<div class="navbar navbar-fixed-top scroll-hide">
    <div class="container-fluid top-bar">
      <div class="pull-right">
        <ul class="nav navbar-nav pull-right">
         
          
          <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
            Admin<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">
                <i class="icon-user"></i>My Account</a>
              </li>
              <li><a href="#">
                <i class="icon-gear"></i>Account Settings</a>
              </li>
              <li><a href="{{ route('admin.logout') }}">
                <i class="icon-signout"></i>Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="{{ route('admin.home') }}">Fabric</a>
      <form class="navbar-form form-inline col-lg-2 hidden-xs">
        <input class="form-control" placeholder="Search" type="text">
      </form>
    </div>
    <div class="container-fluid main-nav clearfix">
      <div class="nav-collapse">
        <ul class="nav">
          <li>
            <a class="current" href="{{ route('admin.home') }}"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
          </li><!-- 
          <li><a href="#">
            <span aria-hidden="true" class="se7en-feed"></span>Social Feed</a>
          </li> -->
          <li class="dropdown"><a data-toggle="dropdown" href="#">
            <span aria-hidden="true" class="se7en-star"></span>Master<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('party.create') }}">Add a Party</a></li>
              <li><a href="{{ route('party.index') }}">View All parties</a></li>
              <li>
                <a href="fontawesome.html">Colour</a>
              </li>
              <li><a href="glyphicons.html">UCM/Customer Refernce Number
                <!-- <span class="notifications label label-warning">New</span>
                <p>
                  Glyphicons
                </p> -->
                    
                </a>
                
              </li>
              <li>
                <a href="#">Process</a>
              </li>
              <li>
                <a href="#">Fabric</a>
              </li>
              <li>
                <a href="#">Yarn Master</a>
              </li>
              
            </ul>
          </li>
          <li><a href="#">
            <span aria-hidden="true" class="se7en-feed"></span>Fabric Transition</a>
          </li>
          <li><a href="#">
            <span aria-hidden="true" class="se7en-charts"></span>Reports</a>
          </li>
          <li><a href="#">
            <span aria-hidden="true" class="se7en-star"></span>Window</a>
          </li>
          <li><a href="#">
            <span aria-hidden="true" class="se7en-flag"></span>Help</a>
          </li>
        </ul>
      </div>
    </div>
  </div>