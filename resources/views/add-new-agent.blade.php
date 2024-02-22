@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Add New Agent
        </div>
    </div>
    <hr />
    <div class="form-outer-div">
        <div class="sub-heading">
            Basic Information
        </div>

        <div class="video-audio-parallel-div">
            <div>
                <div class="label">
                    Profile Picture
                </div>
                <div class="audio-video-div mb-4">
                    <div class="add-logo-div">

                        <img src="{{ url('images/ion_image-outline.png')}}" />
                    </div>
                </div>
                <input type="file" />
            </div>
        </div>


        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Full Name
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Full Name" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Date of Birth
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Date of Birth" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Age
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Age" />
                </div>
            </div>
        </div>

        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Gender
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Gender" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    City
                </div>
                <div class="input-div">
                    <input type="text" placeholder="City" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Area
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Area" />
                </div>
            </div>
        </div>

        <div class="sub-heading mt-4">
            Contact Information
        </div>
        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Contact Number
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Contact Number" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Email
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Email" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Address
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Address" />
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-4">
            <a href="{{url('/agents')}}"> <button class="back-btn-hollow">Back </button> </a>
            <button class="save-info-btn">Save Information </button>
        </div>
    </div>
</div>

@endsection