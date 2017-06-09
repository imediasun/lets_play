<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>

    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="/main/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/main/css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<body class="fix-header card-no-border">


<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<div id="main-wrapper">
    @include('admin_page.layout.header')
    @include('admin_page.layout.navigation')

    <div class="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>


<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/assets/plugins/bootstrap/js/tether.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/main/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/main/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/main/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="/main/js/custom.min.js"></script>


<script src="/assets/plugins/switchery/dist/switchery.min.js"></script>
<script src="/assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="/assets/plugins/multiselect/js/jquery.multi-select.js"></script>


<script>
    (function ($) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Switchery
        //
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });

        // Destroy method for delete item from table list
        //
        $('.destroy').on('click', function (e) {
            //if (!confirm('Are you sure you want to delete?')) return false;
            e.preventDefault();
            $.post({
                type: 'DELETE', // Destroy Method
                url: $(this).attr("href")
            }).done(function (data) {
                console.log(data);
                location.reload(true);
            });
        });

    })(jQuery);
</script>

@yield('scripts')

</body>
</html>