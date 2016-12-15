<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Administration {{ config('app.name', 'Laravel') }}</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link href="/css/plugins/morris.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    @yield('css')
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/admin') }}">Navigo Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="#"><i class="fa fa-user"></i> {{ Auth::user()->firstname.' '.Auth::user()->lastname}}</a></li>
                <li><a href="{{ url('/') }}">Back website</a></li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{ url('/admin') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#cards_dropdown"><i class="fa fa-id-card-o"></i> Cards <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cards_dropdown" class="collapse">
                            <li>
                                <a href="{{ url('/admin/cards') }}">Liste</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/cards/verify') }}">Verifier avec un numero</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/admin/users') }}">
                            <i class="fa fa-user-o"></i> Utilisateurs
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            @yield('body')
        </div>
        <!-- /#page-wrapper -->

        {{-- <div style="position:fixed; padding:10px 15px; bottom:0; width:100%;background-color:deepskyblue;z-index:1000;margin:20px 0 0 0;">
            This page took {{ (microtime(true) - LARAVEL_START) }} seconds to render
        </div> --}}
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/morris/raphael.min.js"></script>
    <script src="/js/plugins/morris/morris.min.js"></script>
    <script src="/js/plugins/morris/morris-data.js"></script>
    @yield('js')
</body>
</html>
