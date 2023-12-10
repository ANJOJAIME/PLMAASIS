<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>CREATE | Supplies in Main</title>
        
        <style>
            body {
                font-family: Arial;
                background-color: #2D349A;
                margin: 0;
                padding: 20px;
                overflow: hidden;
            }
            img {
                position: absolute;
                width: 280px;
                height: 60px;
                left: 15px;
                top: 8px;
            }
            .custom-header {
                position: absolute;
                left: 0px; /* Adjust as needed */
                top: 0px;
                width: 1535px;
                height: 75px;
                flex-shrink: 0;
                background: #FFF;
                border-radius: 0px 0px 12px 12px;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                display: flex;
                justify-content: space-between;
                padding: 0 20px;
                z-index: 2;
            }

            .form-control {
                border-radius: none;
                width: 1084px;
                height: 31px;
                border: 0.5px solid #000;
                background: #D1DFFF;
            }
            .card-body{
                position: fixed;
                top: 120px;
                right: 150px;
                width: 1250px;
                height: 450px;
                flex-shrink: 0;
                border-radius: 8px;
                background: #E6EDFD;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            }
            .input-group {
                top: 25px;
                display: flex;
                align-items: center;
                gap: 10px;
                justify-content: space-between;
                margin: 10px 0;
            }

            .input-group label {
                flex-shrink: 0;
                width: 100px; /* adjust as needed */
            }

            .btn1-primary {
                position: fixed;
                top: 600px;
                left: 355px;
                border-radius: 8px;
                border: 0.5px solid #000;
                background: #D1DFFF;
                width: 194px;
                height: 38px;
                flex-shrink: 0;
            }
            .btn1-primary:hover{
                background-color: #0069d9;
                color: white;
                border: none;
            }

            .btn-primary{
                position: fixed;
                top: 600px;
                left: 135px;
                border-radius: 8px;
                border: 0.5px solid #000;
                background: #D1DFFF;
                width: 194px;
                height: 38px;
                flex-shrink: 0;
                color: black;
            }
        </style>
    </head>
    <body>
        <header class="custom-header">
            <img src="/image/PLMLogo.png" alt="logo">
        </header>
        <div>
            <a href="{{url('/supplies-delivered')}}" class="btn btn1-primary">Cancel</a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-body">
                        <h1><strong>Delivered Table</strong></h1>
                        <form action="{{url('/supplies-delivered-create')}}" class="form-body" method="POST" autocomplete="off">
                            @csrf
                            <div class="input-group">
                                <label for="stock_no"><strong>Stock No:</strong></label>
                                <select name="stock_no" class="form-control @error('stock_no') is-invalid @enderror">
                                    @foreach($stock_nos as $stock_no)
                                        <option value="{{ $stock_no }}">{{ $stock_no }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="delivery_date"><strong>Delivery Date:</strong></label>
                                <input type="date" name="delivery_date" class="form-control @error('delivery_date') is-invalid @enderror" placeholder="{{ $errors->first('delivery_date') }}">
                            </div>
                            <div class="input-group">
                                <label for="actual_delivery_date"><strong>Actual Delivery Date:</strong></label>
                                <input type="date" name="actual_delivery_date" class="form-control @error('actual_delivery_date') is-invalid @enderror" placeholder="{{ $errors->first('actual_delivery_date') }}">
                            </div>
                            <div class="input-group">
                                <label for="acceptance_date"><strong>Acceptance Date:</strong></label>
                                <input type="date" name="acceptance_date" class="form-control @error('acceptance_date') is-invalid @enderror" placeholder="{{ $errors->first('acceptance_date') }}">
                            </div>
                            <div class="input-group">
                                <label for="iar_no"><strong>IAR No:</strong></label>
                                <input type="text" name="iar_no" class="form-control @error('iar_no') is-invalid @enderror" placeholder="{{ $errors->first('iar_no') }}">
                            </div>
                            <div class="input-group">
                                <label for="item_no"><strong>Item No:</strong></label>
                                <input type="number" name="item_no" class="form-control @error('item_no') is-invalid @enderror" placeholder="{{ $errors->first('item_no') }}">
                            </div>
                            <div class="input-group">
                                <label for="description"><strong>Description:</strong></label>
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="{{ $errors->first('description') }}">
                            </div>
                            <div class="input-group">
                                <label for="unit"><strong>Unit:</strong></label>
                                <input type="text" name="unit" class="form-control @error('unit') is-invalid @enderror" placeholder="{{ $errors->first('unit') }}">
                            </div>
                            <div class="input-group">
                                <label for="dr_no"><strong>DR No:</strong></label>
                                <input type="text" name="dr_no" class="form-control @error('dr_no') is-invalid @enderror" placeholder="{{ $errors->first('dr_no') }}">
                            </div>
                            <div class="input-group">
                                <label for="check_no"><strong>Check No:</strong></label>
                                <input type="text" name="check_no" class="form-control @error('check_no') is-invalid @enderror" placeholder="{{ $errors->first('check_no') }}">
                            </div>
                            <div class="input-group">
                                <label for="po_no"><strong>PO No:</strong></label>
                                <input type="text" name="po_no" class="form-control @error('po_no') is-invalid @enderror" placeholder="{{ $errors->first('po_no') }}">
                            </div>
                            <div class="input-group">
                                <label for="po_date"><strong>PO Date:</strong></label>
                                <input type="date" name="po_date" class="form-control @error('po_date') is-invalid @enderror" placeholder="{{ $errors->first('po_date') }}">
                            </div>
                            <div class="input-group">
                                <label for="po_amount"><strong>PO Amount:</strong></label>
                                <input type="number" step="00000000.00"name="po_amount" class="form-control @error('po_amount') is-invalid @enderror" placeholder="{{ $errors->first('po_amount') }}">
                            </div>
                            <div class="input-group">
                                <label for="dr_no"><strong>DR No:</strong></label>
                                <input type="text" name="dr_no" class="form-control @error('dr_no') is-invalid @enderror" placeholder="{{ $errors->first('dr_no') }}">
                            </div>
                            <div class="input-group">
                                <label for="dr_no"><strong>DR No:</strong></label>
                                <input type="text" name="dr_no" class="form-control @error('dr_no') is-invalid @enderror" placeholder="{{ $errors->first('dr_no') }}">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary float-end">SAve</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            if (errorOccurred) {
                var stockNoField = document.querySelector('input[name="stock_no"]');
                stockNoField.placeholder = "Error: Please enter a valid Stock Number";
                stockNoField.style.color = "red";

                var descriptionField = document.querySelector('input[name="description"]');
                descriptionField.placeholder = "Error: Please enter a valid Description";
                descriptionField.style.color = "red";

                var unitField = document.querySelector('input[name="unit"]');
                unitField.placeholder = "Error: Please enter a Valid Unit";
                unitField.style.color = "red";

                var balanceBeforeField = document.querySelector('input[name="balance_before"]');
                balanceBeforeField.placeholder = "Error: Please enter a valid Balance Before value";
                balanceBeforeField.style.color = "red";

                var deliveredField = document.querySelector('input[name="delivered"]');
                deliveredField.placeholder = "Error: Please enter a valid Delivered Quantity value";
                deliveredField.style.color = "red";

                var issuedField = document.querySelector('input[name="issued"]');
                issuedField.placeholder = "Error: Please enter a valid Issued Quantity value";
                issuedField.style.color = "red";
            }
        </script>
        <script>
            $(document).ready(function(){
                $(".btn1-primary").hover(function(){
                    $(this).css("background-color", "blue");
                    $(this).css("color", "white");
                    }, function(){
                    $(this).css("background-color", "");
                    $(this).css("color", "");
                });
            });
        </script>
        <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                var stock_no = document.querySelector('input[name="stock_no"]').value;
                var description = document.querySelector('input[name="description"]').value;
                var unit = document.querySelector('input[name="unit"]').value;
                var balanceBefore = document.querySelector('input[name="balance_before"]').value;
                var delivered = document.querySelector('input[name="delivered"]').value;
                var issued = document.querySelector('input[name="issued"]').value;
                var balance_after = document.querySelector('input[name="balance_after"]').value;

                var message = 'Are you sure you want to ADD this item:\n' +
                    'Stock No: ' + stock_no + '\n' +
                    'Description: ' + description + '\n' +
                    'Unit: ' + unit + '\n' +
                    'Balance Before: ' + balanceBefore + '\n' +
                    'Delivered: ' + delivered + '\n' +
                    'Issued: ' + issued + '\n' +
                    'Balance After: ' + balance_after +
                    "\nif not select 'cancel'";

                if (!confirm(message)) {
                    event.preventDefault();
                }
            });
        </script>
    </body>
</html>