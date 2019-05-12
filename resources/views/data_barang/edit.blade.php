@extends('dashboard')

@section('content')

<section class="content-header">
      <h1>
        Edit Data Barang
        <small>See Shop</small>
      </h1>
      <ol class="breadcrumb">
       
      </ol>
    </section>
@foreach($barangs as $data_barang)
<form action="{{route('data_barang.update',$data_barang->id)}}" method="post">
@method('PATCH')
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $data_barang->id }}"> <br/>

    <div class="form-group {{ $errors->has('nama_barang') ? 'has-error' : '' }}">
        <label for="nama_barang" class="control-label">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang"  value="{{ $data_barang->nama_barang}}">
        @if ($errors->has('nama_barang'))
            <span class="help-block">{{ $errors->first('nama_barang') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('kode_barang') ? 'has-error' : '' }}">
        <label for="kode_barang" class="control-label">Kode Barang</label>
        <input type="text" class="form-control" name="kode_barang" value="{{ $data_barang->kode_barang}}" >
        @if ($errors->has('kode_barang'))
            <span class="help-block">{{ $errors->first('kode_barang') }}</span>
        @endif

    </div>

    <div class="form-group {{ $errors->has('kode_barang') ? 'has-error' : '' }}">
        <label for="kode_barang" class="control-label">Stok Barang</label>
        <input type="text" class="form-control" name="stok" value="{{ $data_barang->stok}}" >
        @if ($errors->has('stok'))
            <span class="help-block">{{ $errors->first('stok') }}</span>
        @endif

    </div>

    <div class="form-group {{ $errors->has('gambar') ? 'has-error' : '' }}">
        <label for="gambar" class="control-label">Gambar</label>
        <input type="file" class="form-control" name="gambar"  value="{{ $data_barang->gambar}}">
        @if ($errors->has('gambar'))
            <span class="help-block">{{ $errors->first('gambar') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
        <label for="harga" class="control-label">Harga</label>
        <input type="text" class="form-control" name="harga"  value="{{$data_barang->harga}}">
        @if ($errors->has('harga'))
            <span class="help-block">{{ $errors->first('harga') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('created_at') ? 'has-error' : '' }}">
        <label for="created_at" class="control-label">Tanggal Input</label>
        <input type="text" class="form-control" name="created_at" value="{{$data_barang->created_at}}">
        @if ($errors->has('created_at'))
            <span class="help-block">{{ $errors->first('created_at') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('updated_at') ? 'has-error' : '' }}">
        <label for="updated_at" class="control-label">Tanggal Update</label>
        <input type="date" class="form-control" name="updated_at" value="{{$data_barang->updated_at}}">
        @if ($errors->has('updated_at'))
            <span class="help-block">{{ $errors->first('updated_at') }}</span>
        @endif
    </div>
    


    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Simpan Data"> Simpan
        <a href="{{ route('data_barang.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endforeach
@endsection