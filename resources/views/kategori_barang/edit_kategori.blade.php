@extends('dashboard')

@section('content')
<h4>Ubah Data</h4>
@foreach($kategori_barangs as $kategori_barang)
<form action="{{route('kategori_barang.update',$kategori_barang->id_kategori_barang)}}" method="post">
@method('PATCH')
{{ csrf_field() }}
<input type="hidden" name="id_kategori_barang" value="{{ $kategori_barang->id_kategori_barang }}"> <br/>

    <div class="form-group {{ $errors->has('jenis_barang') ? 'has-error' : '' }}">
        <label for="jenis_barang" class="control-label">Jenis Barang</label>
        <input type="text" class="form-control" name="jenis_barang"  value="{{$kategori_barang->jenis_barang}}">
        @if ($errors->has('jenis_barang'))
            <span class="help-block">{{ $errors->first('jenis_barang') }}</span>
        @endif
    </div>


    <div class="form-group {{ $errors->has('created_at') ? 'has-error' : '' }}">
        <label for="created_at" class="control-label">Tanggal Input</label>
        <input type="text" class="form-control" name="created_at" value="{{$kategori_barang->created_at}}">
        @if ($errors->has('created_at'))
            <span class="help-block">{{ $errors->first('created_at') }}</span>
        @endif
    </div>

    <div class="form-group {{ $errors->has('updated_at') ? 'has-error' : '' }}">
        <label for="updated_at" class="control-label">Tanggal Update</label>
        <input type="date" class="form-control" name="updated_at" value="{{$kategori_barang->updated_at}}">
        @if ($errors->has('updated_at'))
            <span class="help-block">{{ $errors->first('updated_at') }}</span>
        @endif
    </div>
    


    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Simpan Data">
        <a href="{{ route('kategori_barang.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endforeach
@endsection