@extends('layouts.template')

@section('content')
<div class="container">
  <h1>Waranty Card</h1>
  <div class="container">
    <div class="container">
    <br>
    <label for="selec">Select Name</label>
     <select name="Customer" id="Customer">
     
     </select>
  </div>
  </div>
  <div class="container">
      <form class="form">
            <P label for="fname">First Name : </label>&nbsp;&nbsp;&nbsp;
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
          <label for="brand">Brand : </label>&nbsp;&nbsp;&nbsp;
            <select name="brand" id="brand"> 

            </select>
            &nbsp;&nbsp;
            <label for="model">Model :</label>&nbsp;&nbsp;
            <select name="model" id="model"> 
            </select>
            <label for="serial_number">Serail Number :</label>&nbsp;&nbsp;
            <select name="serial_number" id="serial_number"> 
            </select>
            <br>
            <label for="supplier">Supplier: </label>&nbsp;&nbsp;
            <br>
            <label for="warantyperiod">Waranty Period : </label>&nbsp;
            <br>
            <input type="submit" value="Submit">


        </form>
    </div>
</div>
@endsection
