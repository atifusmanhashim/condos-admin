@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Compose Email
        </div>
    </div>
    <hr />
    <div class="form-outer-div">
        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    To
                </div>
                <div class="input-div">
                    <input type="text" />
                </div>
            </div>
        </div>

        <div class="input-parallel-div">

            <div class="input-outer-div">
                <div class="label">
                    Subject
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Subject" />
                </div>
            </div>
        </div>
        <div class="input-parallel-div">

            <div class="input-outer-div">
                <div class="label">
                    Message
                </div>
                <div class="input-div">
                    <textarea rows="6" placeholder="Project Description..."></textarea>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-4">
            <button class="save-info-btn">Send Email</button>
        </div>

    </div>
</div>

@endsection