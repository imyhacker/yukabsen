<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('adm/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
<script src="{{asset('abs/js/swal.js')}}"></script>
  <!-- Custom styles for this template-->
  <link href="{{asset('adm/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top" onload="startTime()">

@if ($message = Session::get('Kirim'))

<script>
  Swal.fire({
  title: 'Sukses',
  text: 'Data Berhasil Di Kirim',
  icon: 'success',
  confirmButtonText: 'Oke !'
})
</script>
@endif

@if ($message = Session::get('hapus'))

<script>
  Swal.fire({
  title: 'Hapus',
  text: 'Data Berhasil Di Hapus',
  icon: 'error',
  confirmButtonText: 'Oke !'
})
</script>
@endif
@if ($message = Session::get('Edit'))

<script>
  Swal.fire({
  title: 'Sukses',
  text: 'Data Berhasil Di Edit',
  icon: 'info',
  confirmButtonText: 'Oke !'
})
</script>
@endif
@if ($message = Session::get('User'))

<script>
  Swal.fire({
  title: 'Sukses',
  text: 'Data Profile Kamu Berhasil Di Perbaharui',
  icon: 'info',
  confirmButtonText: 'Oke !'
})
</script>
@endif


@if ($message = Session::get('dokumen'))

<script>
  Swal.fire({
  title: 'Sukses',
  text: 'Dokumen Berhasil Di Kirim !',
  icon: 'success',
  confirmButtonText: 'OKe !'
})
</script>
@endif

@if ($message = Session::get('foto'))

<script>
  Swal.fire({
  title: 'Sukses',
  text: 'Foto Berhasil Di Kirim !',
  icon: 'success',
  confirmButtonText: 'OKe !'
})
</script>
@endif
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item pt-10">
        <a class="nav-link" href="/admin/add">
          <i class="fas fa-fw fa-plus"></i>
          <span>Add New Absen</span></a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilities</h6>

<a type="text" class="collapse-item" data-toggle="modal" data-target="#exampleModal">
 <i class="fas fa-fw fa-upload"></i> Upload Document
</a>
            <a type="text" class="collapse-item" data-toggle="modal" data-target="#exampleModalImg">
 <i class="fas fa-fw fa-upload"></i> Upload Foto
</a>
          </div>
        </div>
      </li>
 
      <!-- Divider -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
@yield('content')

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; {{ config('app.name')}} | {{date('Y')}} </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="custom-file">
<form method="post" action="/admin/updoc" enctype="multipart/form-data">
            @csrf
    <input type="file" class="custom-file-input" type="file" name="FileUpload" accept=
"application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
text/plain, application/pdf" id="validatedCustomFile" name="FileUpload" accept="image/*" required>
    <label class="custom-file-label" for="validatedCustomFile" >Choose file...</label>


</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
            </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="custom-file">
<form method="post" action="/admin/addfoto" enctype="multipart/form-data">
            @csrf
    <input type="file" class="custom-file-input" type="file" name="FileUpload" accept=
"image/*" id="validatedCustomFile" name="FileUpload" accept="image/*" required>
    <label class="custom-file-label" for="validatedCustomFile" >Choose file...</label>


</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
            </form>
    </div>
  </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('adm/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('adm/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('adm/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('adm/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('adm/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('adm/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('adm/js/demo/chart-pie-demo.js')}}"></script>
  <script type="text/javascript" charset="utf8" src="{{asset('depan/jquery.dataTables.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
        $('#doc').DataTable();
        $('#foto').DataTable();
    });
</script>

<script>
      