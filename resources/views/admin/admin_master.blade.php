@include('admin.includes.header')


  <!-- Main Sidebar Container -->
@include('admin.includes.sidebar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}
<br>
    <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
{{-- Footer --}}
@include('admin.includes.footer')