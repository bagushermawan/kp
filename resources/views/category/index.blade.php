@extends('layouts.admin-master')

@section('title')
Category
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>All Categories</h1>
    <div class="section-header-breadcrumb">
        <form action="{{ route('category.search') }}" method="get">
          <div class="input-group">
              <input type="search" class="form-control" placeholder="Search" name="q">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
          </div>
          </form>
      </div>
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
                <h4>Category (<span>{{$daftar_kategori->total()}}</span>)</h4>
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
                                    <a href="{{ route('category.destroy', ['id'=>$category->id])}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                    <a href="{{ route('category.edit', ['id'=>$category->id])}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
                                </center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- <button onclick="klik()">Klik aku mas!</button> -->
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
@section('scripts')
<script type = "text/javascript" >
    function klik() {
        swal({
                title: 'Are you sure?',
                text: "It will permanently deleted !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                reverseButtons: true,
            })
            .then(function (id) {
                swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
            })
    } 
    </script>
    <script>
        function confirmDelete(id) {
            swal({
                 title: 'Apakah Anda Yakin?',
                  text: "Anda Tidak Akan Dapat Mengembalikannya!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!',
                  reverseButtons:true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        (id).submit();
                    } else {
                        swal("Cancelled Successfully");
                    }
                });
        }
    </script>
@endsection

