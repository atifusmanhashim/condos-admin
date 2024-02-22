@extends('layouts.master')
@section('title')
Dashboard
@endsection

@section('content')



<!-- <div class="container"> -->
<div>
    <div class="dashboard-page">
        <div class="project-page-header">
            <div class="dashboard-main-heading">
                Builders
            </div>
            <div class="search-div">
                <input type="search" placeholder="Search..." />
            </div>
            <div class="btn-div">
                <a href="{{url('/add-new-builder')}}"> <button> <strong>+</strong> &nbsp Add Builder </button> </a>
            </div>
        </div>
        <hr />
        <div class="dashboard-cards-outer-div">
            <div class="builder-dashboard-card">
                <img src="{{ url('images/builder-card-1.png')}}" />
                <div class="dropdown edit-icon">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{url('images/three-dots.svg')}}" />

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div> <img class="card-icon" src="{{url('images/edit-icon.svg')}}" /> </div>
                                    <div>Edit </div>
                                </div>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div><img class="card-icon" src="{{url('images/delete-icon.svg')}}" /> </div>
                                    <div> Delete </div>
                                </div>
                            </a>

                        </li>

                    </ul>
                    </li>
                </div>
            </div>

            <div class="builder-dashboard-card">
                <img src="{{ url('images/builder-card-2.png')}}" />
                <div class="dropdown edit-icon">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{url('images/three-dots.svg')}}" />

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div> <img class="card-icon" src="{{url('images/edit-icon.svg')}}" /> </div>
                                    <div>Edit </div>
                                </div>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div><img class="card-icon" src="{{url('images/delete-icon.svg')}}" /> </div>
                                    <div> Delete </div>
                                </div>
                            </a>

                        </li>

                    </ul>
                    </li>
                </div>
            </div>

            <div class="builder-dashboard-card">
                <img src="{{ url('images/builder-card-3.png')}}" />
                <div class="dropdown edit-icon">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{url('images/three-dots.svg')}}" />

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div> <img class="card-icon" src="{{url('images/edit-icon.svg')}}" /> </div>
                                    <div>Edit </div>
                                </div>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div><img class="card-icon" src="{{url('images/delete-icon.svg')}}" /> </div>
                                    <div> Delete </div>
                                </div>
                            </a>

                        </li>

                    </ul>
                    </li>
                </div>
            </div>

            <div class="builder-dashboard-card">
                <img src="{{ url('images/builder-card-4.png')}}" />
                <div class="dropdown edit-icon">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{url('images/three-dots.svg')}}" />

                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div> <img class="card-icon" src="{{url('images/edit-icon.svg')}}" /> </div>
                                    <div>Edit </div>
                                </div>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <div class="inner-div">
                                    <div><img class="card-icon" src="{{url('images/delete-icon.svg')}}" /> </div>
                                    <div> Delete </div>
                                </div>
                            </a>

                        </li>

                    </ul>
                    </li>
                </div>
            </div>
        </div>

    </div>



</div>

@endsection






</div>