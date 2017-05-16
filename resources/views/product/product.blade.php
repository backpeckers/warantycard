@extends('layouts.template')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

@section('content')
  <div class="col-md-15">
      <form name="frmSearch" method="get" action="">
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
      <table width="700" border="1" id="users-table">
          <tr>
          <th width="40"> <div align="center">ID</div></th>
          <th width="100"> <div align="center">Brand</div></th>
          <th width="100"> <div align="center">Serial Number</div></th>
          <th width="200"> <div align="center">Model</div></th>
          <th width="200"> <div align="center">Supplier</div></th>
          <th width="20"> <div align="center">Waranty Period</div></th>
          <th width="40"> <div  align="center">Edit</div></th>
        
          </tr>
          @foreach ($products as $product)
                <tr>
                    <td width="40"> <div align="center">{{ $product->product_id }} </div></td>
                    <td width="40"> <div align="center">{{ $product->brand }} </div></td>
                    <td width="40"> <div align="center">{{ $product->serial_no }} </div></td>
                    <td width="40"> <div align="center">{{ $product->model_no }} </div></td>
                    <td width="40"> <div align="center">{{ $product->supplier }} </div></td>
                    <td width="40"> <div align="center">{{ $product->yearOfWaranty }} </div></td>
                    <td width="40"> <div align="center"> <a  href="/edit_product/{{$product->product_id}}" class="button5">Edit</a></div></td>
                    
                 </tr>
            @endforeach
      </table>
  </div>
@endsection
