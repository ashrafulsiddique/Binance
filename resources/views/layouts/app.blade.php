<html lang="en">
    <head>
        <title>Binance</title>
            
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <meta name="description" content=""> 
        <meta name="keywords" content=""> 
        
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/css/bootstrap-select.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/mediaquries.css') }}">
        <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/labsHome.css') }}"> -->
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="https://www.jqueryscript.net/demo/Bootstrap-4-Dropdown-Select-Plugin-jQuery/dist/js/bootstrap-select.js"></script>
        <script src="{{ URL::asset('js/custom.js') }}"></script>
        <!-- <script src="{{ URL::asset('js/custom.js') }}"></script> -->

       
    </head>
    <body>
        <header class="col-12">
            <div class="row header-content header-web">
                <div class="row col-12">
                    <nav class="navbar navbar-expand-md navbar-light col-12">
                        <a class="navbar-brand logo" href="{{ route('homepage') }}"><img src="{{ URL::asset('images/logo-en.jpg') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse row" id="collapsibleNavbar">


                        <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fab fa-buromobelexperte"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('basic','BTC_USDT') }}">Exchange</a>
                                        <a class="dropdown-item" href="{{ route('lab') }}">Labs</a>
                                        <a class="dropdown-item" href="#">LaunchPad</a>
                                        <a class="dropdown-item" href="#">Info</a>
                                        <a class="dropdown-item" href="#">Acedamy</a>
                                    </div>
                                </li>         
                            </ul>   

                             <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownExchange" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Exchange
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownExchange">
                                        <a class="dropdown-item" href="{{ route('basic','BTC_USDT') }}">Basic</a>
                                        <a class="dropdown-item" href="{{ route('advance') }}">Advance</a>
                                    </div>
                                </li>    
                            </ul>                         

                            @auth
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFunds" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Funds
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownFunds">
                                        <a class="dropdown-item" href="{{ route('balance') }}">Balances</a>
                                        <a class="dropdown-item" href="{{ route('deposits') }}">Deposits</a>
                                        <a class="dropdown-item" href="{{ route('withdrawals') }}">Withdrawals</a>
                                        <a class="dropdown-item" href="{{ route('transaction') }}">Transaction History</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOders" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Orders
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownOders">
                                        <a class="dropdown-item" href="{{ route('open-order') }}">Open Order</a>
                                        <a class="dropdown-item" href="{{ route('order-history') }}">Order History</a>
                                        <a class="dropdown-item" href="{{ route('trade') }}">Trade History</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Join</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">News</a>
                                </li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-user" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item" href="{{ route('myaccount') }}">Account</a>
                                        <div class="dropdown-item">
                                            <h6>Estimated Value</h6>
                                            <strong>0.00000000 BTC</strong>
                                        </div>
                                   
                                        <form method="POST" action="{{ route('logout') }}">
                                    {{ csrf_field() }}
                                    <input type="submit" class="dropdown-item" value="Logout" />
                                    </form>
                                    </div>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Language</a>
                                </li>           
                            </ul>
                            @endauth
                            @guest
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Join</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">News</a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a> 
                                </li>
                                <span class="or">or</span>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>    
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Language</a>
                                </li>           
                            </ul>
                            @endguest
                        </div>  
                    </nav>
                </div>
            </div>
        </header>          
        <div class="wrapper">
            @yield('content')
            <div class="push"></div>
        </div>

        <div class="footer">
            <div class="footerTWrap container">
                <div class="footerT row">
                    <div class="footerTL col-sm-8">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#" target="_blank">Fees</a></li>
                            <li><a href="#" >Contact</a></li>
                            <li><a href="#" target="_blank">API</a></li>
                            <li><a href="#">Apply to List</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </div>
                    <div class="footerTR col-sm-4 text-right">
                        <ul class="">
                            <li title="Facebook"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li title="Twitter"><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li title="Google Plus"><a href="https://www.plus.facebook.com" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                            <li title="Linkedin"><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li title="Pinterest"><a href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                            <li title="Reddit"><a href="https://www.reddit.com" target="_blank"><i class="fab fa-reddit"></i></a></li>
                            <li title="Instagram"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerB">
            <div class="container">
                <span class="footerBL">
                    © 2017 - 2018 Binance.com. All rights reserved
                </span>
           </div>
        </div>
    </body>
    <script src="./js/jQuery1.10.2.js"></script>
    <script type="text/javascript">
    var opendec=function(id){
        $(id).css('display','block');
        $(id).prev().children().css("display","none");
        $(id).parent().parent().css("z-index","9999");
        $(id).parent().removeClass('briefIntroduction_a');
        $(id).parent().addClass('addTo_2');

        // 
        $(id).parent().parent().siblings().children("div").children(".briefIntroduction_1a").css('display','none');
        $(id).parent().parent().siblings().children("div").children(".briefIntroduction").children().css("display","block");
        $(id).parent().parent().siblings().css("z-index","0");
        $(id).parent().parent().siblings().children("div").addClass('briefIntroduction_a');
        $(id).parent().parent().siblings().children("div").removeClass('addTo_2');
        
    }


    var guanbi=function(id){
        $(id).css('display','none');
        $(id).prev().children().css("display","block");
        $(id).parent().parent().css("z-index","0");
        $(id).parent().addClass('briefIntroduction_a');
        $(id).parent().removeClass('addTo_2');
    }


    var opendecphone=function(id){
        $(id).css('display','block');
        $(id).prev().children().children().css("display","none");
      
    }


    var guanbiphone=function(id){
        $(id).css('display','none');
        $(id).prev().children().children().css("display","block");

    }

    var opendecpad=function(id){
        $(id).parent().parent().find('.direction').css("display","block"); 
        $(id).parent().parent().find('.briefIntroduction_1a').css("display","none"); 
        $(id).css('display','block');
        $(id).prev().children().children().css("display","none");


    }


    var guanbipad=function(id){
        $(id).css('display','none');
        $(id).prev().children().children().css("display","block");

    }
    

    </script>
</html>