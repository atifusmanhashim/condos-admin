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
        <div class="sub-heading">
            Basic Information
        </div>

        <div class="video-audio-parallel-div">
            <div>
                <div class="label">
                    Add Logo
                </div>
                <div class="audio-video-div mb-4">
                    <div class="add-logo-div">

                        <img src="{{ url('images/ion_image-outline.png')}}" />

                    </div>

                </div>
                <input type="file" />
            </div>
            <div class="video-div">
                <div class="label">
                    Add Video
                </div>
                <div class="audio-video-div mb-4">

                    <div class="add-video-div">
                        <img src="{{ url('images/video-play.png')}}" />
                    </div>
                </div>
                <input type="file" />
            </div>
        </div>

        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Project Name
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Project Name" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Estimated Starting Price
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Estimated Starting Price" />
                </div>
            </div>
        </div>
        <div class="single-input-div">
            <div class="label">
                Short Description
            </div>
            <textarea rows="4" placeholder="Project Description..."></textarea>
        </div>


        <div class="sub-heading">
            About Project
        </div>
        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Address
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Address" />
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
            <div class="input-outer-div">
                <div class="label">
                    City
                </div>
                <div class="input-div">
                    <input type="text" placeholder="City" />
                </div>
            </div>
        </div>

        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Status
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Status" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Occupancy Year
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Occupancy Year" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Number of Building
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Number of Building" />
                </div>
            </div>
        </div>


        <div class="input-parallel-div">
            <div class="input-outer-div">
                <div class="label">
                    Number of Storey
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Number of Storey" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Number of Units
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Number of Units" />
                </div>
            </div>
            <div class="input-outer-div">
                <div class="label">
                    Developer/Builder Name
                </div>
                <div class="input-div">
                    <input type="text" placeholder="Developer/Builder Name" />
                </div>
            </div>
        </div>

        <div class="sub-heading mt-4">
            General Amenities and Facilities
        </div>

        <div class="amenities-outer-div">
            <div class="checkbox-div">
                <input type="checkbox" />
                <div class="label mb-0">
                    Outdoor BBQ/Dining
                </div>
            </div>

            <div class="checkbox-div">
                <input type="checkbox" />
                <div class="label mb-0">
                    Lounge
                </div>
            </div>


            <div class="checkbox-div">
                <input type="checkbox" />
                <div class="label mb-0">
                    Off Dog Leash Area
                </div>
            </div>
            <div class="checkbox-div">
                <input type="checkbox" />
                <div class="label mb-0">
                    Cleveland Clinic Services
                </div>
            </div>
            <div class="checkbox-div">
                <input type="checkbox" />
                <div class="label mb-0">
                    Air Conditioning
                </div>
            </div>
            <div class="checkbox-div">
                <input type="checkbox" />
                <div class="label mb-0">
                    Swimming Pool
                </div>
            </div>
        </div>
        <div class="amenity-btn-div">
            <button>+ &nbsp Add More </button>
        </div>


        <div class="sub-heading mt-4">
            Project Gallery
        </div>

        <div class="only-image-div">
            <div class="label">
                Add Images
            </div>
            <div class="audio-video-div mb-4">
                <div class="add-logo-div">
                    <img src="{{ url('images/ion_image-outline.png')}}" />
                </div>
            </div>
            <input type="file" />
        </div>
    </div>
</div>


@endsection