@extends('layouts.app')

@section('content')

        <style>
            .verify {
                width: 100%;
                text-align: center;
                padding: 0 0.875rem 1.4rem 0.875rem;
                background: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }

            .verify-title {
                font-size: 1rem;
                color: #2f2f2f;
                margin: 2rem 0;
                position: relative;
            }

            .verify-title:after {
                display: inline-block;
                content: " ";
                width: 100%;

                background: #f1f1f1;
                position: absolute;
                left: 0;
                top: 50%;
            }

            .verify-title span {
                position: relative;
                z-index: 99;
            }

            .verify .Validform_checktip {
                height: 20px;
                line-height: 20px;
            }

            .verify .ipt {
                width: 17rem;
                height: 2.25rem;
                line-height: 2.25rem;
                padding: 0 10px;
                border: 1px solid #d3d3d3;
            }

            .verify .ipt[readonly] {
                background: #f3f3f3;
                color: #999;
            }

            .verify .label {
                font-size: 12px;
                color: #666;
                line-height: 1.8;
            }

            .verify .btns {
                margin-bottom: 14px;
                width: 100%;
            }

            .verify .btn {
                border-width: 0;
                padding-left: 0;
                color: #fff;
                font-size: 0.7rem;
                background-color: #92a0ad;
                text-align: center;
                border-radius: 0.075rem;
                width: 100%;
                border: 1px solid #d3d3d3;
                height: 2.25rem;
                line-height: 2.25rem;
            }

            .verify .btns .btn {
                padding: 0;
                width: 8.5rem;
                box-sizing: border-box;
                height: 2.25rem;
                line-height: 2.25rem;
                text-align: center;
                margin-left: -1px;
                vertical-align: middle;
                color: #666;
                display: inline-block;
            }

            .verify .btn.btn-grey {
                background: #f5f5f5;
                width: 6rem;
                padding: 0;
                display: inline-block;
                float: right;
                color: #999
            }

            .verify .btn.btn-grey.btn-disabled {
                border-color: #d4d4d4 !important;
                background: #f5f5f5 !important;
                color: #333;
            }

            .verify .btns .btn.cur {
                background: #e8b342 !important;
                color: #fff;
            }

            .btnYellow {
                background-color: #ddac37 !important;
            }

            .register {
                text-align: center;
                font-size: 0.65rem;
                margin-top: 0.8rem;
            }

            .register .regRedirect {
                color: #ddac37;
            }

            .bgfff {
                background-color: #fff !important
            }

            .bankcon {
                position: fixed;
                bottom: 0;
                transform: translate(0, 150%);
                -webkit-transform: translate(0, 150%);
                -ms-transform: translate(0, 150%);
                -moz-transform: translate(0, 150%);
                -o-transform: translate(0, 150%);
                -webkit-transition: all 0.5s ease-in-out;
            }
        </style>
        <link rel="stylesheet" href="./css/login.css">
        <div class="content ng-scope" style="padding-bottom: 2.5rem;" ng-controller="modifyPwdCtr">
            <form class="findpassword-form ng-pristine ng-valid"  method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="login">
                    <div class="loginInner">
                        <div class="loginTitle ng-binding">Sign up</div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus type="text" placeholder="Name" class="ng-pristine ng-valid" >
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <p class="f-nomargin Validform_checktip"></p>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="text" name="email" value="{{ old('email') }}" required  placeholder="Email" class="ng-pristine ng-valid">
                            <p class="f-nomargin Validform_checktip"></p>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" placeholder="Password" class="ng-pristine ng-valid" required>
                            <p class="f-nomargin Validform_checktip"></p>
                        </div>
                        <div>
                            <input id="password-confirm" type="password" name="password_confirmation"  placeholder="Confirm Password" class="ng-pristine ng-valid" required>
                            <p class="f-nomargin Validform_checktip"></p>
                        </div>
                        <div>
                            <label><input type="checkbox" class="checkbox"> I certify that I am 18 years of age or older, and I agree to the User Agreement and Privacy Policy</label>
                        </div>
                        <div class="loginBtn clearfix" style="margin-top: 1.5rem">
                            <div class="loginBtn clearfix" style="margin-top: 1.5rem">
                                <input type="submit" value="Create Wallet" class="btnYellow center-sub">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="login-footer">
                <footer>
                    <div class="text-center">
                        Already have an account? <a href="{{ route('login') }}">Sign In</a>
                    </div>
                    <div class="copyright text-center">
                        ©2017 WCX WALLET
                    </div>
                </footer>
            </div>

    <script type="text/javascript" src="./js/Validform_v5.3.2_min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/vl_style.css">
    <script type="text/javascript" src="./js/changePassward.js"></script>
</div>
@endsection