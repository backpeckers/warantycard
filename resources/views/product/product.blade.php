@extends('layouts.template')

@section('content')
<div class="container">
  <h1>Product</h1>
  <div class="container">
      <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
      <tr>
      <a href="{{ url('/add_product') }}" class="button5">+</a>
        <form>
        <input type="text" name="txtKeyword" id="txtKeyword" placeholder="Search..">
          <input type="submit" value="Search" class="button5"></th>
        </form>
      </tr>
      </form>
    </div>
  <div class="container">
      <table width="900" border="1">
          <tr>
          <th width="40"> <div align="center">ID</div></th>
          <th width="100"> <div align="center">Model</div></th>
          <th width="100"> <div align="center">Serial Number</div></th>
          <th width="200"> <div align="center">Supplier</div></th>
          <th width="20"> <div align="center">Waranty Period</div></th>
          </tr>
      </table>
  </div>
</div>
@endsection
