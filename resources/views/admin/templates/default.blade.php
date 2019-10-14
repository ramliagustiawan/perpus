<!DOCTYPE html>
<html>

    @include('admin.templates.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.templates.partials.navbar')

  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.templates.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    @include('admin.templates.partials.contentheader')

    <!-- Main content -->
    <section class="content">

        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.templates.partials.footer')

  <!-- Control Sidebar -->

@include('admin.templates.partials.controlsidebar')
</div>
<!-- ./wrapper -->

{{--  script  --}}
@include('admin.templates.partials.script')

</body>
</html>
