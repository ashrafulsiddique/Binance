@extends('layouts.app')

@section('content')
    <div id="web">
        <div class="banner col-12">
            <div class="container text-center">
                <div class="col-12">
                    <h2 class="brand-color">Binance - Exchange the World</h2>
                </div>
                <div class="col-12">
                    <div class="links">
                        <a href="{{ route('register') }}">Create an Account&nbsp;&nbsp;</a>
                        <span>|</span> &nbsp;&nbsp;Already Registered? &nbsp;&nbsp;
                        <a href="{{ route('login') }}">Log In</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="#"><img class="img-fluid" src="{{ URL::asset('images/trust-wallet.png') }}" alt=""></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img class="img-fluid" src="{{ URL::asset('images/binance-angels.png') }}" alt=""></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img class="img-fluid" src="{{ URL::asset('images/trust-wallet.png') }}" alt=""></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img class="img-fluid" src="{{ URL::asset('images/windows.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
         </div>
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
         <div class="summary col-12">
            <div class="container">
                <div class="row">
                    <div class="twenty-percent">
                        <a href="">
                            <div class="twenty-percent-content">
                                <div class="row">
                                    <div class="col-6">
                                        <strong class="currency"><a href="{{ route('basic',str_replace('/','_',$local['BNB/BTC']) ) }}">BNB/BTC</a> </strong>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="amount-percent">{{ $bnb_summary['percent']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong class=""><span class="">{{ $bnb_summary['currency']  }} </span></strong>
                                        <span> {{ $bnb_summary['to_currency']  }}</a></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">Volume: {{ $bnb_summary['volume']  }} BTC </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="twenty-percent">
                        <a href="">
                            <div class="twenty-percent-content">
                                <div class="row">
                                    <div class="col-6">
                                        <strong class="currency"><a href="{{ route('basic',str_replace('/','_',$local2['EOS/BTC']) ) }}">EOS/BTC</a></strong>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="amount-percent">{{ $eos_summary['percent']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong class=""><span class="">{{ $eos_summary['currency']  }} </span></strong>
                                        <span> {{ $eos_summary['to_currency']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        Volume: {{ $eos_summary['volume']  }} BTC
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="twenty-percent">
                        <a href="">
                            <div class="twenty-percent-content">
                                <div class="row">
                                    <div class="col-6">
                                        <strong class="currency"><a href="{{ route('basic',str_replace('/','_',$local3['XLM/BTC']) ) }}">XLM/BTC</a></strong>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="amount-percent">{{ $xlm_summary['percent']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong class=""><span class="">{{ $xlm_summary['currency']  }} </span></strong>
                                        <span> {{ $xlm_summary['to_currency']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                       Volume: {{ $xlm_summary['volume']  }} BTC
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="twenty-percent">
                        <a href="">
                            <div class="twenty-percent-content">
                                <div class="row">
                                    <div class="col-6">
                                        <strong class="currency"><a href="{{ route('basic',str_replace('/','_',$local4['MFT/BTC']) ) }}">MFT/BTC</a></strong>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="amount-percent"> {{ $mft_summary['percent']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong class=""><span class=""> {{ $mft_summary['currency']  }} </span></strong>
                                        <span>  {{ $mft_summary['to_currency']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                     Volume: {{ $mft_summary['volume']  }} BTC
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="twenty-percent">
                        <a href="">
                            <div class="twenty-percent-content">
                                <div class="row">
                                    <div class="col-6">
                                        <strong class="currency"><a href="{{ route('basic',str_replace('/','_',$local5['NANO/BTC']) ) }}">NANO/BTC</a></strong>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="amount-percent"> {{ $nano_summary['percent']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <strong class=""><span class=""> {{ $nano_summary['currency']  }}</span></strong>
                                        <span> {{ $nano_summary['to_currency']  }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                   Volume: {{ $nano_summary['volume']  }} BTC
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#favorites">Favorites</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#bnb">BNB Markets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#btc">BTC Markets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#etc">ETC Markets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#usdt">USDT Markets</a>
                            </li>
                        </ul>

                          <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="favorites" class="container tab-pane active"><br>
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Pair</th>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>24h Change</th>
                                            <th>24h High</th>
                                            <th>24h Low</th>
                                            <th>24h Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($favorites as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['pair']) ) }}">{{ $value['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['coin']) ) }}">{{ $value['coin'] }}</a></td>
                                                <td>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_currency']) ) }}">{{ $value['last_price_currency']  }}</a></span>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_to_currency']) ) }}">/ {{ $value['last_price_to_currency']  }}</a></span>
                                                </td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['change']) ) }}">{{ $value['change'] }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['high']) ) }}">{{ $value['high']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['low']) ) }}">{{ $value['low']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['volume']) ) }}">{{ $value['volume']  }}</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="bnb" class="container tab-pane fade"><br>
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Pair</th>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>24h Change</th>
                                            <th>24h High</th>
                                            <th>24h Low</th>
                                            <th>24h Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bnb as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['pair']) ) }}">{{ $value['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['coin']) ) }}">{{ $value['coin'] }}</a></td>
                                                <td>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_currency']) ) }}">{{ $value['last_price_currency']  }}</a></span>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_to_currency']) ) }}">/ {{ $value['last_price_to_currency']  }}</a></span>
                                                </td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['change']) ) }}">{{ $value['change'] }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['high']) ) }}">{{ $value['high']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['low']) ) }}">{{ $value['low']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['volume']) ) }}">{{ $value['volume']  }}</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="btc" class="container tab-pane fade"><br>
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Pair</th>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>24h Change</th>
                                            <th>24h High</th>
                                            <th>24h Low</th>
                                            <th>24h Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($btc as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['pair']) ) }}">{{ $value['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['coin']) ) }}">{{ $value['coin'] }}</a></td>
                                                <td>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_currency']) ) }}">{{ $value['last_price_currency']  }}</a></span>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_to_currency']) ) }}">/ {{ $value['last_price_to_currency']  }}</a></span>
                                                </td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['change']) ) }}">{{ $value['change'] }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['high']) ) }}">{{ $value['high']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['low']) ) }}">{{ $value['low']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['volume']) ) }}">{{ $value['volume']  }}</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="etc" class="container tab-pane fade"><br>
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Pair</th>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>24h Change</th>
                                            <th>24h High</th>
                                            <th>24h Low</th>
                                            <th>24h Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($etc as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['pair']) ) }}">{{ $value['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['coin']) ) }}">{{ $value['coin'] }}</a></td>
                                                <td>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_currency']) ) }}">{{ $value['last_price_currency']  }}</a></span>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_to_currency']) ) }}">/ {{ $value['last_price_to_currency']  }}</a></span>
                                                </td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['change']) ) }}">{{ $value['change'] }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['high']) ) }}">{{ $value['high']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['low']) ) }}">{{ $value['low']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['volume']) ) }}">{{ $value['volume']  }}</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="usdt" class="container tab-pane fade"><br>
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Pair</th>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>24h Change</th>
                                            <th>24h High</th>
                                            <th>24h Low</th>
                                            <th>24h Volume</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usdt as  $value )
                                            <tr>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['pair']) ) }}">{{ $value['pair']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['coin']) ) }}">{{ $value['coin'] }}</a></td>
                                                <td>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_currency']) ) }}">{{ $value['last_price_currency']  }}</a></span>
                                                    <span><a href="{{ route('basic',str_replace('/','_',$value['last_price_to_currency']) ) }}">/ {{ $value['last_price_to_currency']  }}</a></span>
                                                </td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['change']) ) }}">{{ $value['change'] }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['high']) ) }}">{{ $value['high']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['low']) ) }}">{{ $value['low']  }}</a></td>
                                                <td><a href="{{ route('basic',str_replace('/','_',$value['volume']) ) }}">{{ $value['volume']  }}</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <form class="search" role="search">
                            <div class="row">
                                <i class="fa fa-search col-2" aria-hidden="true"></i>
                                <input type="text" class="search-box col-10" placeholder=" Search.....">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container download text-right">
            <div class="offset-sm-8 col-sm-4">
                <div class="row">
                    <div class="col-8">
                        <img class="img-fluid" src="{{ URL::asset('images/exchange.png') }}" alt="">
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-download">Download</a>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection