@extends('layouts.template')

@section('content')
<div class="container">
  <h1>Waranty Card</h1>
  <div class="container">
    <div class="container">
     <select name="Customer" id="Customer" onchange="myFunction()"></select>
  </div>
  </div>
  <div class="container">
      <form class="form">
  <p label for="cpn">Company :</label>&nbsp;&nbsp;&nbsp;</p>
    <label for="fname">First Name : </label>&nbsp;&nbsp;&nbsp;
        <p id="fname"></p>
    <p label for="lname">Last Name : </label>&nbsp;&nbsp;&nbsp;</p>

    <p label for="addr">Address : </label>&nbsp;&nbsp;&nbsp;</p>

    <p label for="province">Province : </label>&nbsp;&nbsp;&nbsp;</p>

    <p label for="Amphur">Amphur : </label>&nbsp;&nbsp;&nbsp;</p>

    <p label for="tel">Telephone : </label>&nbsp;&nbsp;&nbsp;</p>

    <p label for="email">E-mail : </label>&nbsp;&nbsp;&nbsp;</p>
 <?php echo "_______________________________________________________________________________________"?>
    </div>
    <div class="container">
        <form>
          <label for="model">Model</label>&nbsp;&nbsp;&nbsp;
            <select name="model" id="model"> 

            </select>&nbsp;&nbsp;

            <label for="serial_number">Serail Number</label>&nbsp;&nbsp;
            <select name="serial_number" id="serial_number"> 
            <br>
            <label for="supplier">Supplier</label>&nbsp;&nbsp;
            <input type="text" id="supplier" name="supplier" placeholder="supplier..">&nbsp;&nbsp;
            <br>
            <label for="warantyperiod">Waranty Period</label>&nbsp;
            <input type="text" id="warantyperiod" name="waranty_period" placeholder="year..">
            <br><br>
            <input type="submit" value="Submit">


        </form>
    </div>
</div>
@endsection
