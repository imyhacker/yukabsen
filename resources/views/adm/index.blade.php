@extends('layouts.admin')
@section('content')
        <!-- Topbar -->
<script src="{{asset('abs/js/sw.js')}}"></script>
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{asset('abs/images/admin.png')}}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>

                <a class="dropdown-item" href="/admin/userprofile">
          <i class="fas fa-fw fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Update User Profile</span></a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jam</div>
                      <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>

                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="txt"></div>
                   
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tanggal</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><script type='text/javascript'>

var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;

document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

</script></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Absen</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                    <div class="table-responsive">
                    <table id="tabel-data" class="table table-hover table-striped table-bordered" >
                      <thead class="thead-dark">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Tanggal</th>
                          <th>Kehadiran</th>
                          <th>Opt</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $siswa)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$siswa->nama}}</td>
                          <td>{{$siswa->kelas}}</td>
                          <td>{{$siswa->tanggal}}</td>
                          <td>{{$siswa->kehadiran}}</td>
                          <td>
                            <a href="/admin/{{$siswa->id}}/edit" class="badge badge-warning"><i class="fa fa-edit"></i></a>
                            <a href="/admin/{{$siswa->id}}/hapus" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  
                </div>




              </div>
                <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">List Document</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                    <div class="table-responsive">
                    <table id="doc" class="table table-bordered table-hover table-striped" >
                      <thead class="thead-dark">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Act</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($datadoc as $doc)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$doc->dokumen}}</td>
                          <td>
                            <a href="/admin/downloaddoc/{{$doc->dokumen}}" class="badge badge-success"><i class="fa fa-download"></i></a>
                            <a href="/admin/{{$doc->id}}/dochapus" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
            </div>
</div>
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">List Foto</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                    <div class="table-responsive">
                     <table id="foto" class="table table-bordered table-hover table-striped" >
                      <thead class="thead-dark center" >
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Act</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($dataimg as $img)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$img->image}}</td>
                          <td><img src="{{asset('image/'.$img->image)}}" alt="" width="100" height="100" class="rounded-circle"></td>
                          <td>
                            <a href="/admin/downloadimg/{{$img->image}}" class="badge badge-success"><i class="fa fa-download"></i></a>
                            <a href="/admin/{{$img->id}}/fotohapus" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
            </div>
</div>
          </div>

          <!-- Content Row -->
          
        </div>
        <!-- /.container-fluid -->
        
<!-- Modal -->

@endsection