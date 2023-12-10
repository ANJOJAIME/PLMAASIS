<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>PLM | Delivered Supplies</title>

        <style>
            body {
                font-family: Arial;
                background-color: #4F74BB;
                margin: 0;
                padding: 20px;
                overflow: hidden;
            }

            .custom-header {
                position: absolute;
                left: 0;
                top: 0;
                width: calc(100% - 20px);
                height: 90px;
                flex-shrink: 0;
                background: #FFF;
                border-radius: 0px 0px 12px 12px;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
                z-index: 2;
            }
            .side-bar {
                position: absolute;
                left: 0;
                top: 85px;
                border-radius: 9.574px;
                background: #EFF0FF;
                width: 444px;
                height: 50px;
                justify-content: space-between;
                align-items: center;
                flex-shrink: 0;
            }

            .table-container {
                position: absolute;
                left: 300px; /* Adjust as needed */
                top: 180px; /* Adjust as needed */
                max-height: 500px; /* Adjust as needed */
                max-width: 1200px;
                overflow-y: auto;
                overflow-x: auto;
                border-radius: 15px;
            }

            .table-container table {
                border-collapse: collapse;
                width: 1200px;
                height: 550px;
                border-radius: 15px;
                overflow: hidden;
                table-layout: fixed;
            }

            .table-container th, .table-container td {
                text-align: center;
                padding: 8px;
                border: 1px solid #ddd;
                width: 100px;
            }

            .table-container td{
                border-collapse: separate;
                word-wrap: break-word;
            }

            .table-container th {
                position: sticky;
                background-color: #e6edfd;
                font-weight: bold;
            }

            .table-container tbody tr:nth-child(odd) {
                background-color: white;
            }
            .table-container tbody tr:nth-child(even) {
                background-color: #f8f9fc;
            }
            .table-container tbody tr:hover {
                background-color: #dfe0e3;
            }

            .dropdown {
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 2;
            }
            .btn-primary {
                position: absolute;
                text-align: center;
                border:none;
                top: 100px;
                right: 220px;
                height: 40px;
                padding-top: 10px;
                border-radius: 8px;
                background: #EFF0FF;
                color: #000;
                font-size: 14px;
                font-style: normal;
                line-height: normal;
            }
            .dropdown {
                left: 15px; /* Adjust as needed */
                top: 220px; /* Adjust as needed */
                z-index: 2;
            }
            .gendropdown {
                top: 100px;
                right: 35px;
                border-radius: 8px;
            }
            .custom-header {
                position: absolute;
                left: 0px; /* Adjust as needed */
                top: 0px;
                width: 1535px;
                height: 65px;
                flex-shrink: 0;
                background: #FFF;
                border-radius: 0px 0px 12px 12px;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
                z-index: 2;
            }
            img {
                position: absolute;
                width: 260px;
                height: 50px;
                left: 15px;
                top: 8px;
            }
            .side-bar{
                position: absolute;
                left: 0px; /* Adjust as needed */
                top: 45px;
                width: 260.877px;
                height: 1003px;
                flex-shrink: 0;
                background: #2D349A;
                z-index: 1;
            }
            .btn-edit, .btn-delete{
                background-color: #EFF0FF; 
                color: #000;
                font-size: 17px;
                padding: 5px 5px;
                border-radius: 8px;
                text-align: center;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .btn-edit:hover {
                background-color: green;
                color: white;
            }
            .btn-delete:hover {
                background-color: red;
                color: white;
            }
        </style>

    </head>
    <body>
        <header class="custom-header">
            <img src="/image/PLMLogo.png" alt="logo">
        </header>
        <div class="search-bar" style="position: fixed; top: 100px; left: 300px; border-radius: 9.574px; background: #EFF0FF; display: flex; width: 444px; height: 40px; padding: 4.608px 0px 4.608px 9.217px; justify-content: space-between; align-items: center; flex-shrink: 0;">
            <form action="/search" method="get" autocomplete="off">
                <input type="text" style="border: none; background-color: transparent; width: 430px; outline: none;" name="stock_no" placeholder="Search here..." onkeyup="search(event)">
            </form>
        </div>

        <div class="side-bar" style="padding: 10px;">
            <h1 style="color: white; text-align: center; font-size: 32px; padding-top: 30px;"><strong>PLM SUPPLIES</strong></h1>
            <h2 style="color: white; text-align: center; font-size: 20px;">Delivered Supplies</h2>
        </div>
        <div>
            <h4>
                <a href="{{url('/supplies-delivered-create')}}" class="btn btn-primary"><strong>ADD DELIVERED</strong></a>
            </h4>
        <div>
        <div class="success-alert" style="position: fixed; top:350px; right:600px; z-index: 4;">
            @if(session('status'))
                <div id="alert" class="alert alert-success">{{session('status')}}</div>
                <script>
                    setTimeout(function() {
                        document.getElementById('alert').style.display = 'none';
                    }, 2000);
                </script>
            @endif
        </div>

        <div class="container">
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Stock No.</th>
                            <th>Delivery Date</th>
                            <th>Actual Delivery Date</th>
                            <th>Acceptance Date</th>
                            <th>IAR No.</th>
                            <th>Item No.</th>
                            <th>Description</th>
                            <th>Unit</th>
                            <th>DR No.</th>
                            <th>Check No.</th>
                            <th>PO No.</th>
                            <th>PO Date</th>
                            <th>PO Amount</th>
                            <th>PR No.</th>
                            <th>Price Per Purchase Request</th>
                            <th>BUR</th>
                            <th>Remarks</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($suppliesdelivered as $delivereddata)
                        <tr>
                            <td>{{$delivereddata->stock_no}}</td>
                            <td>{{$delivereddata->delivery_date}}</td>
                            <td>{{$delivereddata->actual_delivery_date}}</td>
                            <td>{{$delivereddata->acceptance_date}}</td>
                            <td>{{$delivereddata->iar_no}}</td>
                            <td>{{$delivereddata->item_no}}</td>
                            <td>{{$delivereddata->description}}</td>
                            <td>{{$delivereddata->unit}}</td>
                            <td>{{$delivereddata->dr_no}}</td>
                            <td>{{$delivereddata->check_no}}</td>
                            <td>{{$delivereddata->po_no}}</td>
                            <td>{{$delivereddata->po_date}}</td>
                            <td>{{$delivereddata->po_amount}}</td>
                            <td>{{$delivereddata->pr_no}}</td>
                            <td>{{$delivereddata->price_per_purchase_request}}</td>
                            <td>{{$delivereddata->bur}}</td>
                            <td>{{$delivereddata->remark}}</td>
                            <td>{{$delivereddata->updated_at}}
                            <td>
                                <a href="{{ url('delivered-edit/'.$delivereddata->stock_no)}}" class="btn-edit" style="text-decoration: none">Edit</a>
                                <a href="{{ url('delivered-delete/'.$delivereddata->stock_no)}}" class="btn-delete" style="text-decoration: none" onclick="return confirm('Are you sure you want to delete this data with Stock No. {{$delivereddata->stock_no}} in the supplies?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="dropdown" style="position: absolute; border:none;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none; ">
                <strong>Supplies System</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="top: 10px; left: 10px; background-color: transparent; border: none;">
                <a class="dropdown-item" href="/supplies" style="color: white; background-color: transparent;">Main</a>
                <a class="dropdown-item" href="#" style="color: white; background-color: transparent;">Issued</a>
                <a class="dropdown-item" href="/supplies-delivered" style="color: white; background-color: transparent;">Delivered</a>
            </div>
        </div>

        <div class="gendropdown" style="position: absolute; border:none;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #e6edfd; color: black; border: none; width: 160px; height: 40px;">
                <strong>Generate Form</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="top: 10px; left: 10px; background-color: transparent; border: none;">
                <a class="dropdown-item" href="#" style="color: black; background-color: #e6edfd; border-radius: 8px 8px 0px 0px;">FORM1</a>
                <a class="dropdown-item" href="#" style="color: black; background-color: #e6edfd;">FORM2</a>
                <a class="dropdown-item" href="#" style="color: black; background-color: #e6edfd; border-radius: 0px 0px 8px 8px">FORM3</a>
            </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
            $("input[type='submit']").hover(function(){
                $(this).css("background-color", "#0069d9");
                $(this).css("color", "white"); // Change font color to white
                }, function(){
                $(this).css("background-color", "");
                $(this).css("color", ""); // Reset font color
            });
            });
        </script>
        <script>
        $(document).ready(function(){
            $(".gendropdown .dropdown-item").hover(function(){
                $(this).css("background-color", "#0069d9");
                $(this).css("color", "white");
                }, function(){
                $(this).css("background-color", "#e6edfd");
                $(this).css("color", "black");
            });
        });
        </script>
        <script>
            $(document).ready(function(){
                $(".dropdown .dropdown-item").hover(function(){
                    $(this).css("background-color", "white");
                    $(this).css("color", "#2D349A");
                    }, function(){
                    $(this).css("background-color", "transparent");
                    $(this).css("color", "white");
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $("#dropdownMenuButton1").hover(function(){
                    $(this).css("background-color", "#0069d9");
                    $(this).css("color", "white");
                    }, function(){
                    $(this).css("background-color", "#e6edfd");
                    $(this).css("color", "black");
                });
            });
        </script>
    </body>
</html>
