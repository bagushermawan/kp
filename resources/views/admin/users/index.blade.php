@extends('layouts.admin-master')

@section('title')
Manage Users
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Users</h1>
    <div class="section-header-breadcrumb">
        <form action="#" method="get">
          <div class="input-group">
              <!-- <input type="search" class="form-control" placeholder="Search" name="q"> -->
              <input class="form-control" value="{{ Request::get('query') }}" name="query" type="search" placeholder="Search" aria-label="Search" data-width="250">

              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
          </div>
          </form>
      </div>
  </div>
  <div class="section-body">
      <users-component></users-component>
  </div>
</section>
@endsection
