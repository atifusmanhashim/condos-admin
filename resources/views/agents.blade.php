@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Our Agents
        </div>
        <div class="search-div">
            <input type="search" placeholder="Search..." />
        </div>
        <div class="btn-div">
            <a href="{{url('/add-new-agent')}}"> <button> <strong>+</strong> &nbsp Add New Agent </button> </a>
        </div>
    </div>

    <hr />

    <div class="table-responsive">
        <table class="table mo-table">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Job<span style="color:transparent;">.</span>Title</th>
                    <th scope="col">Email </th>
                    <th scope="col">Contact </th>
                    <th scope="col">Area </th>
                    <th scope="col">Action </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="profile-img-div"> </div>
                    </td>
                    <td>Mujtaba Mirza</td>
                    <td>27</td>
                    <td>Male</td>
                    <td>Real Estate Agent</td>
                    <td>mirza.mirza@condosandhome.com</td>
                    <td> 416-555-0106 </td>
                    <td> Etobicoke </td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="profile-img-div"> </div>
                    </td>
                    <td>Mujtaba Mirza</td>
                    <td>27</td>
                    <td>Male</td>
                    <td>Real Estate Agent</td>
                    <td>mirza.mirza@condosandhome.com</td>
                    <td> 416-555-0106 </td>
                    <td> Etobicoke </td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="profile-img-div"> </div>
                    </td>
                    <td>Mujtaba Mirza</td>
                    <td>27</td>
                    <td>Male</td>
                    <td>Real Estate Agent</td>
                    <td>mirza.mirza@condosandhome.com</td>
                    <td> 416-555-0106 </td>
                    <td> Etobicoke </td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="profile-img-div"> </div>
                    </td>
                    <td>Mujtaba Mirza</td>
                    <td>27</td>
                    <td>Male</td>
                    <td>Real Estate Agent</td>
                    <td>mirza.mirza@condosandhome.com</td>
                    <td> 416-555-0106 </td>
                    <td> Etobicoke </td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="profile-img-div"> </div>
                    </td>
                    <td>Mujtaba Mirza</td>
                    <td>27</td>
                    <td>Male</td>
                    <td>Real Estate Agent</td>
                    <td>mirza.mirza@condosandhome.com</td>
                    <td> 416-555-0106 </td>
                    <td> Etobicoke </td>
                    <td>
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection