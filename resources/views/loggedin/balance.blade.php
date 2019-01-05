@extends('layouts.app')

@section('content')
    <div id="balance">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Balances</h3>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                 <form class="search" role="search">
                                    <div class="row">
                                        <i class="fa fa-search col-2" aria-hidden="true"></i>
                                        <input type="text" class="search-box col-10" placeholder=" Search.....">
                                    </div>
                                </form>
                            </div>
                            <div class="col-8">
                                <div class="btn btn-light bordered">Small Balance</div>
                                <span class="bordered">
                                    <input type="checkbox"> Hide
                                </span>
                                <a href="{{ route('convert2bnb') }}" class="bordered">Convert to BNB</a>
                            </div>
                        </div>
                    </div>
                    <div class="offset-2 col-4 text-right">
                        <h6>Estimated Value： <span>0.00000000</span> BTC / <span>$0.00</span></h6>
                        <h6><span>24h</span> Withdrawal Limit：<span>2</span>BTC In Use：<span>0</span>BTC</h6>
                    </div>
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Coin</th>
                                    <th>Name</th>
                                    <th>Total Balance</th>
                                    <th>Available Balance</th>
                                    <th>In Order</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($bal_history as  $open )
                                        <tr>
                                          
                                            <td><a href="{{ route('basic',str_replace('/','_',$open['coin']) ) }}">{{ $open['coin']  }}</a></td>
                                            <td>{{ $open['name']  }}</a></td>
                                            <td><a href="{{ route('balance',str_replace('/','_',$open['total_balance']) ) }}">{{ $open['total_balance']  }}</a></td>
                                            <td><a href="{{ route('balance',str_replace('/','_',$open['available_balance']) ) }}">{{ $open['available_balance']  }}</a></td>
                                            <td><a href="{{ route('balance',str_replace('/','_',$open['in_order']) ) }}">{{ $open['in_order']  }}</a></td>
                                          
                                            

                                            <td>
                                                <a href="{{ route('deposits') }}" class="bordered">Deposit</a>
                                                <a href="{{ route('withdrawals') }}" class="bordered">Withdraw</a>
                                                <li class="nav-item dropdown bordered">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTrade" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Trade
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTrade">
                                                        <a class="dropdown-item" href="{{ route('basic','ATD_BNB') }}">ATD/BNB</a>
                                                        <a class="dropdown-item" href="{{ route('basic','ATD_BTC') }}">ATD/BTC</a>
                                                        <a class="dropdown-item" href="{{ route('basic','ATD_ETH') }}">ATD/ETH</a>
                                                        <a class="dropdown-item" href="{{ route('basic','ATD_USDT') }}">ATD/USDT</a>
                                                
                                                    </div>
                                                </li>
                                            </td>
                                           
                                        </tr>
                                    @endforeach    


                                   
                                
                                <!-- <tr>
                                    <td>ATD</td>
                                    <td>Atidum</td>
                                    <td>0.00000</td>
                                    <td>0.00000</td>
                                    <td>0.00000</td> 
                                    <td>
                                        <a href="{{ route('deposits') }}" class="bordered">Deposit</a>
                                        <a href="{{ route('withdrawals') }}" class="bordered">Withdraw</a>
                                        <li class="nav-item dropdown bordered">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTrade" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Trade
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownTrade">
                                                <a class="dropdown-item" href="{{ route('basic','BNT_BNB') }}">BNT/BNB</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_BTC') }}">BNT/BTC</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_ETH') }}">BNT/ETH</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_USDT') }}">BNT/USDT</a>
                                            </div>
                                        </li>
                                    </td>
                                </tr>
                                <tr>
                                   <td>BNT</td>
                                    <td>Bancor</td>
                                    <td>0.00000</td>
                                    <td>0.00000</td>
                                    <td>0.00000</td>
                                    <td>
                                        <a href="{{ route('deposits') }}" class="bordered">Deposit</a>
                                        <a href="{{ route('withdrawals') }}" class="bordered">Withdraw</a>
                                        <li class="nav-item dropdown bordered">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTrade" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Trade
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownTrade">
                                                <a class="dropdown-item" href="{{ route('basic','BNT_BNB') }}">BNT/BNB</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_BTC') }}">BNT/BTC</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_ETH') }}">BNT/ETH</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_USDT') }}">BNT/USDT</a>
                                            </div>
                                        </li>
                                    </td>
                                </tr>
                                <tr>
                                   <td>ELF</td>
                                    <td>aelf</td>
                                    <td>0.00000</td>
                                    <td>0.00000</td>
                                    <td>0.00000</td> 
                                    <td>
                                        <a href="{{ route('deposits') }}" class="bordered">Deposit</a>
                                        <a href="{{ route('withdrawals') }}" class="bordered">Withdraw</a>
                                        <span class="nav-item dropdown bordered">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTrade" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Trade
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownTrade">
                                                <a class="dropdown-item" href="{{ route('basic','BNT_BNB') }}">BNT/BNB</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_BTC') }}">BNT/BTC</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_ETH') }}">BNT/ETH</a>
                                                <a class="dropdown-item" href="{{ route('basic','BNT_USDT') }}">BNT/USDT</a>
                                            </div>
                                        </span>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection