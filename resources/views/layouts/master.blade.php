<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    @include('includes.script')
</head>
<body>
    @include('includes.header')
        @yield('content')
    @include('includes.footer')
    <script type="text/javascript" src="{{asset('js/style.js')}}"></script>
</body>
</html>