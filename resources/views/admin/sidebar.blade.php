<div class="d-flex align-items-stretch">
<!-- Sidebar Navigation-->
<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/logo-kulineran.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Admin</h1>
            <p>Kulineran</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
                <!-- <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li> -->
                <li><a href="#menuDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Menu </a>
                  <ul id="menuDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_menu')}}">Tambah Menu</a></li>
                    <li><a href="{{url('view_menu')}}">Lihat Menu</a></li>
                  </ul>
                </li>
                <ul class="list-unstyled">
                <!-- <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li> -->
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Kategori </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_category')}}">Tambah Kategori</a></li>
                    <li><a href="{{url('view_category')}}">Lihat Kategori</a></li>
                  </ul>
                </li>
                <!-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li> -->
                <li><a href="#dropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Transaksi </a>
                  <ul id="dropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('view_transaction')}}">Lihat Transaksi</a></li>
                  </ul>
                </li>
        <!-- </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul> -->
      </nav>
      <!-- Sidebar Navigation end-->