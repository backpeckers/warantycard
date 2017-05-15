<!DOCTYPE html>
<html>
<head>
<title>Data Table</title>
{!!Html::style('../resources/assets/css/bootstrap.css')!!}
{!!Html::style('../resources/assets/css/jquery.dataTables.css')!!}
{!!Html::script('../resources/assets/js/jquery-1.12.0.js')!!}
{!!Html::script('../resources/assets/js/jquery.dataTables.js')!!}
</head>
<style type="text/css">
	.wrapper{
		width: 75%;
		margin: 0 auto;
		background: #eee;
	}
</style>
<body>
<section class="panel panel-primary">
	<div class="panel-heading">
	<b>Customer Info</b>
	</div>
	<div class="panel-body">
	<table class="table table-hover table-bordered">
		<thead>
			<th>ID</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Address</th>
			<th>Tel</th>
			<th>E-mail</th>
		</thead>
		<tbody>
			@foreach ($cust as $customer)
			<tr>
				<td>{{$customer->customer_id}}</td>
				<td>{{$customer->firstname}}</td>
				<td>{{$customer->lastname}}</td>
				<td>{{$customer->address}}</td>
				<td>{{$customer->tel}}</td>
				<td>{{$customer->email}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</section>
	Hello Data Table
</body>
</html>