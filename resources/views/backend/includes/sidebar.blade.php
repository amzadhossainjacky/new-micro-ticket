<!--navigation-->
<div class="primary-menu">
    <nav class="navbar navbar-expand-lg align-items-center">
       <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
         <div class="offcanvas-header border-bottom">
             <div class="d-flex align-items-center">
                 <div class="">
                     <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
                 </div>
                 <div class="">
                     <h4 class="logo-text">Rocker</h4>
                 </div>
             </div>
           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
           <ul class="navbar-nav align-items-center flex-grow-1">
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                     <div class="parent-icon"><i class='bx bx-home-alt'></i>
                     </div>
                     <div class="menu-title d-flex align-items-center">Dashboard</div>
                     <div class="ms-auto dropy-icon"><i class='bx bx-chevron-down'></i></div>
                 </a>
                 <ul class="dropdown-menu">
                   <li><a class="dropdown-item" href="index.html"><i class='bx bx-pie-chart-alt' ></i>Default</a></li>
                   <li><a class="dropdown-item" href="index2.html"><i class='bx bx-shield-alt-2'></i>Alternate</a></li>
                   <li><a class="dropdown-item" href="index3.html"><i class='bx bx-line-chart'></i>Graphical</a></li>
                 </ul>
               </li>
           </ul>
         </div>
       </div>
   </nav>
</div>
<!--end navigation-->