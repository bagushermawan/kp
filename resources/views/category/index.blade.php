@extends('layouts.admin-master')

@section('title')
Category
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>All Categories</h1>
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
  <div>
        <div class="card">
            <div class="card-header">
                <h4>Category <span>({{$count}})</span></h4>
                <div class="card-header-action">
                    <a  href="{{route('category.create')}}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 10%;"><center>No</center></th>
                                <th style="width: 75%;">Name</th>
                                <th style="width: 15%;"><center>Action</center></th>
                            </tr>
                            @foreach($daftar_kategori as $no => $category)
                            <tr>
                                <td><center>{{++$no + ($daftar_kategori->currentPage()-1) * $daftar_kategori->perPage()}}</center></td>
                                <td>{{ $category->name }}</td>
                                <td class="text-right"><center>
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <a class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button onclick="klik()">Klik aku mas!</button>
<script>
	function klik(){
		swal ("Yes!", "Makasih udah diklik mas", "success")
	}
</script>
                    {{$daftar_kategori->links()}}
                    <!-- <div class="text-center p-3 text-muted">
                        <h5>No Results</h5>
                        <p>Looks like you have not added any users yet!</p>
                    </div> -->
                </div>
                <!-- <div class="text-center p-4 text-muted">
                    <h5>Loading</h5>
                    <p>Please wait, data is being loaded...</p>
                </div> -->
            </div>
        </div>
        <!-- <div class="text-center">
            <button class="btn btn-primary"><span>Loading <i class="fas fa-spinner fa-spin"></i></span><span>Load More</span></button>
        </div> -->
    </div>
    </div>
</section>
@endsection

