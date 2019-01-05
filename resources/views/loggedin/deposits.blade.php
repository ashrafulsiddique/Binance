@extends('layouts.app')

@section('content')
    <div id="balance">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Deposits</h4>
                    </div>
                    <div class="col-6">
                        <div class="box">
                            <select class="selectpicker form-control fill_selectbtn_in own_selectbox" title="Select Coin/Token to deposit" id="deposit" name="deposit" data-live-search="true">
                                <option>ADA - Cardano</option>
                                <option>ATD - Atidum</option>
                                <option>BNT - Bancor</option>
                                <option>ELF - aelf</option>
                                <option>EOS - EOS</option>
                                <option>ETF - ETF</option>
                            </select>
                            <div class="hidden-part">
                                <div class="row">
                                    <div class="col-4">Total balance</div>
                                    <div class="col-4"><span>0.00000000</span> BNB</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">In order</div>
                                    <div class="col-4"><span>0.00000000</span> BNB</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Available balance</div>
                                    <div class="col-4"><span>0.00000000</span> BNB</div>
                                    <div class="col-4 text-right"><a href="#">What is BNB?</a></div>
                                </div>
                                <div class="row inner-box">
                                    <h6 class="brand-color">Important</h6>
                                    <p  class="brand-color" style="margin-left: 15px;">Send only BNB to this deposit address. Sending any other coin or token to this address may result in the loss of your deposit.</p>
                                    <div class="inner-box">0x09eefedfa3b94af74665c2ccb712bf6941c213d4</div>
                                    <div class="text-right col-12">
                                        <button type="button" class="btn btn-download" data-toggle="modal" data-target="#myModal">
                                          Show QR Code
                                        </button>

                                        <!-- The Modal -->
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Modal body..
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-download">Copy Address</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6>Please note</h6>
                                    <p>Coins will be deposited immediately after 30 network confirmations</p>
                                    <p>After making a deposit, you can track its progress on the <a href="{{ route('transaction') }}">history</a> page.</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Go to Trade</h5>
                                        <a href="basic">BNB/BTC ></a>
                                        <a href="basic">BNB/ETH ></a>
                                        <a href="basic">BNB/USDT ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box box-with-header">
                            <div class="row" style="background: #fff;margin: 0;padding-top: 10px;">
                                <div class="col-4">
                                    <h6>History</h6>
                                </div>
                                <div class="col-8 text-right">
                                    <ul class="inline">
                                        <li><a href="#">Deposit did not arrive</a></li>
                                        <li><a href="{{ route('transaction') }}">View All</a></li>
                                    </ul>
                                </div>
                            </div>
                                <div class="col-12 text-center" style="padding: 40px;">
                                    You have no deposit history.
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection