<div class="navbar-custom-menu">
  <ul class="nav navbar-nav">
    <!-- Messages: style can be found in dropdown.less-->
    @include('includes.main-header.navbar-right-menu.messages')

    <!-- Notifications Menu -->
    @include('includes.main-header.navbar-right-menu.notifications')

    <!-- Tasks Menu -->
    @include('includes.main-header.navbar-right-menu.tasks')
    
    <!-- User Account Menu -->
    @include('includes.main-header.navbar-right-menu.user')
    
    <!-- Control Sidebar Toggle Button -->
    <li>
      <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
    </li>
  </ul>
</div>