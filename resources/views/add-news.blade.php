@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Add News
        </div>
    </div>
    <hr />
    <div class="form-outer-div">
        <div class="sub-heading">
            Basic Information
        </div>
        <div class="input-parallel-div mb-4">
            <div class="input-outer-div">
                <div class="label">
                    News Title
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Enter Blog Title" />
                </div>
            </div>

        </div>
        <div class="video-audio-parallel-div">
            <div>
                <div class="label">
                    Header Image
                </div>
                <div class="audio-video-div mb-4">
                    <div class="add-logo-div">

                        <img src="{{ url('images/ion_image-outline.png')}}" />

                    </div>

                </div>
                <input type="file" />
            </div>

        </div>


        <div class="single-input-div">
            <div class="label">
                Description
            </div>
            <textarea rows="7" placeholder="Description..."></textarea>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-wrap">

            <div class="d-flex justify-content-end gap-4">
                <a href="{{url('/news')}}"> <button class="back-btn-hollow">Back </button> </a>
                <button class="save-info-btn">Save Information</button>
            </div>
        </div>
    </div>
</div>


@endsection