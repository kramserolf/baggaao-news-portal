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
    {{-- hide show navbar --}}
   $(document).scroll(function() {
     var y = $(this).scrollTop();
     if (y > 220) {
       $('.navbar').fadeOut();
     } else {
       $('.navbar').fadeIn();
     }
   });
   // hide home icon
   $(document).scroll(function() {
     var y = $(this).scrollTop();
     if (y > 200) {
       $('#go-home').show();
       $('#go-up').show();
     } else {
       $('#go-home').hide();
       $('#go-up').hide();
     }
   });
   // scroll to home
   function scrollToHome(aid){
       var aTag = $("#home");
       $('html,body').animate({scrollTop: aTag.offset().top},'slow');
   }
   $("#go-up").click(function() {
      scrollToHome('#home');
   });
   const observer = lozad(); // lazy loads elements with default selector as '.lozad'
   observer.observe();
   </script>
</body>
</html>