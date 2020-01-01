@extends('layouts.admin-master')

@section('title')
Create Product
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add Product</h1>
  </div>
  <div class="section-body">
  @if($errors->any())
          <div class="alert alert-danger">
              <p><strong>Oops, ada yang salah!</strong></p>
              <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
              </ul>
          </div>
        @endif
  <div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Add a New Product</h4>
            </div>
            <div class="card-body">
            <form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post" action="{{ route('product.store') }}">
                    {{ csrf_field() }}
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" placeholder="Stetoskop" name="title">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" placeholder="Lorem ipsum oraora" name="description">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" placeholder="Laptop, Aksesoris, .." name="image">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                    <div class="col-sm-12 col-md-7">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Rp
                            </div>
                            <input type="text" class="form-control currency" name="price" placeholder="4500">
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="number" class="form-control" placeholder="9" name="stock">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary"><span>Add</span></button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
  </div>
</section>
@endsection
