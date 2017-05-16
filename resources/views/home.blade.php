@extends('layouts.template')
 <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@section('content')
    <div class="col-md-15">
        <form name="frmSearch" method="get" action="">
        <tr>
        <a href="{{ url('/add_customer') }}" class="button5">+</a>
          <form>
            <input type="text" name="txtKeyword" id="txtKeyword" placeholder="Search by name and phone..">
            <input type="submit" value="Search" class="button5"></th>
          </form>
        </tr>
        </form> 
    </div>   
    <div class="container" >
        <table width="900" border="1" id="users-table">
        <tr>
            <th width="40"> <div align="center">ID </div></th>
            <th width="100"> <div align="center">Name </div></th>
            <th width="100"> <div align="center">LastName </div></th>
            <th width="200"> <div align="center">Address </div></th>
            <th width="100"> <div align="center">District </div></th>
            <th width="100"> <div align="center">Amphur </div></th>
            <th width="100"> <div align="center">Province </div></th>
            <th width="98"> <div align="center">Tel </div></th>
            <th width="200"> <div align="center">Email </div></th>
            <th width="40"> <div  align="center">Edit</div></th>
            
        </tr>
            @foreach ($customers as $customer)
                <tr>
                    <td width="40"> <div align="center">{{ $customer->customer_id }} </div></td>
                    <td width="40"> <div align="center">{{ $customer->firstname }} </div></td>
                    <td width="40"> <div align="center">{{ $customer->lastname }} </div></td>
                    <td width="40"> <div align="center">{{ $customer->address }} </div></td>
                    <td width="40"> <div align="center"> </div></td>
                    <td width="40"> <div align="center"> </div></td>
                    <td width="40"> <div align="center"> </div></td>
                    <td width="40"> <div align="center">{{ $customer->tel }} </div></td>
                    <td width="40"> <div align="center">{{ $customer->email }} </div></td>
                    <td width="40"> <div align="center"> <a  href="/edit_customer/{{$customer->customer_id}}" class="button5">Edit</a></div></td>
                    
                 </tr>
            @endforeach
        </table>
    </div>

@endsection
  <!-- jQuery -->
        <!-- <script src="//code.jquery.com/jquery-1.12.4.js"></script> -->
        <script src="{{ asset('js/jquery-1.12.js') }}"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->
        <!--<script src="{{ asset('app/add_customer.js') }}"></script> -->
        
