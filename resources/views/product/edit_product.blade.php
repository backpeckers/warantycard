@extends('layouts.template')

@section('content')
<div class="container">
    <form action="productAdd.php" name="frmAdd" method="post">
        <div>
          <form class="form">
        <label for="model">Model</label>
        <input type="text" id="model" name="model" placeholder="model..">

        <label for="serial_number">Serail Number</label>
        <input type="text" id="serial" name="serial_number" placeholder="serial number..">
        
        <label for="supplier">Supplier</label>
        <input type="text" id="supplier" name="supplier" placeholder="supplier..">

        <label for="warantyperiod">Waranty Period</label>
        <input type="text" id="warantyperiod" name="waranty_period" placeholder="year..">

        <input type="submit" value="Submit">
      </form>
    </div>
    </form>
  
</div>

@endsection
