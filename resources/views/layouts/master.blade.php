<!DOCTYPE html>
<html lang="en">

 @include('includes.head')

  <body>
    
    <!-- ***** Preloader Start ***** -->
    @include('includes.preloader')
    <!-- ***** Preloader End ***** -->

   @include('includes.headers')

   @yield('content')

   @include('includes.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/storage/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/storage/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('/storage/js/jquery.singlePageNav.min.js')}}"></script>
    <script src="{{ asset('/storage/js/custom.js')}}"></script>
    <script src="{{ asset('/storage/js/owl.js')}}"></script>
    <script src="{{ asset('/storage//js/slick.js')}}"></script>
    <script src="{{ asset('/storage//js/accordions.js')}}"></script>
    <script>
      $(function() {
        // Single Page Nav
        $('#navbarResponsive').singlePageNav({
          'offset': 100,
          'filter': ':not(.external)'
        });

        // On mobile, close the menu after nav-link click
        $('#navbarResponsive .navbar-nav .nav-item .nav-link').click(function(){
          $('#navbarResponsive').removeClass('show');
        });
      });
    </script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>