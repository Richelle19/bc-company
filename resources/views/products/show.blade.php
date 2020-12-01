@extends('layouts.master')
@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>    
        <center><h3 style="font-family: arial-black">{{ $product->name }} Transactions</h3></center>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
              <table>
                  <thead>
                      <tr>
                          <td><strong>ID</strong></td>
                          <td><strong>Date</strong></td>
                          <td><strong>Quantity</strong></td>
                          <td><strong>Status</strong></td>
                          <td><strong>Amount</strong></td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($product->transactions as $transaction)
                      <tr>
                          <td>{{ $transaction->product_id }}</td>
                          <td>{{ $transaction->date }}</td>
                          <td>{{ $transaction->quantity }}</td>
                          <td>{{ $transaction->status }}</td>
                          <td>{{ $transaction->amount }}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection