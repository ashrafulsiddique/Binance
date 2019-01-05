@extends('layouts.app')

@section('content')
    <div id="transaction">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Open Orders</h3>
                    </div>
                    <div class="col-12">
                        <table class="table table-hover table-bordered" style="position: relative;margin-top:100px;top: -100px;">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Pair</th>
                                    <th>Type</th>
                                    <th>Side</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Filled %</th>
                                    <th>Total</th>
                                    <th>Trigger Conditions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="text-center" style="position: relative;top: 100px;">
                                @foreach ($orders as  $open )
                                        <tr>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['date']) ) }}">{{ $open['date']  }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['pair']) ) }}">{{ $open['pair']  }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['type']) ) }}">{{ $open['type']  }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['side']) ) }}">{{ $open['side']  }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['price']) ) }}">{{ $open['price']  }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['amount']) ) }}">{{ $open['amount']  }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['filled']) ) }}">{{ $open['filled']  }} </a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['total']) ) }}">{{ $open['total']  }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['trigger_conditions']) ) }}">{{ $open['trigger_conditions'] }}</a></td>
                                            <td><a href="{{ route('open-order',str_replace('/','_',$open['action']) ) }}">{{ $open['action']  }}</a></td>
                                           
                                        </tr>
                                    @endforeach 
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection