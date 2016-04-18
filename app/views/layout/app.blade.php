<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JSMAutos - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/packages/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/packages/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/packages/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/packages/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap DateTimePicker -->
    <link href="/packages/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>

    {{HTML::style('/packages/sweetalert/dist/sweetalert.css')}}
    {{HTML::style('/packages/animate.css/animate.min.css')}}


            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->


    <!-- jQuery -->
    <script src="/packages/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/packages/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/packages/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Moment Plugin JavaScript -->
    <script src="/packages/moment/min/moment-with-locales.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/packages/raphael/raphael-min.js"></script>
    <script src="/packages/morrisjs/morris.min.js"></script>

    <!-- Sweetalert JavaScript -->
    <script src="/packages/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
    <script src="/js/validarut.js"></script>
</head>

<body>
@yield('content')
</body>

</html>