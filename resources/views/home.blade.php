@extends('layouts.app')

@section('content')
<section>
<div class="d-flex" id="wrapper">
	<div class="border-right" id="sidebar-wrapper">
		@include('admin/sidebar')
	</div>
	<div id="page-content-wrapper">
		<div class="container">
			@include('layouts.login_navbar')
			<div class="d-flex text-black">
			  <div class="w-100">
			    <h5>List of Administrator</h5>
			  </div>
			</div>
			<div class="table-responsive-sm">
				@include('admin/admins')
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#admins').DataTable()
    })
</script>
@endsection
