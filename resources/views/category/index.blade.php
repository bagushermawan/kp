

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
  <ul>
 @foreach($daftar_kategori as $category)
 <li>{{ $category->name }}</li>
 <br/>
 @endforeach
 </ul>
 <hr>
 <!-- INI MERUPAKAN KODE UNTUK MENAMPILKAN PAGINATION -->
 {{$daftar_kategori->links()}}
  </div>
</section>
@endsection

