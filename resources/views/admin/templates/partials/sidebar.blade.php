<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p> {{ auth()->user()->name }}</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>


            <li><a href="{{ route('admin.author.index')}}"><i class="fa fa-user"></i> <span>Penulis</span></a></li>

            <li><a href="{{ route('admin.book.index')}}"><i class="fa fa-book"></i> <span>Buku</span></a></li>

            <li><a href="{{ route('admin.borrow.index')}}"><i class="fa fa-book"></i> <span>Buku Sedang Dipinjam</span></a></li>

            <li><a href="https://adminlte.io/docs"><i class="fa fa-users"></i> <span>Users</span></a></li>

            {{-- <li><a href="{{ route('admin.ijin.index')}}"><i class="fa fa-users"></i> <span>Data Pelayanan Perijinan</span></a></li> --}}


          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
