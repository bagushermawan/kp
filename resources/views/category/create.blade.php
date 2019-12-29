@extends('layouts.admin-master')

@section('title')
Create Category
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add Category</h1>
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
                <h4>Add a New Category</h4>
            </div>
            <div class="card-body">
            <form class="form-horizontal form-label-left" method="post" action="{{ route('category.store') }}">
                    {{ csrf_field() }}
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" placeholder="Laptop, Aksesoris, .." name="name">
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
