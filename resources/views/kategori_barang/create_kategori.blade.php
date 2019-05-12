@extends('dashboard')

@section('content')

<section class="content-header">
      
      <ol class="breadcrumb">
    
      </ol>
    </section>

    <br>
    <br>

    
   
	<form action="/see_shop/public/kategori_barang/store" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('id_kategori_barang') ? 'has-error' : '' }}">
        <label for="id_kategori_barang" class="control-label">ID Kategori</label>
        <input type="text" class="form-control" name="id_kategori_barang" placeholder="Masukkan ID Kategori" >
        @if ($errors->has('id_kategori_barang'))
            <span class="help-block">{{ $errors->first('id_kategori_barang') }}</span>
        @endif

    </div>
    <div class="form-group {{ $errors->has('jenis_barang') ? 'has-error' : '' }}">
        <label for="jenis_barang" class="control-label">Jenis Barang</label>
        <input type="text" class="form-control" name="jenis_barang" placeholder="Masukkan Jenis Barang">
        @if ($errors->has('jenis_barang'))
            <span class="help-block">{{ $errors->first('jenis_barang') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('created_at') ? 'has-error' : '' }}">
        <label for="created_at" class="control-label">Tanggal Input</label>
        <input type="date" class="form-control" name="created_at" placeholder="Tanggal Input">
        @if ($errors->has('created_at'))
            <span class="help-block">{{ $errors->first('created_at') }}</span>
        @endif
    </div>

    

    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Simpan Data">
        <a href="{{ route('kategori_barang.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection