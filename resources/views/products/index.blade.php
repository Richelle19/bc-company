@extends('layouts.master')
@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>
            
        <center><h3 style="font-family: arial-black">Products</h3>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
              <table>
                  <thead>
                      <tr>
                          <th><strong>Products</strong></th>
                          <th><strong>Branch</strong></th>
                          <th><strong>Quantity</strong></th>
                          <th><strong>Status</strong></th>
                          <th><strong>Amount</strong></th>
                          <th><strong>Date</strong></th>                         
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($products as $product)
                      <tr>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->store->branch }}</td>                        
                          @foreach($product->transactions as $transaction) 
                          <td>{{ $transaction->quantity}}</td>
                          <td>{{ $transaction->status }}</td>
                          <td>{{ $transaction->amount }}</td>
                          <td>{{ $transaction->date }}</td>
                          @endforeach
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
@endsection