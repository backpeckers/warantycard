@extends('layouts.template')

@section('content')
<form action="customerAdd.php" name="frmAdd" method="post">


<div>
  <form class="form">
    <input type="checkbox">Personal</label>
    <br>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">&nbsp;&nbsp;&nbsp;
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>
    <label for="lname">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="addre" name="address" placeholder="Your Address..">&nbsp;&nbsp;&nbsp;

              <label for="province">Province</label>&nbsp;&nbsp;&nbsp;
                <span id="province">
                    <select>
                        <option value="0">- Select province -</option>
                    </select>
                </span>
           <br>
               <label for="amphur">Amphur</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <span id="amphur">
                    <select>
                        <option value='0'>- Select amphur -</option>
                    </select>
                </span>&nbsp;&nbsp;
               <label for="district">District</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span id="district">
                    <select>
                        <option value='0'>- Select district -</option>
                    </select>
                </span>
                <br>

    <label for="tel">Telephone</label>&nbsp;
    <input type="text" id="tel" name="telephone" placeholder="Your Telephone Number..">&nbsp;&nbsp;&nbsp;&nbsp;
 
    <label for="email">E-mail</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="mail" name="email" placeholder="Your E-mail..">

  <br><br>
  <input type="checkbox">Company</label>
  <br>
  <label for="fname">Company</label>&nbsp;&nbsp;&nbsp;
    <input type="text" id="cname" name="company" placeholder="Your Company Name..">&nbsp;&nbsp;&nbsp;
    <br>
  <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">&nbsp;&nbsp;&nbsp;
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
<br>
    <label for="lname">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="addre" name="address" placeholder="Your Address..">&nbsp;&nbsp;&nbsp;

              <label for="province">Province</label>&nbsp;&nbsp;&nbsp;
                <span id="province">
                    <select>
                        <option value="0">- Select province -</option>
                    </select>
                </span>
           <br>
               <label for="amphur">Amphur</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <span id="amphur">
                    <select>
                        <option value='0'>- Select amphur -</option>
                    </select>
                </span>&nbsp;&nbsp;
               <label for="district">District</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span id="district">
                    <select>
                        <option value='0'>- Select district -</option>
                    </select>
                </span>
                <br>

    <label for="tel">Telephone</label>&nbsp;
    <input type="text" id="tel" name="telephone" placeholder="Your Telephone Number..">&nbsp;&nbsp;&nbsp;&nbsp;
 
    <label for="email">E-mail</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="mail" name="email" placeholder="Your E-mail..">

  <br>
    <input type="submit" value="Submit" onclick="return confirm('Are you sure?')">
  </form>

@endsection
