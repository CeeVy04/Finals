<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-satellite"></i>
    </div>
    <div class="sidebar-brand-text mx-2">Tech Products</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
  <!-- Nav Item - Product -->
  <li class="nav-item {{ request()->is('products') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products') }}">
      <i class="fas fa-shopping-cart"></i>
      <span>Product</span></a>
  </li>

  <li class="nav-item {{ request()->is('ContactUs') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contactus') }}">
      <i class="fas fa-fw fa-phone-square"></i>
      <span>Contact Us</span></a>
  </li>
  
  
  <!-- Nav Item - About -->
  <li class="nav-item {{ request()->is('AboutUs') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('aboutus') }}">
      <i class="fas fa-fw fa-info"></i>
      <span>About us</span></a>
  </li>

 
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  

</ul>
