<!DOCTYPE html>
<html lang="en">

<head>
    <title> Welcome {{ request()->session()->get('user_name') }} | Condos & Home Admin Panel - @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{URL::asset('css/layout.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
    $(document).ready(function() {


        $(document).ready(function() {
            $('#sidebar-collapse').click(function() {
                $('.sidebar').toggleClass('sidebar-is-collapsed');
                $('.sidebar-link-text').toggleClass('sidebar-link-text-none');
                $('.sidebar-links-outer-div').toggleClass('sidebar-links-outer-div-collapsed');
                $('.collapsed-logo').toggleClass('show-collapsed-logo');
                $('.without-collapsed').toggleClass('collapsed-web');
            });
        });
        // $(document).ready(function() {
        //     $('#sidebar-collapse').click(function() {
        //         $('.sidebar-link-text').toggleClass('sidebar-link-text-none');
        //     });
        // });

        // $(document).ready(function() {
        //     $('#sidebar-collapse').click(function() {
        //         $('.sidebar-links-outer-div').toggleClass('sidebar-links-outer-div-collapsed');
        //     });
        // });

        // $(document).ready(function() {
        //     $('#sidebar-collapse').click(function() {
        //         $('.collapsed-logo').toggleClass('show-collapsed-logo');
        //     });
        // });

        // $(document).ready(function() {
        //     $('#sidebar-collapse').click(function() {
        //         $('.without-collapsed').toggleClass('collapsed-web');
        //     });
        // });



    });
    </script>
</head>

<body>
    <div class="layout-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="w-100">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">
                        <img src="{{url::asset('images/Mo Mirza Logo_2.svg')}}" />
                    </a>
                    <ul class="navbar-nav me-auto mb-lg-0 mt-4">
                        <li class="nav-item">
                            <a href="{{url('/dashboard')}}">
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/dashboard-icon.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            Dashboard
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{url('/projects')}}">
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/fluent_building-20-regular.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            Property
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/agents')}}">
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/clarity_shield-line.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            Agents
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/builders')}}">
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/clarity_shield-line.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            Builders
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/news')}}">
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/clarity_shield-line.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            News
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="{{url('/#')}}">
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/ph_user-circle-light.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            Customers
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </li> -->

                        <li class="nav-item">
                            <a href="{{url('/faq')}}">
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/FAQs.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            FAQs
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a>
                                <div class="sidebar-links-outer-div">
                                    <div class="sidebar-link">
                                        <div>
                                            <img src="{{url::asset('images/carbon_settings.svg')}}" />
                                        </div>
                                        <div class="sidebar-link-text">
                                            Settings
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
        </nav>
        <div class="sidebar">
            <button id="sidebar-collapse">
                <img src="{{url::asset('images/HamBurger.svg')}}" />
            </button>
            <a href="{{url('/dashboard')}}">
                <div class="logo-div without-collapsed">
                    <img src="{{url::asset('images/Mo Mirza Logo_2.svg')}}" />

                </div>
                <div class="logo-div collapsed-logo">
                    <img src="../../images/condo-logo-collapsed.svg" />
                </div>
            </a>

            <a href="{{url('/dashboard')}}">
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/radix-icons_dashboard.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            Dashboard
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('/projects')}}">
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/fluent_building-20-regular.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            Property
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{url('/builders')}}">
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/clarity_shield-line.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            Builders
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{url('/agents')}}">
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/clarity_shield-line.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            Agents
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('/news')}}">
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/clarity_shield-line.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            News
                        </div>
                    </div>
                </div>
            </a>

            <!-- <a href="{{url('/#')}}">
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/ph_user-circle-light.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            Customers
                        </div>
                    </div>
                </div>
            </a> -->

            <a href="{{url('/faq')}}">
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/FAQs.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            FAQs
                        </div>
                    </div>
                </div>
            </a>

            <a>
                <div class="sidebar-links-outer-div">
                    <div class="sidebar-link">
                        <div>
                            <img src="{{url::asset('images/carbon_settings.svg')}}" />
                        </div>
                        <div class="sidebar-link-text">
                            Settings
                        </div>
                    </div>
                </div>
            </a>


        </div>
        <div class="right-div">
            <div class="header-div">
                <div class="header-inner-div">

                    <div class="dropdown">
                        <a class="dropdown-toggle dropdown-name" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            <div class="welcome-name"> Hi, {{ request()->session()->get('user_name') }} </div>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{url::asset('images/material-symbols_arrow-forward-ios-rounded.svg')}}" />

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('/user-profile')}}">My Profile</a></li>
                            <li><a class="dropdown-item" href="{{ url('/logout')}}">Log out</a></li>

                        </ul>
                        </li>
                    </div>
                </div>
            </div>
            <div class="content-div">
                @yield('content')
            </div>
        </div>
    </div>

    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>




</body>


</html>