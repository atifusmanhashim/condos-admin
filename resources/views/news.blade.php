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
                News
            </div>
            <div class="search-div">
                <input type="search" placeholder="Search..." />
            </div>
            <div class="btn-div">
                <a href="{{url('/add-news')}}"> <button> <strong>+</strong> &nbsp Add News </button> </a>
            </div>
        </div>
        <hr />
        <div class="dashboard-cards-outer-div news-outer">
            @foreach($news_lst_recs->chunk(3) as $news_lst)
            
            @foreach( $news_lst as $news)
                <div class="news-dashboard-card">
                    <img src="{{ $news->image }}" />
                    <div class="content-div">
                        <div class="heading-div"> {{ $news->title }}
                        </div>
                        <div class="date"> {{ \Carbon\Carbon::createFromTimestamp(strtotime($news->news_date))->format('d-m-Y')}}</div>
                        <div class="desc">
                                {{ $news->summary}}
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
            {{-- <div class="news-dashboard-card">
                <img src="{{ url('images/news-img.png')}}" />
                <div class="content-div">
                    <div class="heading-div">Everything you need to know before investing in Toronto real estate market
                    </div>
                    <div class="date">August 5, 2023 </div>
                    <div class="desc">
                        Toronto is one of the most demanding real estate markets in Ontario. A recent report reveals
                        that the average home sold price in the city is 11% more in July 2022 than the ...
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

            <div class="news-dashboard-card">
                <img src="{{ url('images/news-img.png')}}" />
                <div class="content-div">
                    <div class="heading-div">Everything you need to know before investing in Toronto real estate market
                    </div>
                    <div class="date">August 5, 2023 </div>
                    <div class="desc">
                        Toronto is one of the most demanding real estate markets in Ontario. A recent report reveals
                        that the average home sold price in the city is 11% more in July 2022 than the ...
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



</div>

@endsection






</div>