@extends('layouts.admin-master')

@section('title')
Product
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Product</h1>
  </div>
  <div class="section-body">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Users</h4>
                <div class="card-header-action">
                    <a  class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Reg. Date</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <a class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center p-3 text-muted">
                        <h5>No Results</h5>
                        <p>Looks like you have not added any users yet!</p>
                    </div>
                </div>
                <div class="text-center p-4 text-muted">
                    <h5>Loading</h5>
                    <p>Please wait, data is being loaded...</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary"><span>Loading <i class="fas fa-spinner fa-spin"></i></span><span>Load More</span></button>
        </div>
    </div>
</div>
</section>
@endsection