@extends('layouts.master')
@section('title')
Project
@endsection

@section('content')

<div>
    <div class="project-page-header">
        <div class="dashboard-main-heading">
            Projects Data Table
        </div>

        <div class="btn-div">
            <button> <strong>+</strong> &nbsp Import CSV File </button>
        </div>
    </div>

    <hr />

    <div class="table-responsive">
        <table class="table mo-table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Area</th>
                    <th scope="col">City</th>
                    <th scope="col">Sq. ft.</th>
                    <th scope="col">Estimated Price </th>
                    <th scope="col">Occupancy Year </th>
                    <th scope="col">Building Type </th>
                    <th scope="col">Builder/Developer </th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                @foreach($projects_lst as $project)

                <tr>

                    <td>
                        1
                    </td>
                    <td>Kipling Station Condos</td>
                    <td>Etobicoke</td>
                    <td>Toronto</td>
                    <td>343 - 935 Sq. Ft</td>
                    <td>$490,000</td>
                    <td> 2025 </td>
                    <td> Condos </td>
                    <td>
                        Center Courts Developments
                    </td>
                    
                </tr>
                <?php $count++; ?>
                @endforeach
                <tr>
                    <td>
                        1
                    </td>
                    <td>Kipling Station Condos</td>
                    <td>Etobicoke</td>
                    <td>Toronto</td>
                    <td>343 - 935 Sq. Ft</td>
                    <td>$490,000</td>
                    <td> 2025 </td>
                    <td> Condos </td>
                    <td>
                        Center Courts Developments
                    </td>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>Kipling Station Condos</td>
                    <td>Etobicoke</td>
                    <td>Toronto</td>
                    <td>343 - 935 Sq. Ft</td>
                    <td>$490,000</td>
                    <td> 2025 </td>
                    <td> Condos </td>
                    <td>
                        Center Courts Developments
                    </td>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>Kipling Station Condos</td>
                    <td>Etobicoke</td>
                    <td>Toronto</td>
                    <td>343 - 935 Sq. Ft</td>
                    <td>$490,000</td>
                    <td> 2025 </td>
                    <td> Condos </td>
                    <td>
                        Center Courts Developments
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</div>

@endsection