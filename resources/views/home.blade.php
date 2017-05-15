@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                    <body>
                    <form>
                   
                       
                        
                        
                    </form>
                    </body>

                <div class="panel-body"> 
                        <div><a href ="cus.blade.php" class=".btn btn-primary"> Customer</a></div>
                        <div><a href="productDetails.php" class=".btn btn-primary">Product</a></div>
                        <div><a href="warantycard.php" class=".btn btn-primary">Waranty Card</a></div>
                        <div><a href="report.php" class=".btn btn-primary">Report</a></div>
                        <div><a href="maintenance.php" class=".btn btn-primary">Maintenance</a></div>
        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
