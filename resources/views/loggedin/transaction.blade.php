@extends('layouts.app')

@section('content')
    <div id="transaction">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>History</h3>
                    </div>
                    <div class="col-12" style="width:100%">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#deposit">
                                    Deposit
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#withdraw">
                                    Withdraw
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="deposit" class="container tab-pane active">
                                <div class="row">
                                    <div class="offset-8 col-4 text-right hide-option">
                                        <a href="#">Export Complete Deposit History</a>
                                    </div>
                                    <div class="col-12">
                                        <table class="table table-hover table-responsive" style="position: relative;margin-top:75px;top: -100px;">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Coin</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Informatiom</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <div class="text-center" style="position: relative;top: 100px;">
                                                @foreach ($Dep_history as  $open )
                                        <tr>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['status']) ) }}">{{ $open['status']  }}</a></td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['coin']) ) }}">{{ $open['coin']  }}</a></td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['amount']) ) }}">{{ $open['amount']  }}</a></td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['date']) ) }}">{{ $open['date']  }}</a></td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['information']) ) }}">{{ $open['information']  }}</a></td>
                                            
                                           
                                        </tr>
                                    @endforeach 
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="withdraw" class="container tab-pane">
                                <div class="row">
                                    <div class="offset-8 col-4 text-right hide-option">
                                        <a href="#">Export Complete Withdrawal History</a>
                                    </div>
                                    <div class="col-12">
                                        <table class="table table-hover table-responsive" style="position: relative;margin-top:75px;top: -100px;">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Coin</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Informatiom</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <div class="text-center" style="position: relative;top: 100px;">
                                    @foreach ($wit_history as  $open )
                                        <tr>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['status']) ) }}">{{ $open['status']  }}</td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['coin']) ) }}">{{ $open['coin']  }}</td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['amount']) ) }}">{{ $open['amount']  }}</td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['date']) ) }}">{{ $open['date']  }}</td>
                                            <td><a href="{{ route('transaction',str_replace('/','_',$open['information']) ) }}">{{ $open['information']  }}</td>
                                            
                                           
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
                </div>
            </div>
        </div>
     </div>
@endsection