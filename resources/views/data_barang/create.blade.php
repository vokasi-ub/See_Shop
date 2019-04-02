@extends('dashboard')

@section('content')

<section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <br>
    <br>

    
   
	<form action="/see_shop/public/data_barang/store" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('nama_barang') ? 'has-error' : '' }}">
        <label for="nama_barang" class="control-label">Nama Kategori</label>
        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
        @if ($errors->has('nama_barang'))
            <span class="help-block">{{ $errors->first('nama_barang') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('gambar') ? 'has-error' : '' }}">
        <label for="gambar" class="control-label">Gambar</label>
        <input type="file" class="form-control" name="gambar" placeholder="Gambar">
        @if ($errors->has('gambar'))
            <span class="help-block">{{ $errors->first('gambar') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
        <label for="harga" class="control-label">Harga</label>
        <input type="text" class="form-control" name="harga" placeholder="Harga Barang">
        @if ($errors->has('harga'))
            <span class="help-block">{{ $errors->first('harga') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('created_at') ? 'has-error' : '' }}">
        <label for="created_at" class="control-label">Tanggal Input</label>
        <input type="date" class="form-control" name="created_at" placeholder="Tanggal Input">
        @if ($errors->has('created_at'))
            <span class="help-block">{{ $errors->first('created_at') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('updated_at') ? 'has-error' : '' }}">
        <label for="updated_at" class="control-label">Tanggal Update</label>
        <input type="date" class="form-control" name="updated_at" placeholder="Tanggal Update">
        @if ($errors->has('updated_at'))
            <span class="help-block">{{ $errors->first('updated_at') }}</span>
        @endif
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Simpan Data">
        <a href="{{ route('data_barang.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection