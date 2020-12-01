@extends('layouts.master')
@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>       
        <center><h3 style="font-family: arial-black">{{ $store->branch }} Products</h3></center>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
              <table>
                  <thead>
                      <tr>
                          <td><strong>Products</strong></td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($store->products as $product)
                      <tr>
                          <td>{{ $product->name }}</td>
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