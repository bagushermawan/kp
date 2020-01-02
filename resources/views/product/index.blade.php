@extends('layouts.admin-master')

@section('title')
Product
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>All Products</h1>
  </div>

  <div class="section-body">
  @if($errors->any())
          <div class="alert alert-danger">
              <p><strong>Opps Something went wrong</strong></p>
              <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
              </ul>
          </div>
        @endif
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('gagal'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('delete'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
        @endif
  <div>
        <div class="card">
            <div class="card-header">
                <h4>Product <span>({{$count}})</span></h4>
                <div class="card-header-action">
                    <a  href="{{route('product.create')}}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 5%;"><center>No</center></th>
                                <th style="width: 15%;">Title</th>
                                <th style="width: 30%;">Description</th>
                                <th style="width: 20%;"><center>Image</center></th>
                                <th style="width: 10%;">Price</th>
                                <th style="width: 10%;">Stock</th>
                                <th style="width: 10%;"><center>Action</center></th>
                            </tr>
                            @foreach($daftar_product as $no => $product)
                            <tr style="height:120px";>
                                <td><center>{{++$no + ($daftar_product->currentPage()-1) * $daftar_product->perPage()}}</center></td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <center>@if($product->image)
                                    <img src="{{$product->image}}"/>

                                        @elseif($product->image)
                                        <img src="{{asset('/storage/'.$product->image)}}" width="70px" />

                                        @else
                                        N/A
                                        @endif
                                        </center>
                                </td>
                                <td>Rp {{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>

                                <td class="text-right"><center>
                                    <a href="{{ route('product.destroy', ['id'=>$product->id])}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                    <a href="#"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                </center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- <button onclick="klik()">Klik aku mas!</button> -->
                    {{$daftar_product->links()}}
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
