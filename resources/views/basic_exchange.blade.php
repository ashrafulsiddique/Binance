@extends('layouts.app')

@section('content')

     <div class="news col-12">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="" target="_blank">
                        <span class="">Binance Has Distributed August NPXS</span>
                        <i class="">(09-14)</i>
                    </a>
                </div>
                <div class="col-sm-4">
                     <a href="" target="_blank">
                        <span class="">Binance Will List GoChain (GO) on 2018/09/12</span>
                        <i class="">(09-11)</i>
                    </a>
                </div>
                <div class="col-sm-4">
                     <a href="" target="_blank">
                        <span class="">Binance is Now Available in Polish</span>
                        <i class="">(09-10)</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="exchange-container container">
        <div class="row">
            <div class="col-md-9">
                <div class="row exchange-summary">
                    <div class="exchange-summary-content">
                        <span class="btc">BTC</span><span class="other-currency"> / USDT</span>
                        <p>Bitcoin</p>
                    </div>
                    <div class="exchange-summary-content">
                        <span>Last Price</span>
                        <div>
                            <span class="">6,459.15</span>
                            <span>$6,459.15</span>
                        </div>
                    </div>
                    <div class="exchange-summary-content">
                        <span>24h Change</span>
                        <div>
                            <span class="">-24.67</span>
                            <span>0.34%</span>
                        </div>
                    </div>
                    <div class="exchange-summary-content">
                        <span>24h High</span>
                        <div>
                            <span class="">6,459.15</span>
                        </div>
                    </div>
                    <div class="exchange-summary-content">
                        <span>24h Low</span>
                        <div>
                            <span class="">6,459.15</span>
                        </div>
                    </div>
                    <div class="exchange-summary-content">
                        <span>24h Volume</span>
                        <div>
                            <span class="">146,459,458.15</span>
                            <span> USDT</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row left-side">
                            <div class="col-6">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#duel">
                                            <img src="{{ URL::asset('images/duel.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#up">
                                            <img src="{{ URL::asset('images/up.png') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#down">
                                            <img src="{{ URL::asset('images/down.png') }}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 groups">
                                <span>Groups</span>
                                <select name="decimals" id="decimals">
                                    <option value="zero">2 Decimals</option>
                                    <option value="one">1 Decimals</option>
                                    <option value="two">0 Decimals</option>
                                </select>
                            </div>
                            <div class="tab-content">
                                <div id="duel" class="container tab-pane active">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Price(USDT)</th>
                                                <th>Amount(BTC)</th>
                                                <th>Total(USDT)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($market as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount'] }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['total']) ) }}">{{ $value['total'] }}</a></td>
                    
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="left-exchange-summary row">
                                        <div class="col-9 text-right">
                                            <span>6483.66 </span>
                                            <span> $6483.66</span>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fas fa-signal"></i>
                                        </div>                                       
                                    </div>
                                    <table class="table table-hover table-responsive">
                                        <tbody>
                                        @foreach ($market2 as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount'] }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['total']) ) }}">{{ $value['total'] }}</a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div id="up" class="container tab-pane fade">
                                    <div class="left-exchange-summary row">
                                        <div class="col-9 text-right">
                                            <span>6483.66 </span>
                                            <span> $6483.66</span>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fas fa-signal"></i>
                                        </div>                                       
                                    </div>
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Price(USDT)</th>
                                                <th>Amount(BTC)</th>
                                                <th>Total(USDT)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($market3 as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['total']) ) }}">{{ $value['total']  }}</a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div id="down" class="container tab-pane fade">
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Price(USDT)</th>
                                                <th>Amount(BTC)</th>
                                                <th>Total(USDT)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($market4 as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['total']) ) }}">{{ $value['total']  }}</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="left-exchange-summary row">
                                        <div class="col-9 text-right">
                                            <span>6483.66 </span>
                                            <span> $6483.66</span>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fas fa-signal"></i>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row middle-graph-area">
                            <div class="col-12">
                                <ul class="nav nav-tabs justify-content-end" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active"  data-toggle="tab" href="#original">Original</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  data-toggle="tab" href="#trading-view">Trading View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  data-toggle="tab" href="#depth">Depth</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane container active" id="original">
                                        <ul class="nav nav-tabs graph-sub-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active"  data-toggle="tab" href="#original-time">Time</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">1m</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-1m">1m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-3m">3m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-5m">5m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-15m">15m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-30m">30m</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">1H</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-1h">1H</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-2h">2H</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-4h">4H</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-6h">6H</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-12h">12H</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  data-toggle="tab" href="#original-1d">1D</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  data-toggle="tab" href="#original-1w">1W</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  data-toggle="tab" href="#original-1month">1M</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane container active" id="original-time">
                                                Orginal Time
                                            </div>
                                            <div class="tab-pane container fade" id="original-1m">
                                                Orginal 1m
                                            </div>
                                            <div class="tab-pane container fade" id="original-3m">
                                                Orginal 3m
                                            </div>
                                            <div class="tab-pane container fade" id="original-5m">
                                                Orginal 5m
                                            </div>
                                            <div class="tab-pane container fade" id="original-15m">
                                                Orginal 15m
                                            </div>
                                            <div class="tab-pane container fade" id="original-30m">
                                                Orginal 30m
                                            </div>
                                            <div class="tab-pane container fade" id="original-1h">
                                                Orginal 1H
                                            </div>
                                            <div class="tab-pane container fade" id="original-2h">
                                                Orginal 2H
                                            </div>
                                            <div class="tab-pane container fade" id="original-4h">
                                                Orginal 4H
                                            </div>
                                            <div class="tab-pane container fade" id="original-6h">
                                                Orginal 6H
                                            </div>
                                            <div class="tab-pane container fade" id="original-12h">
                                                Orginal 12H
                                            </div>
                                            <div class="tab-pane container fade" id="original-1d">
                                                Orginal 1D
                                            </div>
                                            <div class="tab-pane container fade" id="original-1w">
                                                Orginal 1W
                                            </div>
                                            <div class="tab-pane container fade" id="original-1month">
                                                Orginal 1M
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="trading-view">
                                        <ul class="nav nav-tabs graph-sub-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active"  data-toggle="tab"href="trading-time">Time</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">1m</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-1m">1m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-3m">3m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-5m">5m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-15m">15m</a>
                                                    <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-30m">30m</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">1m</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item nav-link" data-toggle="tab" href="#trading-1h">1H</a>
                                                    <a class="dropdown-item nav-link" data-toggle="tab" href="#trading-2h">2H</a>
                                                    <a class="dropdown-item nav-link" data-toggle="tab" href="#trading-4h">4H</a>
                                                    <a class="dropdown-item nav-link" data-toggle="tab" href="#trading-6h">6H</a>
                                                    <a class="dropdown-item nav-link" data-toggle="tab" href="#trading-12h">12H</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#trading-1d">1D</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#trading-1w">1W</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#trading-1month">1M</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane container active" id="trading-time">
                                                Trading Time
                                            </div>
                                            <div class="tab-pane container fade" id="trading-1m">
                                                Trading 1m
                                            </div>
                                            <div class="tab-pane container fade" id="trading-3m">
                                                Trading 3m
                                            </div>
                                            <div class="tab-pane container fade" id="trading-5m">
                                                Trading 5m
                                            </div>
                                            <div class="tab-pane container fade" id="trading-15m">
                                                Trading 15m
                                            </div>
                                            <div class="tab-pane container fade" id="trading-30m">
                                                Trading 30m
                                            </div>
                                            <div class="tab-pane container fade" id="trading-1h">
                                                Trading 1H
                                            </div>
                                            <div class="tab-pane container fade" id="trading-2h">
                                                Trading 2H
                                            </div>
                                            <div class="tab-pane container fade" id="trading-4h">
                                                Trading 4H
                                            </div>
                                            <div class="tab-pane container fade" id="trading-6h">
                                                Trading 6H
                                            </div>
                                            <div class="tab-pane container fade" id="trading-12h">
                                                Trading 12H
                                            </div>
                                            <div class="tab-pane container fade" id="trading-1d">
                                                Trading 1D
                                            </div>
                                            <div class="tab-pane container fade" id="trading-1w">
                                                Trading 1W
                                            </div>
                                            <div class="tab-pane container fade" id="trading-1month">
                                                Trading 1M
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="depth">
                                        Depth...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#limit">
                                            Limit
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#market">
                                            Market
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#stop-limit">
                                            Stop Limit
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content buy-sell-tab">
                                    <div id="limit" class="container tab-pane active">
                                        <div class="row">
                                            <div class="col-6 buy-sell-left">
                                                <div class="row">
                                                     <div class="col-6">
                                                         <h5>Buy ETH</h5>
                                                     </div>
                                                     <div class="col-6 text-right">
                                                         <i class="fas fa-wallet"></i>
                                                         - BTC
                                                     </div>
                                                 </div>
                                                 <div class="row mt10">
                                                    <div class="col-3">
                                                        <label for="buy-price">Price: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-price" id="buy-price" value="0.033864"> 
                                                        <span class="input-currency">BTC</span> 
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-3">
                                                        <label for="buy-amount">Amount: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-amount" id="buy-amount">
                                                        <span class="input-currency">ETH</span> 
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="offset-3 col-9">
                                                        <a href="#" class="btn-buy-sell">25%</a>
                                                        <a href="#" class="btn-buy-sell">50%</a>
                                                        <a href="#" class="btn-buy-sell">75%</a>
                                                        <a href="#" class="btn-buy-sell">100%</a>
                                                    </div>
                                                 </div>
                                                 <div class="row mt25">
                                                    <div class="col-3">
                                                       <label for="buy-total">Total: </label>
                                                   </div>
                                                   <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-total" id="buy-total">
                                                        <span class="input-currency">BTC</span>  
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-12">
                                                        <div class="col-12 btn-buy-login">
                                                             <a href="#" class="brand-color">
                                                                Login 
                                                            </a>
                                                            or
                                                             <a href="#" class="brand-color">
                                                                Register 
                                                            </a>
                                                            to trade
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                     <div class="col-6">
                                                         <h5>Sell ETH</h5>
                                                     </div>
                                                     <div class="col-6 text-right">
                                                         <i class="fas fa-wallet"></i>
                                                         - ETH
                                                     </div>
                                                 </div>
                                                 <div class="row mt10">
                                                    <div class="col-3">
                                                        <label for="buy-price">Price: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-price" id="buy-price" value="0.033864">
                                                        <span class="input-currency">BTC</span> 
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-3">
                                                        <label for="buy-amount">Amount: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-amount" id="buy-amount">
                                                        <span class="input-currency">ETH</span> 
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="offset-3 col-9">
                                                        <a href="#" class="btn-buy-sell">25%</a>
                                                        <a href="#" class="btn-buy-sell">50%</a>
                                                        <a href="#" class="btn-buy-sell">75%</a>
                                                        <a href="#" class="btn-buy-sell">100%</a>
                                                    </div>
                                                 </div>
                                                 <div class="row mt25">
                                                    <div class="col-3">
                                                       <label for="buy-total">Total: </label>
                                                   </div>
                                                   <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-total" id="buy-total">
                                                        <span class="input-currency">BTC</span>  
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-12">
                                                        <div class="col-12 btn-buy-login">
                                                             <a href="#" class="brand-color">
                                                                Login 
                                                            </a>
                                                            or
                                                             <a href="#" class="brand-color">
                                                                Register 
                                                            </a>
                                                            to trade
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="market" class="container tab-pane fade">
                                        <div class="row">
                                            <div class="col-6 buy-sell-left">
                                                <div class="row">
                                                     <div class="col-6">
                                                         <h5>Buy ETH</h5>
                                                     </div>
                                                     <div class="col-6 text-right">
                                                         <i class="fas fa-wallet"></i>
                                                         - BTC
                                                     </div>
                                                 </div>
                                                 <div class="row mt10">
                                                    <div class="col-3">
                                                        <label for="buy-price">Price: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" class="col-12" name="buy-price" id="buy-price" value="Market Price" disabled="disabled">
                                                    </div>
                                                </div>
                                                 <div class="row mt25">
                                                    <div class="col-3">
                                                        <label for="buy-amount">Amount: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-amount" id="buy-amount">
                                                        <span class="input-currency">ETH</span> 
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="offset-3 col-9">
                                                        <a href="#" class="btn-buy-sell">25%</a>
                                                        <a href="#" class="btn-buy-sell">50%</a>
                                                        <a href="#" class="btn-buy-sell">75%</a>
                                                        <a href="#" class="btn-buy-sell">100%</a>
                                                    </div>
                                                 </div>
                                                 <div class="row mt25">
                                                    <div class="col-12">
                                                        <div class="col-12 btn-buy-login">
                                                             <a href="#" class="brand-color">
                                                                Login 
                                                            </a>
                                                            or
                                                             <a href="#" class="brand-color">
                                                                Register 
                                                            </a>
                                                            to trade
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                     <div class="col-6">
                                                         <h5>Sell ETH</h5>
                                                     </div>
                                                     <div class="col-6 text-right">
                                                         <i class="fas fa-wallet"></i>
                                                         - ETH
                                                     </div>
                                                 </div>
                                                 <div class="row mt10">
                                                    <div class="col-3">
                                                        <label for="buy-price">Price: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="text" class="col-12" name="buy-price" id="buy-price" value="Market Price" disabled="disabled"> 
                                                    </div>
                                                </div>
                                                 <div class="row mt25">
                                                    <div class="col-3">
                                                        <label for="buy-amount">Amount: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-amount" id="buy-amount">
                                                        <span class="input-currency">ETH</span> 
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="offset-3 col-9">
                                                        <a href="#" class="btn-buy-sell">25%</a>
                                                        <a href="#" class="btn-buy-sell">50%</a>
                                                        <a href="#" class="btn-buy-sell">75%</a>
                                                        <a href="#" class="btn-buy-sell">100%</a>
                                                    </div>
                                                 </div>
                                                 <div class="row mt25">
                                                    <div class="col-12">
                                                        <div class="col-12 btn-buy-login">
                                                             <a href="#" class="brand-color">
                                                                Login 
                                                            </a>
                                                            or
                                                             <a href="#" class="brand-color">
                                                                Register 
                                                            </a>
                                                            to trade
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="stop-limit" class="container tab-pane fade">
                                        <div class="row">
                                            <div class="col-6 buy-sell-left">
                                                <div class="row">
                                                     <div class="col-6">
                                                         <h5>Buy ETH</h5>
                                                     </div>
                                                     <div class="col-6 text-right">
                                                         <i class="fas fa-wallet"></i>
                                                         - BTC
                                                     </div>
                                                 </div>
                                                 <div class="row mt10">
                                                    <div class="col-3">
                                                        <label for="buy-price">Stop: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-price" id="buy-price"> 
                                                        <span class="input-currency">BTC</span> 
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-3">
                                                        <label for="buy-price">Limit: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-price" id="buy-price"> 
                                                        <span class="input-currency">BTC</span> 
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-3">
                                                        <label for="buy-amount">Amount: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-amount" id="buy-amount">
                                                        <span class="input-currency">ETH</span> 
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="offset-3 col-9">
                                                        <a href="#" class="btn-buy-sell">25%</a>
                                                        <a href="#" class="btn-buy-sell">50%</a>
                                                        <a href="#" class="btn-buy-sell">75%</a>
                                                        <a href="#" class="btn-buy-sell">100%</a>
                                                    </div>
                                                 </div>
                                                 <div class="row mt25">
                                                    <div class="col-3">
                                                       <label for="buy-total">Total: </label>
                                                   </div>
                                                   <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-total" id="buy-total">
                                                        <span class="input-currency">BTC</span>  
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-12">
                                                        <div class="col-12 btn-buy-login">
                                                             <a href="#" class="brand-color">
                                                                Login 
                                                            </a>
                                                            or
                                                             <a href="#" class="brand-color">
                                                                Register 
                                                            </a>
                                                            to trade
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                     <div class="col-6">
                                                         <h5>Sell ETH</h5>
                                                     </div>
                                                     <div class="col-6 text-right">
                                                         <i class="fas fa-wallet"></i>
                                                         - ETH
                                                     </div>
                                                 </div>
                                                 <div class="row mt10">
                                                    <div class="col-3">
                                                        <label for="buy-price">Stop: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-price" id="buy-price">
                                                        <span class="input-currency">BTC</span> 
                                                    </div>
                                                </div>
                                                 <div class="row mt10">
                                                    <div class="col-3">
                                                        <label for="buy-price">Limit: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-price" id="buy-price">
                                                        <span class="input-currency">BTC</span> 
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-3">
                                                        <label for="buy-amount">Amount: </label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-amount" id="buy-amount">
                                                        <span class="input-currency">ETH</span> 
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="offset-3 col-9">
                                                        <a href="#" class="btn-buy-sell">25%</a>
                                                        <a href="#" class="btn-buy-sell">50%</a>
                                                        <a href="#" class="btn-buy-sell">75%</a>
                                                        <a href="#" class="btn-buy-sell">100%</a>
                                                    </div>
                                                 </div>
                                                 <div class="row mt25">
                                                    <div class="col-3">
                                                       <label for="buy-total">Total: </label>
                                                   </div>
                                                   <div class="col-9">
                                                        <input type="number" class="col-12" name="buy-total" id="buy-total">
                                                        <span class="input-currency">BTC</span>  
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-12">
                                                        <div class="col-12 btn-buy-login">
                                                             <a href="#" class="brand-color">
                                                                Login 
                                                            </a>
                                                            or
                                                             <a href="#" class="brand-color">
                                                                Register 
                                                            </a>
                                                            to trade
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row left-side">
                    <div class="col-12 right-content">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#favorite">
                                    Favorite
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#btc">
                                    BTC
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#eth">
                                    ETH
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#bnb">
                                    BNB
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#usdt">
                                    USDT
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content sub-tab">
                            <div id="favorite" class="container tab-pane fade">
                                <div class="row">
                                    <form class="search col-6" role="search">
                                        <div class="row">
                                            <i class="fa fa-search col-2" aria-hidden="true"></i>
                                            <input type="text" class="search-box col-10" placeholder=" Search.....">
                                        </div>
                                    </form>
                                    <ul class="nav nav-tabs col-6" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#favorite-change">
                                                <!-- <input type="radio" name="tablist" value="change"> -->change
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#favorite-volume">
                                                <!-- <input type="radio" name="tablist" value="volume"> -->volume
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content sub-tab">
                                    <div id="favorite-change" class="row tab-pane active">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market5 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }} </a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="favorite-volume" class="row tab-pane">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market6 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="btc" class="container tab-pane active">
                                <div class="row">
                                    <form class="search col-6" role="search">
                                        <div class="row">
                                            <i class="fa fa-search col-2" aria-hidden="true"></i>
                                            <input type="text" class="search-box col-10" placeholder=" Search.....">
                                        </div>
                                    </form>
                                    <ul class="nav nav-tabs col-6" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#btc-change">
                                                <!-- <input type="radio" name="tablist" value="change"> -->change
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#btc-volume">
                                                <!-- <input type="radio" name="tablist" value="volume"> -->volume
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content sub-tab">
                                    <div id="btc-change" class="row tab-pane active">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market7 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="btc-volume" class="row tab-pane">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market8 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                            
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="eth" class="container tab-pane fade">
                                <div class="row">
                                    <form class="search col-6" role="search">
                                        <div class="row">
                                            <i class="fa fa-search col-2" aria-hidden="true"></i>
                                            <input type="text" class="search-box col-10" placeholder=" Search.....">
                                        </div>
                                    </form>
                                    <ul class="nav nav-tabs col-6" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#eth-change">
                                                <!-- <input type="radio" name="tablist" value="change"> -->change
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#eth-volume">
                                                <!-- <input type="radio" name="tablist" value="volume"> -->volume
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content sub-tab">
                                    <div id="eth-change" class="row tab-pane active">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market9 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="eth-volume" class="row tab-pane">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market10 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="bnb" class="container tab-pane fade">
                                <div class="row">
                                    <form class="search col-6" role="search">
                                        <div class="row">
                                            <i class="fa fa-search col-2" aria-hidden="true"></i>
                                            <input type="text" class="search-box col-10" placeholder=" Search.....">
                                        </div>
                                    </form>
                                    <ul class="nav nav-tabs col-6" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#bnb-change">
                                                <!-- <input type="radio" name="tablist" value="change"> -->change
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#bnb-volume">
                                                <!-- <input type="radio" name="tablist" value="volume"> -->volume
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content sub-tab">
                                    <div id="bnb-change" class="row tab-pane active">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market11 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="bnb-volume" class="row tab-pane">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market12 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="usdt" class="container tab-pane fade">
                                <div class="row">
                                    <form class="search col-6" role="search">
                                        <div class="row">
                                            <i class="fa fa-search col-2" aria-hidden="true"></i>
                                            <input type="text" class="search-box col-10" placeholder=" Search.....">
                                        </div>
                                    </form>
                                    <ul class="nav nav-tabs col-6" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#usdt-change">
                                                <!-- <input type="radio" name="tablist" value="change"> -->change
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#usdt-volume">
                                                <!-- <input type="radio" name="tablist" value="volume"> -->volume
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content sub-tab">
                                    <div id="usdt-change" class="row tab-pane active">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market13 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                             
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="usdt-volume" class="row tab-pane">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Pair</th>
                                                    <th>Price</th>
                                                    <th>Change</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($market14 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['pair']) ) }}">{{ $currency['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['Price']) ) }}">{{ $currency['Price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                            </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4>Trade History</h4>
                </div>
                <div class="row left-side">
                    <div class="col-12 right-content">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    ////
                                </tr>
                            </thead>
                            <tbody>
                                        @foreach ($market15 as  $currency )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['change']) ) }}">{{ $currency['change']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['price']) ) }}">{{ $currency['price']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$currency['time']) ) }}">{{ $currency['time']  }}</a></td>
                                            </tr>
                                        @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <h4>Recent Market Activity</h4>
                </div>
                <div class="row left-side">
                    <div class="col-12 right-content">
                        <table class="table table-hover table-responsive">
                            <tbody>
                                
                            @foreach ($recent_market as  $trade )
                            <tr>
                                    <td>
                                        <div><a href="{{ route('basic',str_replace('/','_',$trade['pair']) ) }}">{{ $trade['pair']  }}</a></div>
                                        <div><a href="{{ route('basic',str_replace('/','_',$trade['time']) ) }}">{{ $trade['time']  }}</a></div>
                                    </td>
                                    <td>
                                        <div><a href="{{ route('basic',str_replace('/','_',$trade['status']) ) }}">{{ $trade['status']  }}</a></div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-info">
                                            <i class="fas fa-arrow-up"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row open-order">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <h6>Open Orders</h6>
                    </div>
                    <div class="col-6 text-right">
                        <input type="checkbox">
                        <span>Hide other pairs</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Pair</th>
                                <th>Type</th>
                                <th>Side</th>
                                <th>Price</th>
                                <th>Amount</th>
                                <th>Filled%</th>
                                <th>Total</th>
                                <th>Trigger Conditions</th>
                                <th>
                                    <select name="cancel" id="cancel">
                                        <option value="all">Cancel All</option>
                                        <option value="limit order">Limit Order</option>
                                        <option value="stop limit order">Stop Limit Order</option>
                                    </select>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($open_order as  $order )
                                <tr>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['date']) ) }}">{{ $order['date']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['pair']) ) }}">{{ $order['pair']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['type']) ) }}">{{ $order['type']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['side']) ) }}">{{ $order['side']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['price']) ) }}">{{ $order['price']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['amount']) ) }}">{{ $order['amount']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['filled']) ) }}">{{ $order['filled']  }} </a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['total']) ) }}">{{ $order['total']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['trigger_conditions']) ) }}">{{ $order['trigger_conditions']  }}</a></td>
                                    <td>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row order-history">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <h6>My 24h Order History</h6>
                    </div>
                    <div class="col-6 text-right">
                        <input type="checkbox">
                        <span>Hide other pairs</span>
                        <a href="#" class="more">More</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover table-responsive">
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
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($order_history as  $order )
                                <tr>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['date']) ) }}">{{ $order['date']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['pair']) ) }}">{{ $order['pair']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['type']) ) }}">{{ $order['type']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['side']) ) }}">{{ $order['side']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['average']) ) }}">{{ $order['average']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['price']) ) }}">{{ $order['price']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['filled']) ) }}">{{ $order['filled']  }} </a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['amount']) ) }}">{{ $order['amount']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['total']) ) }}">{{ $order['total']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['trigger_conditions']) ) }}">{{ $order['trigger_conditions']  }}</a></td>
                                    <td><a href="{{ route('basic',str_replace('/','_',$order['status']) ) }}">{{ $order['status']  }}</a></td>
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