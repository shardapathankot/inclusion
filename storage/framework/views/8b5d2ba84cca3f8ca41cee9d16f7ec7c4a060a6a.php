<!DOCTYPE html>
<html lang="en">

 <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <body>
    
    <!-- ***** Preloader Start ***** -->
    <?php echo $__env->make('includes.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ***** Preloader End ***** -->

   <?php echo $__env->make('includes.headers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->yieldContent('content'); ?>

   <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo e(asset('/storage/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/storage/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Additional Scripts -->
    <script src="<?php echo e(asset('/storage/js/jquery.singlePageNav.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/storage/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('/storage/js/owl.js')); ?>"></script>
    <script src="<?php echo e(asset('/storage//js/slick.js')); ?>"></script>
    <script src="<?php echo e(asset('/storage//js/accordions.js')); ?>"></script>
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
</html><?php /**PATH C:\wamp64\www\inclusion\resources\views/layouts/master.blade.php ENDPATH**/ ?>