@extends('layouts.admin-master')

@section('title')
Edit Category ({{ $category->name }})
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Category</h1>
  </div>
  <div class="section-body">
  <div class="card">
            <div class="card-header">
                <h4>Update Category</h4>
            </div>
            <div class="card-body">
            <form class="form-horizontal form-label-left" method="post" action="{{ route('category.update', ['id' => $category->id]) }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
  </div>
</section>
@endsection
