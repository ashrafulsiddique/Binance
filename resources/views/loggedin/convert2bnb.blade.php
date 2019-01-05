@extends('layouts.app')

@section('content')
    <div id="balance">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h5>Convert Small Balances to BNB</h5>
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('conversion-history') }}">View Conversion History</a>
                    </div>
                    <div class="alert alert-warning col-12" role="alert">
                        You can convert balances with a valuation below 0.001 BTC to BNB once every 24 hours. It is not currently possible to convert delisted coins.
                    </div>
                    <div class="col-12">
                        <table class="table table-hover" style="position: relative;margin-top:100px;top: -100px; ">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" disabled="disabled"></th>
                                    <th>Coin</th>
                                    <th>Name</th>
                                    <th>Available Balance</th>
                                    <th>BTC Value</th>
                                    <th>Approx. BNB Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="text-center" style="position: relative;top: 100px;">
                                    @foreach ($conver_history as  $open )
                                        <tr>
                                            <td></td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['coin']) ) }}">{{ $open['coin']  }}</a></td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['name']) ) }}">{{ $open['name']  }}</a></td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['available_balance']) ) }}">{{ $open['available_balance']  }}</a></td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['btc_value']) ) }}">{{ $open['btc_value']  }}</a></td>
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['bnb_value']) ) }}">{{ $open['bnb_value']  }}</a></td>
                                  
                                        </tr>
                                    @endforeach    


                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection