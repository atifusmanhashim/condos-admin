@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            User Profile
        </div>
    </div>
    <hr />
    <div class="form-outer-div">
        <div class="video-audio-parallel-div">
            <div>
                <div class="label">
                    Profile Picture
                </div>
                <div class="audio-video-div">
                    <div class="add-logo-div">

                        <img src="{{ url('images/ion_image-outline.png')}}" />
                        <input type="file" />
                    </div>

                </div>
            </div>
        </div>


        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Full Name
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Full Name" value="{{ $data->name }}" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Email Address
                </div>
                <div class="input-div">
                    <input type="email" placeholder="Email" value="{{ $data->email }}" />
                </div>
            </div>

        </div>

        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Password
                </div>
                <div class="input-div">
                    <input type="password" placeholder="Password" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Admin Role
                </div>
                <div class="input-div">
                    <select id="role_id" name="role_id">
                        @foreach($user_roles as $role)
                        <option value="{{ $role['role_id'] }}">{{ $role['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-4">
            <button class="save-info-btn">Edit User Details </button>
        </div>

        <!-- If Edit User Details is clicked -->
        <!-- 
        <div class="d-flex justify-content-end gap-4">
            <button class="back-btn-hollow">Back </button>
            <button class="save-info-btn">Save Information </button>
        </div> -->
    </div>
</div>

@endsection