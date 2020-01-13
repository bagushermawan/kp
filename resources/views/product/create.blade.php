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
                        <div class="card-header-action">
                            <a  href="{{route('product')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;All Product</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post"
                            action="{{ route('product.store') }}">
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
                                    <input type="text" class="form-control" placeholder="Lorem ipsum oraora"
                                        name="description">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control" placeholder="Laptop, Aksesoris, .."
                                        name="image">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Rp
                                        </div>
                                        <input type="text" class="form-control currency" name="price"
                                            placeholder="4500">
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
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <!-- <div class="selectgroup selectgroup-pills">
                                        @foreach($category as $k)
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="category_id" value="{{$k->id}}" class="selectgroup-input">
                                            <span class="selectgroup-button">{{$k->name}}</span>
                                        </label>
                                        @endforeach
                                    </div> -->
                                    <select name="category_id[]" multiple id="categories" class="form-control">
                            </select>
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
@section('scripts')
<script type="text/javascript">
  $('#categories').select2({
    placeholder: 'Select Category',
    ajax: {
      url: "{{route('category.ajaxsearch')}}",
      dataType: 'json',
      processResults: function (data) {
        return {
          results:  $.map(data, function (item) {
            return {
              text: item.name,
              id: item.id
            }
          })
        };
      },
      cache: true
    }
  });
</script>

@endsection

