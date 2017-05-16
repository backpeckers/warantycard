@extends('layouts.template')

@section('content')
<form action="{{ url('/edit_product') }}" name="frmAdd" method="post">
{{ csrf_field() }}
 <input type="hidden" name="id" value="{{$product[0]->product_id }}">
<div class="container">
    <form action="productAdd.php" name="frmAdd" method="post">
        <div>
          <form class="form">
        <label for="brand">Brand</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="brand" name="brand" placeholder="brand.." value="{{ $product[0]->brand }}">
        <br><br>
        <label for="serial_number">Serail Number</label>&nbsp;&nbsp;
        <input type="text" id="serial" name="serial" placeholder="serial number.." value="{{ $product[0]->serial_no }}">
        <br><br>
        <label for="model">Model</label>&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="model" name="model" placeholder="model.." value="{{ $product[0]->model_no }}">
        <br><br>
        <label for="supplier">Supplier</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="supplier" name="supplier" placeholder="supplier.." value="{{ $product[0]->supplier }}">
        <br><br>
        <label for="warantyperiod">Waranty Period</label>
        <input type="text" id="warantyperiod" name="waranty_period" placeholder="year.." value="{{ $product[0]->yearOfWaranty }}">
        <br><br>
        <input type="submit" value="Submit">
      </form>
    </div>
    </form>
  
</div>

@endsection
