{{-- <!DOCTYPE html>
<html lang="en" >

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('DashAssets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DashAssets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('DashAssets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('DashAssets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('DashAssets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('DashAssets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('DashAssets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('DashAssets/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    شرح

    @livewireStyles()
</head>

<body>

    {{ $slot }}
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('DashAssets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('DashAssets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('DashAssets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('DashAssets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('DashAssets/js/misc.js') }}"></script>
    <script src="{{ asset('DashAssets/js/settings.js') }}"></script>
    <script src="{{ asset('DashAssets/js/todolist.js') }}"></script>
    <script src="{{ asset('DashAssets/js/jquery.cookie.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('DashAssets/js/dashboard.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('hideModal', function(modalId) {
                // Ensure Bootstrap 4 Modal API is used
                $('#' + modalId).modal('hide');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('alert', event => {
                swal({
                    title: event.detail.type === 'success' ? 'Good job!' : 'Oops!',
                    text: event.detail.message,
                    icon: event.detail.type,
                    button: 'OK',
                });
            });
        });
    </script>

    <!-- End custom js for this page -->
    @livewireScripts()
</body>

</html> --}}
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ asset('dashboard/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/dist/fonts/fonts-fa.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/rtl.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
    @livewireStyles()
</head>

<body class="skin-blue sidebar-mini">
    {{ $slot }}



   <!-- jQuery 2.1.4 -->
   <script src="{{ asset('dashboard/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
       $.widget.bridge('uibutton', $.ui.button);
   </script>
   <!-- Bootstrap 3.3.4 -->
   <script src="{{ asset('dashboard/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- Morris.js charts -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="{{ asset('dashboard/plugins/morris/morris.min.js') }}"></script>
   <!-- Sparkline -->
   <script src="{{ asset('dashboard/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
   <!-- jvectormap -->
   <script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
   <script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
   <!-- jQuery Knob Chart -->
   <script src="{{ asset('dashboard/plugins/knob/jquery.knob.js') }}"></script>
   <!-- daterangepicker -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
   <script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
   <!-- datepicker -->
   <script src="{{ asset('dashboard/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
   <!-- Bootstrap WYSIHTML5 -->
   <script src="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
   <!-- Slimscroll -->
   <script src="{{ asset('dashboard/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
   <!-- FastClick -->
   <script src="{{ asset('dashboard/plugins/fastclick/fastclick.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('dashboard/dist/js/app.min.js') }}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <script>
       document.addEventListener('livewire:load', function() {
           Livewire.on('hideModal', function(modalId) {
               // Ensure Bootstrap 4 Modal API is used
               $('#' + modalId).modal('hide');
           });
       });

       document.addEventListener('DOMContentLoaded', function() {
           window.addEventListener('alert', event => {
               swal({
                   title: event.detail.type === 'success' ? 'Good job!' : 'Oops!',
                   text: event.detail.message,
                   icon: event.detail.type,
                   button: 'OK',
               });
           });
       });
   </script>
   @livewireScripts()
</body>

</html>
