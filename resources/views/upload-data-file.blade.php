@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Add New Project
        </div>
    </div>
    <hr />
    <div class="form-outer-div">
        <div class="sub-heading mt-4">
            Import CSV File
        </div>

        <div class="only-image-div">
            <div class="audio-video-div mb-4">
                <div class="add-logo-div">

                    <img src="{{ url('images/lucide_upload.svg')}}" />

                </div>

            </div>
            <input type="file" />
        </div>

        <div class="d-flex align-items-center justify-content-end">

            <div class="d-flex justify-content-end gap-4">
                <button class="back-btn-hollow">Back </button>
                <button class="save-info-btn">Import File </button>
            </div>
        </div>
    </div>
</div>


@endsection