@extends('layout')
@section("content")
<div class=" custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
            <tr>
                <td>Amount</td>
                <td>P {{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>P 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>P 200</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>p {{$total+200}}</td>
            </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
            @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="enter your address" class="form-control" id="email"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment"><span>online payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
                    <input type="radio" value="cash" name="payment"><span>Payment on delivery</span><br><br>
                </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection