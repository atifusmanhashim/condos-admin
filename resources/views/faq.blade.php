@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Frequently Asked Questions
        </div>
        <div class="btn-div">
            <a href="{{url('/add-new-question')}}"> <button> <strong>+</strong> &nbsp Add New Question </button> </a>
        </div>
    </div>

    <hr />

    <div>
        <div class="accordion" id="accordionExample">
            @foreach ($faq_recs as $faq)
                <div class="accordion-outer-div">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{ $faq->question }}
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $faq->answer }}                            </div>
                        </div>
                    </div>

                    <div class="action-icons-div">
                        <div class="edit-icon-div">
                            <button>
                                <img src="{{ url('images/ep_edit.svg')}}" />
                            </button>
                        </div>
                        <div class="delete-icon-div">
                            <button>
                                <img src="{{ url('images/delete-icon.svg')}}" />
                            </button>
                        </div>
                    </div>
                </div>
                
            @endforeach
            {{-- <div class="accordion-outer-div">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I Invest in a Pre-Construction Condo in GTA?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            To invest in a pre-construction condo in the GTA, research the market, choose a reputable
                            developer, secure early access, review the agreement, arrange financing, and stay updated on
                            roject's progress. Be aware of potential risks and seek professional advice for a
                            sthe
                            puccessful
                            investment.
                        </div>
                    </div>
                </div>
                <div class="action-icons-div">
                    <div class="edit-icon-div">
                        <button>
                            <img src="{{ url('images/ep_edit.svg')}}" />
                        </button>
                    </div>
                    <div class="delete-icon-div">
                        <button>
                            <img src="{{ url('images/delete-icon.svg')}}" />
                        </button>
                    </div>
                </div>
            </div>




            <div class="accordion-outer-div">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How Do I Get Best Value, Incentives and Suite Allocation?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi facilis velit facere enim,
                            qui
                            ab itaque praesentium. Reiciendis vitae cumque sint deserunt ipsa? Repellendus assumenda,
                            exercitationem natus ut ducimus quaerat!
                        </div>
                    </div>
                </div>

                <div class="action-icons-div">
                    <div class="edit-icon-div">
                        <button>
                            <img src="{{ url('images/ep_edit.svg')}}" />
                        </button>
                    </div>
                    <div class="delete-icon-div">
                        <button>
                            <img src="{{ url('images/delete-icon.svg')}}" />
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>


@endsection