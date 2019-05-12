<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> See Shop </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('template/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('template/dist/css/skins/_all-skins.min.css')}}">
  <!-- Favicon-->
	<link rel="shortcut icon" href="{{asset('template2/img/fav.png')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="{{asset('template/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">

 @include('layouts.main-header')

  @include('layouts.main-sidebar')
       
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
        <small>See Shop</small>
      </h1>
      <ol class="breadcrumb">
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
          
              <a href="/see_shop/public/data_barang/create" class="btn btn-primary">Tambah Data</a>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <form action="search" method="GET">
                  <input type="text" name="search" class="form-control pull-right" placeholder="{{old('search')}}">
                  
                  
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search" value="search"></i></button>
                  </div>
                </div>
              </div>
            </div>
  </form>
            <br>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">

                  <tr>
                      <th>ID Barang</th>
                      <th>ID Kategori</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Stok</th>
                      <th>Gambar</th>
                      <th>Harga</th>
                      <th>Tanggal Input</th>
                      <th>Tanggal Update </th>
                  </tr>
                    @foreach($barangs as $data_barang)
                  <tr>
                    <td>{{$data_barang->id}}</td>
                    <td>{{$data_barang->id_kategori_barang}}</td>
                    <td>{{$data_barang->kode_barang}}</td>
                    <td>{{$data_barang->nama_barang}} </td>
                    <td>{{$data_barang->stok}}</td>
                    <td><img src="{{ URL::to('/')}}/images/{{ $data_barang->gambar }}" class="img-tumbnail" width="100" /></td>
                    <td>{{$data_barang->harga}}</td>
                    <td>{{$data_barang->created_at}}</td>
                    <td>{{$data_barang->updated_at}}</td>
                    <td>
                   
                    <a href="./data_barang/edit/{{ $data_barang->id }}" class="btn btn-primary">Edit</a>
                    |
                    	<a href="./data_barang/delete/{{ $data_barang->id }}" class="btn btn-primary">Hapus</a>
              	</td>
                    @endforeach
               </tr>
               
              </table>
              <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              {{ $barangs->links() }}
              </ul>
            </div>
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.main-footer')


 
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('template/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('template/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template/dist/js/demo.js')}}"></script>
</body>
</html>
