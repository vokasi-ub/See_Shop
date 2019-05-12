@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">See Shop</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are registered! 
                    <br>
                    <a href="/see_shop/public/data_barang" class="btn btn-primary">Going To Back End</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
