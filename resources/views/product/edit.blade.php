@extends('layouts.admin-master')

@section('title')
Edit Product
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Product</h1>
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
                        <h4>Edit Product -> <u>({{$product->title}})</u></h4>
                        <div class="card-header-action">
                             <a  href="{{route('product')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;All Product</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form-horizontal form-label-left" method="post" action="{{ route('product.update', ['id' => $product->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" placeholder="Stetoskop" name="title" value="{{ $product->title }}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" placeholder="Lorem ipsum oraora"
                                        name="description" value="{{ $product->description }}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                <div class="col-sm-12 col-md-7">
                                <small class="text-muted">Current image</small><br>
                            @if($product->image)
                            <img src="{{asset('storage/' . $product->image)}}" width="96px" />
                            @endif
                                    <br><br><input type="file" class="form-control" placeholder="Laptop, Aksesoris, .."
                                        name="image" value="{{ $product->image }}">
                                        <small class="text-muted">Kosongkan jika tidak ingin mengubah cover</small>
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
                                            placeholder="4500" value="{{ $product->price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" placeholder="9" name="stock" value="{{ $product->stock }}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name="category_id[]" multiple id="categories" class="form-control">
                            </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-icon icon-left btn-success"><i class="fas fa-check"></i><span> Update</span></button>
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
<script>
$('#categories').select2({
 ajax: {
 url: 'http://localhost/kape/public/category/search',
 processResults: function(data){
 return {
 results: data.map(function(item){return {id: item.id, text:
item.name} })
 }
 }
 }
});
var categories = {!! $product->categories !!}
 categories.forEach(function(category){
 var option = new Option(category.name, category.id, true, true);
 $('#categories').append(option).trigger('change');
 });
</script>


@endsection

