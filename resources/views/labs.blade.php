@extends('layouts.app')

@section('content')
    <div id="web">
  
            <div class="banner col-12" id="labs_1">
                <div class="container text-center">
                    <img class="logoLabs" src="{{ URL::asset('images/logo_labs.png') }}">
                    <p class="container1a">Binance Labs is a social impact fund and an initiative to <span style="color: aliceblue;">incubate, invest, and empower</span>
                        blockchain and cryptocurrency entrepreneurs, projects, and communities.
                    </p>
                    <p class="container1b">
                        Our mission is to solve the problems that matter most to the ecosystem and
                        change the world for the better.
                    </p>
                    <!--Apply for funding -->
                    <a href="#" target="_blank" class="btn btn-brand" id="ApplyForFunding">Apply for funding</a>
                </div>
             </div>
  
             <div class="col-12 section" id="labs_2">
                    <div class="container container2">
                    	<div class="row">
	                        <div class="col-sm-6 container2a">
	                            <h4 class="container2Ap">What we do:</h4>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Incubate entrepreneurs and projects</p>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Make direct investments</p>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Collaborate with other industry partners and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; participate as LP</p>
	        
	        
	                            <h4 class="container2Ap" style="margin-top: 26px;">We support entrepreneurs in:</h4>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Funding</p>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Go-to-market strategy & BD</p>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Token Models & Distributions</p>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Technical Review</p>
	                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Talent Recruiting</p>
	                        </div>
	                        <div class="col-sm-6">
		                        <img class="container2b" src="{{ URL::asset('images/labs@0.5x.png') }}">
		                    </div>
		                </div>
                    </div>
                </div>
                <div class="col-12 section" id="labs_3">
                    <div class="container container3">
                        <h3 class="container3a team-heading">Our Team</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="headPortrait img-fluid" src="{{ URL::asset('images/ella.png') }}">
                                <div class="briefIntroduction_a">
                                    <h5>Ella Zhang</h5>
                                    <p id="pBtn1" class="briefIntroduction" >Head of Binance Labs<img class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="ellaZhang" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Ella has over 14 years of interdisciplinary experience in venture capital and frontier
                                            technologies. She was the youngest investment director of KPCB, one of the most prominent
                                            VCs on Sand Hill Road.
                                            She was an early investor of Rong360 (NYSE: JT), Ximalaya FM, LiMei
                                            Technology (838556), Asia Innovation Group (launched Gifto), Miaozhen Technology and
                                            Meican. Prior to KPCB, Ella worked for Google, Tencent and UTStarcom in sales,
                                            marketing and engineering roles. Ella also co-founded XiaoduoAI, which provides NLP solutions to more than 3,000 clients including Taobao, EMS, Meituan, China Telecom and JD Finance.
                                            Ella holds a B.S.E.E. from UESTC and MBA from Stanford GSB, where she started to believe in
                                            Blockchain technology and cryptocurrency will “Change lives. Change organizations. Change
                                            the world” (GSB Slogan).
                                            
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <img class="headPortrait img-fluid" src="{{ URL::asset('images/teck.png') }}">
                                <div class="briefIntroduction_a">
                                    <h5>Teck Chia</h5>
                                    <p id="pBtn2" class="briefIntroduction" >Partner at Binance Labs<img class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="teckChia" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Teck Chia has played the role of an investor, entrepreneur, product manager and software engineer in Silicon Valley for many years.
                                            Most recently, he has invested in startups such as Uber, Postmates, Masterclass, Standard Cognition and others.
                                            He discovered Bitcoin in 2012 and founded HashTrust, a service that makes it easy to create smart contracts in the Bitcoin blockchain. Prior to that, he was at Facebook, where he led the Mobile Platform team and the App Ads team that delivered meaningful value to Facebook's ecosystem of app developers.
                                            Teck holds a BSc. and MEng. in Computer Science and Cognitive Science from Cornell University.
        
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <img class="headPortrait img-fluid" src="{{ URL::asset('images/ben.png') }}">
                                <div class="briefIntroduction_a">
                                    <h5>Benjamin Rameau</h5>
                                    <p id="pBtn3" class="briefIntroduction" >Director at Binance Labs<img  class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="benjamin" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Benjamin Rameau is the founder of the Hong Kong EOS.IO Meetup and the Hong Kong ICO Meetup. Benj was Director at SBI Securities, where he worked on building an ICO advisory business targeting Japanese issuers. He joins the Binance Labs team with a decade of investment banking and hedge fund experience.
                                            He graduated from the University of British Columbia in 2004 with a Bachelor of Commerce.
                                            Benjamin is fully fluent in Japanese, French and English.
        
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
    					<div class="row">
                            <div class="col-sm-4">
                                <img class="headPortrait img-fluid" src="{{ URL::asset('images/Christy.png') }}">
                                <div class="briefIntroduction_a">
                                    <h5>Christy Choi</h5>
                                    <p id="pBtn4" class="briefIntroduction" >Director at Binance Labs<img class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="christy" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Christy Hyungwon Choi is a former entrepreneur and management consultant. She did her first tech startup at the age of 20.
                                            She previously led business development in a blockchain startup in Korea and was a Senior Consultant at Oliver Wyman, top global management consulting firm in Financial Services. 
                                            She's one of the crypto power girls from Asia, a group of female leaders in crypto, and is committed to connecting the dots of Blockchain innovation.
                                            Christy holds a Bachelor of Arts and Business Administration degree from Yonsei University. 
        
                                            
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <img class="headPortrait img-fluid" src="{{ URL::asset('images/flora.png') }}">
                                <div class="briefIntroduction_a">
                                    <h5>Flora Sun</h5>
                                    <p id="pBtn5" class="briefIntroduction" >Director at Binance Labs<img class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="flora" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Prior to joining Binance Labs, Flora Sun was a software engineer in Silicon Valley. She has worked in telecommunications research group (COMSAT Labs), enterprise software corporations (HP, Oracle, Remend, Bitfone) and several consumer Internet startups. Flora is passionate in using computer science to make positive impact in people’s lives, and has developed technologies that are used by millions. Flora holds SB and MEng degrees in EECS from MIT.
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <img class="headPortrait img-fluid" src="{{ URL::asset('images/ling.png') }}">
                                <div class="briefIntroduction_a">
                                    <h5>Ling Zhang</h5>
                                    <p id="pBtn6" class="briefIntroduction" >Director at Binance Labs<img class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="lingZhang" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Ling Zhang holds Bachelor of Law in International Political Economy and Bachelor of Management in Business Administration at Peking University. While participating in the MPP program at Harvard University’s John F. Kennedy School of Government (HKS), Ling pivoted to the role of Director of User Operation at Mobvoi, an AI-related unicorn startup (over $1bn US valuation) and the only Chinese company to receive investment from Google after their departure from the Chinese market.
                                            Besides her role at Mobvoi, Ling is also a former research assistant at the Development Research Center of the State Council and National Development and Reform Commission (NDRC), China, and Personal Liaison of the Under-Secretary-General of the United Nations, Mr. Joseph Verner Reed. 
        
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!--Contact us -->
                    
                        <a href="mailto:labs@binance.com" target="_blank" class="btn btn-brand-alt btn-contact" id="contactUs">Contact us</a>
                        
                        
                        
                    </div>
                </div>
                <div class="col-12 section" id="labs_4">
                    <div class="container container4">
                    	<div class="row">
                    		<div class="col-sm-6 text-right">
                    			<img class="container4a f-fl" src="{{ URL::asset('images/invest@0.5x.png') }}">
	                    	</div>
	                        <div class="col-sm-6">
	                            <h4 class="container4bp" >Our investment focus includes:</h4>
	                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Public Blockchains</p>
	                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Decentralized Exchanges (DEX)</p>
	                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Wallets & Payment</p>
	                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Stable Digital Currencies</p>
	                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; ATS/Security Token Platforms</p>
	                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; dApps</p>
	                        </div>	
                        </div>	
                    </div>
                </div>
                <div class="col-12 section" id="labs_5">
                    <div class="container container5 portfolio">
                        <h3 class="container5a text-left">Portfolio</h3>
                        <ul class="f-cb">
                            <li class="li1"><a href="https://www.oasislabs.com" target="_blank">
                                <img class="li1a li1b gray img-fluid" src="{{ URL::asset('images/oasislabs.png') }}">
                            </a></li>
                            <li class="li2"><a href="https://www.mobilecoin.com/" target="_blank">
                                <img class="li2a li1b gray img-fluid" src="{{ URL::asset('images/mobilecoin.png') }}">
                            </a></li>
                            <li class="li3"><a href="https://republic.co/" target="_blank">
                                <img class="li3a li1b gray img-fluid" src="{{ URL::asset('images/republic.png') }}">
                            </a></li>
                            <li class="li4"><a href="https://certik.org/" target="_blank">
                                <img class="li4a li1b gray img-fluid" src="{{ URL::asset('images/certik.png') }}">
                            </a></li>
                            <li class="li5"><a href="https://www.zdpvt.com/w" target="_blank">
                                <img class="li5a li1b gray img-fluid" src="{{ URL::asset('images/pivot_en.png') }}">
                            </a></li>
                            <li class="li5"><a href="https://www.libracredit.io/" target="_blank">
                                <img class="li5a li1b gray img-fluid" src="{{ URL::asset('images/libra.png') }}">
                            </a></li>
                        </ul>
                        <p class="container5b">More projects coming soon!</p>
                    </div>
                </div>
                <div class="col-12 section" id="labs_6">
                    <div class="container container6">
                    	<div class="row">
	                        <h4 class="container6a">Learn about Binance Labs’ other projects</h4>
	                    </div>
                        <div class="otherProjects row">
                            <div class="offset-sm-1 col-sm-6 otherProjects_1">
                                <a href="./CGI.html" target="_blank"> <img src="{{ URL::asset('images/logo_cgi_2.png') }}"></a>
                                <p>We’re fighting for effective, longterm,
                                        positive progress in the
                                        industry.<br/> Join us.
                                </p>
                                <a href="#" target="_blank" class="btn otherProjectsBtn1 btn-brand-alt" >Pledge your support</a>
        
                            </div>
                            <div class="col-sm-5 otherProjects_2">
                                <a href="#" target="_blank"><img src="{{ URL::asset('images/logo_ecosystemfund.png') }}"></a>
                                <p>One billion US Dollars.<br>
                                    Twenty initial partners.<br>
                                    One great ecosystem.<br>
                                </p>
                                <a href="#" target="_blank" class="btn otherProjectsBtn2 btn-brand-alt">Learn more</a>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 section" id="labs_7">
                    <div class="container text-center">
                        <p class="labs_10_l">If you wish to join our program, please send us your application below.</p>
                        <a href="#" target="_blank" class="btn btn-brand labs_10_btn_1">Apply for funding</a><br>
                        <a href="https://twitter.com" target="_blank" class="btn btn-brand-alt labs_10_btn_2><div" ><i class="iconfont icon-twitter"></i>Follow @BinanceLabs</a>
                        
                    </div>
                </div>
            </div>
@endsection