@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')
<style>
    .condo-card {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        width: 100%;
        max-width: 450px;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
    }
</style>
<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Projects
        </div>
        <div class="search-div">
            <input type="search" placeholder="Search..." />
        </div>
        <div class="btn-div">
            <a href="{{url('/add-new-project')}}"> <button> <strong>+</strong> &nbsp Add New Project </button> </a>
        </div>
    </div>

    <hr />

    <div class="projects-outer-div-card">
        @foreach($projects_lst_recs->chunk(3) as $projects)
            
            @foreach( $projects as $project )
            <div class="condo-project-card">
                <div class="condo-card">
                    <img src="{{ $project->project_image }}"/>
                </div>
                <div class="content-div">
                    <div class="main-heading">
                        {{ $project->information['title']}}
                    </div>
                    <div class="location">
                        {{ $project->project_information['street_address'] . ', ' .$project->project_information['province'] }}
                    </div>
                    <div class="price">
                        Category: {{ $project->information['category'] }}
                    </div>
                    <div class="price">
                        Construction Status: {{ $project->information['construction_status'] }}
                    </div>
                    <div class="price">
                        Starting at:$490,000s
                    </div>
                    <div class="price">
                        Estimated Completion:{{ $project->information['completion_date'] }}
                    </div>
                </div>
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
            @endforeach
            @endforeach
            {!! $projects_lst_recs->links() !!}
            {{-- 
            <div class="condo-project-card">
                <div>
                    <img src="{{ url('images/condo-card-img.png')}}" />
                </div>
                <div class="content-div">
                    <div class="main-heading">
                        Kipling Station Condos
                    </div>
                    <div class="location">
                        ETOBICAKE,ONTARIO
                    </div>
                    <div class="price">
                        Starting at:$490,000s
                    </div>
                    <div class="price">
                        Estimated Completion:2026
                    </div>
                </div>
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


            <div class="condo-project-card">
                <div>
                    <img src="{{ url('images/condo-card-img.png')}}" />
                </div>
                <div class="content-div">
                    <div class="main-heading">
                        Kipling Station Condos
                    </div>
                    <div class="location">
                        ETOBICAKE,ONTARIO
                    </div>
                    <div class="price">
                        Starting at:$490,000s
                    </div>
                    <div class="price">
                        Estimated Completion:2026
                    </div>
                </div>
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


            <div class="condo-project-card">
                <div>
                    <img src="{{ url('images/condo-card-img.png')}}" />
                </div>
                <div class="content-div">
                    <div class="main-heading">
                        Kipling Station Condos
                    </div>
                    <div class="location">
                        ETOBICAKE,ONTARIO
                    </div>
                    <div class="price">
                        Starting at:$490,000s
                    </div>
                    <div class="price">
                        Estimated Completion:2026
                    </div>
                </div>
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


            <div class="condo-project-card">
                <div>
                    <img src="{{ url('images/condo-card-img.png')}}" />
                </div>
                <div class="content-div">
                    <div class="main-heading">
                        Kipling Station Condos
                    </div>
                    <div class="location">
                        ETOBICAKE,ONTARIO
                    </div>
                    <div class="price">
                        Starting at:$490,000s
                    </div>
                    <div class="price">
                        Estimated Completion:2026
                    </div>
                </div>
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
            <div class="condo-project-card">
                <div>
                    <img src="{{ url('images/condo-card-img.png')}}" />
                </div>
                <div class="content-div">
                    <div class="main-heading">
                        Kipling Station Condos
                    </div>
                    <div class="location">
                        ETOBICAKE,ONTARIO
                    </div>
                    <div class="price">
                        Starting at:$490,000s
                    </div>
                    <div class="price">
                        Estimated Completion:2026
                    </div>
                </div>
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
            </div> --}}


    </div>

      
      
</div>


@endsection