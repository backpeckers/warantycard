@extends('layouts.template')

@section('content')
<form action="{{ url('/add_product') }}" name="frmAdd" method="post">
{{ csrf_field() }}
<div class="container">
        <div>
          <form class="form">
        <label for="brand">Brand</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="brand" name="brand">
        <br><br>
        <label for="serial_number">Serail Number</label>&nbsp;
        <input type="text" id="serial" name="serial" >
        <br><br>
        <label for="model">Model</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="model" name="model" >
        <br><br>
        <label for="supplier">Supplier</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="supplier" name="supplier" >
        <br><br>
        <label for="warantyperiod">Waranty Period</label>
        <input type="text" id="warantyperiod" name="waranty_period" >
        <br><br>
        <input type="submit" value="Submit">
      </form>
    </div>
    </form>
  
</div>

@endsection
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('app/add_product.js') }}"></script>
