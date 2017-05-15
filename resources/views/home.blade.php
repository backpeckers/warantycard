@extends('layouts.template')
 <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@section('content')

<div class="container">
    <div class="container">
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
    <div class="container">
        <table width="900" border="1">
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
            <th width="40"> <div  align="center">Delete</div></th>
        </tr>
        </table>
    </div>
</div>

@endsection
