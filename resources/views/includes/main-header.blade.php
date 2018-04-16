<header class="main-header">

  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>{{config('app.logo-mini-1')}}</b>{{config('app.logo-mini-2')}}</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{config('app.logo-lg-1')}}</b>{{config('app.logo-lg-2')}}</span>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    @include('includes.main-header.navbar-right-menu')

  </nav>
</header>