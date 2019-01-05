@extends('layouts.app')

@section('content')
    <div id="order-history">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Order History</h3>
                    </div>
                    <div class="col-12">
                        <div class="row" style="font-size: 13px;">
                            <div class="col-9" style="white-space: nowrap;">
                                <form action="" method="">
                                    <label for="">From</label>
                                    <input type="date">
                                    <label>To</label>
                                    <input type="date">
                                    <span>Pair: </span>
                                    <select class="selectpicker fill_selectbtn_in own_selectbox" title="coin" name="from-currency" id="from-currency">
                                        <option value="ADA">ADA</option>
                                        <option value="BTC">BTC</option>
                                        <option value="BNB">BNB</option>
                                        <option value="ETH">ETH</option>
                                        <option value="ELF">ELF</option>
                                        <option value="EOS">EOS</option>
                                        <option value="DNT">DNT</option>
                                        <option value="USDT">USDT</option>
                                    </select>
                                    <span>/</span>
                                    <select name="from-currency" id="from-currency">
                                        <option value="All">All</option>
                                        <option value="BTC">BTC</option>
                                        <option value="BNB">BNB</option>
                                        <option value="ETH">ETH</option>
                                        <option value="USDT">USDT</option>
                                    </select>
                                    <span>Type:</span>
                                    <select name="exchange-type" id="exchange-type">
                                        <option value="ALl">All</option>
                                        <option value="Buy">Buy</option>
                                        <option value="Sell">Sell</option>
                                    </select>
                                    <a href="#" class="btn-history btn-brand">Search</a>
                                    <a href="#" class="btn-history">Reset</a>
                                    <input type="checkbox">
                                    <span>Hide all canceled</span>
                                </form>
                            </div>
                            <div class="col-3 text-right">
                                <a href="#">Export Complete Order History</a>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered" style="position: relative;margin-top:100px;top: -100px;">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Pair</th>
                                    <th>Type</th>
                                    <th>Side</th>
                                    <th>Average</th>
                                    <th>Price</th>
                                    <th>Filled</th>
                                    <th>Amount</th>
                                    <th>Total</th>
                                    <th>Trigger Conditions</th>
                                    <th>Status</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="text-center" style="position: relative;top: 100px;">
                                
                                @foreach ($history as  $open )
                                        <tr>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['date']) ) }}">{{ $open['date']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['pair']) ) }}">{{ $open['pair']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['type']) ) }}">{{ $open['type']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['side']) ) }}">{{ $open['side']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['average']) ) }}">{{ $open['average']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['price']) ) }}">{{ $open['price']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['filled']) ) }}">{{ $open['filled']  }}</a> </td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['amount']) ) }}">{{ $open['amount']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['total']) ) }}">{{ $open['total']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['trigger_conditions']) ) }}">{{ $open['trigger_conditions'] }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['status']) ) }}">{{ $open['status']  }}</a></td>
                                            <td><a href="{{ route('order-history',str_replace('/','_',$open['operation']) ) }}">{{ $open['operation']  }}</a></td>
                                           
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