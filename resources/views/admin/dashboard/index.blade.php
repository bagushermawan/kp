@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="section-body">
  <button onclick="klik()">Klik aku mas!</button>
  </div>
  <script type="text/javascript">
function klik(){
swal(
  'Good job!',
  'You clicked the button!',
  'info'
)
	}
</script>
</section>
@endsection
