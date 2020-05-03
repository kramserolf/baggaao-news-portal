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
   <script type="text/javascript">
   $(document).scroll(function() {
     var y = $(this).scrollTop();
     if (y > 300) {
       $('.navbar').fadeOut();
     } else {
       $('.navbar').fadeIn();
     }
   });
   $(document).scroll(function() {
     var y = $(this).scrollTop();
     if (y > 200) {
       $('#go-up').show();
     } else {
       $('#go-up').hide();
     }
   });
   function scrollToUp(aid){
       var aTag = $("#home");
       $('html,body').animate({scrollTop: aTag.offset().top},'slow');
   }
   $("#go-up").click(function() {
      scrollToUp('#home');
   });
   </script>
</body>
</html>