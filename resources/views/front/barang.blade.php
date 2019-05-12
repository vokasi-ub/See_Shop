@extends('front.index')
@section('content')
     
       
             
                <form action="search-front" method="GET">
                <table><tr>
                <td> <input type="text" name="search" class="form-control pull-right" placeholder="{{old('search')}}"></td>
                <td> <button type="submit" class="btn btn-default"><i class="fa fa-search" value="search"></i></button></td></tr>
                </table>
                 
               
             
  </form>
            <br>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">

                  <tr>
                      <th>ID Barang</th>
                      
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Stok</th>
                      <th>Gambar</th>
                      <th>Harga</th>
                      
                  </tr>
                    @foreach($barangs as $data_barang)
                  <tr>
                    <td>{{$data_barang->id}}</td>
                    <td>{{$data_barang->kode_barang}}</td>
                    <td>{{$data_barang->nama_barang}} </td>
                    <td>{{$data_barang->stok}}</td>
                    <td><img src="{{ URL::to('/')}}/images/{{ $data_barang->gambar }}" class="img-tumbnail" width="100" /></td>
                    <td>{{$data_barang->harga}}</td>
                    
                    <td>
                   
                    <a data-toggle="modal" href="#myModal" id="id" class="btn btn-primary">Beli</a>
                    @endforeach
                    </tr>
              </table>
              </td>
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Prosedur  Pembelian</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         
                        </div>
                        <div class="modal-body">
                       <b> <p> Dikarenakan Produk Kami Barang Impor , Maka Untuk Pemesanan Hubungi 0812 3214 0049 </p> </b>
                        </div>
                        <div class="modal-footer">
                       
                            
                        </div>
                        
                      </div>
                    </div>
                  </div>

                 
              	
              
               
              <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li>{{ $barangs->links() }}</li>
                
              </ul>
            </div>
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          <br>
        @endsection