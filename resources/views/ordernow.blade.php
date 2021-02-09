@extends('master')
@section('content')
<!-- Trending slides -->
<div class="container">
    <h2>Order details</h2>
   <table class="table">
      <tr>
         <td>Amount</td>
         <td>{{$total}}</td>
      </tr>
      <tr>
         <td>Tax</td>
         <td>$ 0</td>
      </tr>
      <tr>
         <td>Delivery</td>
         <td>${{$d=10}}</td>
      </tr>
      <tr>
         <td>Total Amount</td>
         <td>{{$total+$d}}</td>
      </tr>
   </table>

        <form action="/orderplace" Method="post">
        @csrf
        <div class="form-group">
            <label for="email">Address:</label>
            <textarea class="form-control" placeholder="enter your address" name="address" required></textarea>
        </div>
        <br>
        <label for="payment">Payment Method</label>
        <div class="radio" id="payment">
            <label><input type="radio" name="payment" value="cash" checked>Online payment</label>
            </div>
            <div class="radio">
            <label><input type="radio" name="payment" value="cash">EMI payment</label>
            </div>
            <div class="radio">
            <label><input type="radio" name="payment" value="cash">Payment on Delivery</label>
        </div>
        <button type="submit" class="btn btn-danger">Order Now</button>
        </form>

<br>
</div>
@endsection