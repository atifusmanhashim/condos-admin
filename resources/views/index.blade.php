@extends('layouts.master')
@section('title')
Dashboard
@endsection

@section('content')
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto);


/* #chart {
    max-width: 650px;
    margin: 35px auto;
} */
</style>

<script>
function searchTable() {
    // Declare variables
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("searchBox");
    filter = input.value.toUpperCase();
    table = document.getElementById("table_data");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows (except the header row), and hide those who don't match the search query
    for (i = 1; i < tr.length; i++) { // Start from index 1 to skip the header row (th)
        var foundMatch = false;
        // Loop through all table columns (td elements) for each row (tr element)
        for (j = 0; j < tr[i].getElementsByTagName("td").length; j++) {
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    foundMatch = true;
                    break; // If a match is found in any column, no need to check the rest
                }
            }
        }
        // Show/hide the row based on whether a match was found
        if (foundMatch) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}
$(document).ready(function() {

    var options = {
        chart: {
            type: 'bar'
        },
        series: [{
                name: 'sales',
                data: [30, 40, 45, 50, 49, 60, 70, 21, 15, 40, 30, 11]

            },
            {
                name: 'sales1',
                data: [20, 30, 55, 50, 49, 60, 70, 21, 15, 11, 21, 50]
            }
        ],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        colors: ['#191C40', '#656565']
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();



});
</script>


<!-- <div class="container"> -->
<div>
    <div class="dashboard-page">
        <p class="dashboard-main-heading">
            Dashboard
        </p>

        <div class="dashboard-cards-outer-div">
            <div class="dashboard-card">
                <div class="count">
                    50
                </div>
                <div class="desc">
                    Total number of properties
                </div>
            </div>

            <div class="dashboard-card">
                <div class="count">
                    25
                </div>
                <div class="desc">
                    Properties for Sale
                </div>
            </div>

            <div class="dashboard-card">
                <div class="count">
                    25
                </div>
                <div class="desc">
                    Properties for Rent
                </div>
            </div>

            <div class="dashboard-card">
                <div class="count">
                    500
                </div>
                <div class="desc">
                    Total Customers
                </div>
            </div>
        </div>

    </div>

    <div class="chart-div">
        <p class="chart-main-heading">
            Total Revenue
        </p>
        <p class="revenue">
            $236,536
        </p>
        <div id="chart">
        </div>
    </div>

</div>

@endsection






</div>