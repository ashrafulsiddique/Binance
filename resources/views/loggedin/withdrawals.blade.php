@extends('layouts.app')

@section('content')
    <div id="balance">
        <div class="details col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Withdrawals</h4>
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
                                    <p  class="brand-color" style="margin-left: 15px;">Minimum withdrawal:4 ADA</p>
                                    <p  class="brand-color" style="margin-left: 15px;">Do not withdraw directly to a crowdfund or ICO address, as your account will not be credited with tokens from such sales.</p>
                                    <form action="" method="">
                                        <div class="row">
                                            <label for="withdraw-address"><span>ADA</span> Withdrawal Address</label>
                                            <input type="text" class="col-12">
                                            <h6 class="col-12">Amount</h6>
                                            <p class="col-12">24h Withdrawal Limit: 0 / 2 BTC</p>
                                            <div class="row">
                                                <div class="col-10">
                                                    <input type="number" class="col-12" name="withdraw-amount" id="withdraw-amount">
                                                    <span class="input-currency" style="left: 160px;">Available <span>0.000000</span></span> 
                                                </div>
                                                <div class="col-2 btn-currency">
                                                    <span>ADA</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">  
                                            <div class="col-6" style="white-space: nowrap;">
                                                <span>Transaction Fee:</span> <span>0.00000000</span> 
                                            </div>
                                            <div class="col-6 text-right">
                                                <span>You Will Get:</span> <span>0.00000000</span>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn btn-brand col-12">Submit</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <h6>Please note</h6>
                                    <p>Once you have submitted your withdrawal request, we will send a confirmation email. Please then click on the confirmation link in your email.</p>
                                    <p>After making a withdrawal, you can track its progress on the <a href="{{ route('transaction') }}">history</a> page.</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Go to Trade</h5>
                                        <a href="basic">BNB/BNB ></a>
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
                                        <li><a href="#">Did not receive email</a></li>
                                        <li><a href="{{ route('transaction') }}">View All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 text-center" style="padding: 40px;">
                                You have no withdraw history.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection