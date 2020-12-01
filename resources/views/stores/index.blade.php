@extends('layouts.master')
@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>
        <h3 style="font-family: arial-black">Budang Branches</h3>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
            <table>
                  <thead>
                      <tr>
                          <th><strong>Branch</strong></th>
                          <th><strong>Location</strong></th>                        
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($stores as $store)
                        <tr>
                          
                          <td><a href="/stores/{{ $store->branch }}/show">{{ $store->branch }}</a></td>
                          <td><a href="/stores/{{ $store->address }}/show">{{ $store->address }}</a></td>
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