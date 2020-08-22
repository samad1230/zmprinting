<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ('Admin Panel') }}</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link href="Admin_layout/css/font-face.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Admin_layout/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="Admin_layout/css/theme.css" rel="stylesheet" media="all">
    <link href="{{asset('Admin_layout/css/style_won.css')}}" rel="stylesheet" media="all">
</head>
<body>
    <div id="app">
        <div class="container">
  
            @guest

            @else

               
            @endguest
        </div>

        <main class="">
            @yield('content')
        </main>

    </div>
    
    <script src="Admin_layout/vendor/jquery-3.2.1.min.js"></script>
    <script src="Admin_layout/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="Admin_layout/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="Admin_layout/vendor/slick/slick.min.js"></script>
    <script src="Admin_layout/vendor/wow/wow.min.js"></script>
    <script src="Admin_layout/vendor/animsition/animsition.min.js"></script>
    <script src="Admin_layout/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="Admin_layout/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="Admin_layout/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="Admin_layout/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="Admin_layout/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="Admin_layout/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="Admin_layout/vendor/select2/select2.min.js"></script>
    <script src="Admin_layout/js/main.js"></script>>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

@yield('pagescript');
{{-- <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script> --}}
 <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script> 

      <script>  
         $(document).on("click", "#return", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to Return?",
                  text: "Once Return,You will return your money!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Cancel");
                  }
                });
            });
    </script>

</body>
</html>
