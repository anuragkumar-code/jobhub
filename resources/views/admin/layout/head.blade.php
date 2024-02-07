<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - JobHub</title>

    <!-- Styles -->
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/buttons.bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><span>JobHub</span></a></div>
                    <ul>                       
                        {{-- <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  Charts  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="#">Flot</a></li>
                                <li><a href="#">Morris</a></li>
                                <li><a href="#">Chartjs</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{route('admin_agencies')}}"><i class="ti-calendar"></i> Agencies ({{$get_agencies_count}})</a></li>
                        <li><a href="{{route('admin_clients')}}"><i class="ti-calendar"></i> Clients ({{$get_clients_count}})</a></li>
                        <li><a href="{{route('hired_resources')}}"><i class="ti-calendar"></i> Hired Resources</a></li>                      
                        <li><a href="{{route('admin_interview')}}"><i class="ti-calendar"></i> Scheduled Interview</a></li>                      
                        <li><a href="{{route('admin_billing')}}"><i class="ti-calendar"></i> Billings</a></li>                      
                        
                        {{-- <li>< a href="{{route('admin_logout')}}"><i class="ti-close"></i> Logout</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">                        
                        <div class="dropdown">
                            <button type="button" class=" dib-btn dropdown-toggle" data-toggle="dropdown">
                                {{Auth::user()->first_name}}
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{url('/admin/logout')}}">
                                <i class="ti-power-off"></i>
                                <span>Logout</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('admin')



       <!-- jquery vendor -->
       <script src="{{asset('admin/js/jquery.min.js')}}"></script>
       <script src="{{asset('admin/js/jquery.nanoscroller.min.js')}}"></script>
       <!-- nano scroller -->
       <script src="{{asset('admin/js/sidebar.js')}}"></script>
       <script src="{{asset('admin/js/pace.min.js')}}"></script>
       <!-- sidebar -->
       
       <!-- bootstrap -->
   
       <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
       <script src="{{asset('admin/js/scripts.js')}}"></script>
       <!-- scripit init-->
       <script src="{{asset('admin/js/datatables.min.js')}}"></script>
       <script src="{{asset('admin/js/buttons.html5.min.js')}}"></script>
       <script src="{{asset('admin/js/datatables-init.js')}}"></script>
   
   </body>
   
   </html>