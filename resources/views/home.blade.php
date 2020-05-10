@extends('layouts.app')

@section('content')
<section>
<div class="d-flex" id="wrapper">
	<div class="border-right" id="sidebar-wrapper">
		@include('admin/sidebar')
	</div>
	<div id="page-content-wrapper">
		<div class="container">
			<div id="app">
			    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			        <div class="container">
			            <a class="navbar-brand" href="{{ route('page.home') }}">
			             Baggao News Portal
			            </a>
			            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			                <span class="navbar-toggler-icon"></span>
			            </button>

			            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			                <!-- Left Side Of Navbar -->
			                <ul class="navbar-nav mr-auto">

			                </ul>

			                <!-- Right Side Of Navbar -->
			                <ul class="navbar-nav ml-auto">
			                    <!-- Authentication Links -->
			                    @guest
			                        <li class="nav-item">
			                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			                        </li>
			                        @if (Route::has('register'))
			                            <li class="nav-item">
			                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			                            </li>
			                        @endif
			                    @else
			                        <li class="nav-item dropdown">
			                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
			                                {{ Auth::user()->name }} <span class="caret"></span>
			                            </a>

			                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
			                                <a class="dropdown-item" href="{{ route('logout') }}"
			                                   onclick="event.preventDefault();
			                                                 document.getElementById('logout-form').submit();">
			                                    {{ __('Logout') }}
			                                </a>

			                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                    @csrf
			                                </form>
			                            </div>
			                        </li>
			                    @endguest
			                </ul>
			            </div>
			        </div>
			    </nav>
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
