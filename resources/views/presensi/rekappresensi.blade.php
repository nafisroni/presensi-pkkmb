<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <title>AdminLTE 3 | Starter</title>
    @include('template.head')
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- /.content-header -->

            <div class="col">
                <div class="card card-info card-outline">
                    <div class="card-header">REKAP DATA ABSENSI</div>
                </div>
            </div>
            <!-- Main content -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-info card-outline">
                            <div class="card-header">Lihat Data</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="label">Tanggal Awal</label>
                                    <input type="date" name="tglawal" id="tglawal" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="label">Tanggal Akhir</label>
                                    <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                                        Lihat <i class="fas fa-print"></i>
                                    </a>
                                </div>
                                <div class="col mx-auto text-center">
                                    <table class="table" border="1">
                                        <thead>
                                            <tr>
                                                <th>Mahasiswa</th>
                                                <th>Tanggal</th>
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                <th>WAKTU TOTAL</th>
                                            </tr>
                                        </thead>
                                        @foreach ($presensi as $item)
                                        <tbody class="">
                                            <tr>
                                                <td>{{ $item->user->name }}</td>
                                                <td>{{ $item->tgl }}</td>
                                                <td>{{ $item->jammasuk }}</td>
                                                <td>{{ $item->jamkeluar }}</td>
                                                <td>{{ $item->jamkerja }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <div class="col">
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                    <div class="p-3">
                        <h5>Title</h5>
                        <p>Sidebar content</p>
                    </div>
                </aside>
            </div>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('template.footer')
        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        @include('template.javascrip')
</body>

</html>