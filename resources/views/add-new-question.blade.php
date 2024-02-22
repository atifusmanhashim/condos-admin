@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Add New Question
        </div>
    </div>
    <hr />
    <div class="form-outer-div">

        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Question
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Question" />
                </div>
            </div>

        </div>

        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Answer
                </div>
                <div class="input-div">
                    <textarea rows="4" placeholder="Answer..."></textarea>
                </div>
            </div>

        </div>
        <div class="d-flex align-items-center gap-4 mt-4">
            <div class="label mb-0">
                Status
            </div>
            <div class="form-check form-switch">

                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-end flex-wrap">

            <div class="d-flex justify-content-end gap-4">
                <a href="{{url('/faq')}}"> <button class="back-btn-hollow">Back </button> </a>
                <button class="save-info-btn">Save </button>
            </div>
        </div>
    </div>
</div>

@endsection