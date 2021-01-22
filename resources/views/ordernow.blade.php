
@extends('master') 
@section("content")
<div class="custom-product">
<div class="col-sm-10">
<table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$total}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>ksh 0 </td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>Ksh 10</td>
        
      </tr>
      <tr>
        <td>Total</td>
        <td>{{$total+10}}</td>
        
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
  @csrf
  <div class="form-group" >
    <textarea name="address" placeholder="enter your adress"  class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span>AirtelMoney</span><br><br>
    <input type="radio" value="cash" name="payment"><span>M-pesa</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Payment on delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-default">confirm</button>
</form> 
  </div>
</div>
</div> 
@endsection