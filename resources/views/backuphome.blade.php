<!-- @extends('layouts.app')

@section('content')
    <div id="web">
  
            <div class="banner" id="labs_1">
                    <div class="container container1" style="text-align: center;">
                        <img class="logoLabs" src="{{ URL::asset('images/logo_labs.png') }}">
                        <p class="container1a">Binance Labs is a social impact fund and an initiative to <span style="color: aliceblue;">incubate, invest, and empower</span>
                            blockchain and cryptocurrency entrepreneurs, projects, and communities.
                        </p>
                        <p class="container1b">
                            Our mission is to solve the problems that matter most to the ecosystem and
                            change the world for the better.
                        </p>
                        
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScBmAIL5awpEbTR2a_L2PjsyHwpSfPkJTVoHMeRjprH08IH6Q/viewform" target="_blank"><div class="btn1" id="ApplyForFunding">Apply for funding</div></a>
                    </div>
             </div>
  
             <div class="banner" id="labs_5">
                    <div class="container container2">
                        <div class="f-fl container2a">
                            <p class="container2Ap">What we do:</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Incubate entrepreneurs and projects</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Make direct investments</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Collaborate with other industry partners and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; participate as LP</p>
        
        
                            <p class="container2Ap" style="margin-top: 26px;">We support entrepreneurs in:</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Funding</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Go-to-market strategy & BD</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Token Models & Distributions</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Technical Review</p>
                            <p class="container2Ap1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Talent Recruiting</p>
                        </div>
                        
                        <img class="f-fl container2b" src="{{ URL::asset('images/labs@0.5x.png') }}">
                    </div>
                </div>
                <div class="banner" id="labs_6">
                    <div class="container container3" style="width: 768px">
                        <p class="container3a">Our Team</p>
                        <ul class="container3b f-cb">
                            <li class="container3b_li1 f-fl">
                                <img class="headPortrait" src="{{ URL::asset('images/ella.png') }}">
                                <div class="briefIntroduction_a">
                                    <h4>Ella Zhang</h4>
                                    <p id="pBtn1" class="briefIntroduction" >Head of Binance Labs<img onclick="opendec('#ellaZhang')" class="direction f-fr" src="./img/xia.png"></p>
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
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com/ellazhang516" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img onclick="guanbi('#ellaZhang')" class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="container3b_li2 f-fl">
                                <img class="headPortrait" src="{{ URL::asset('images/teck.png') }}">
                                <div class="briefIntroduction_a">
                                    <h4>Teck Chia</h4>
                                    <p id="pBtn2" class="briefIntroduction" >Partner at Binance Labs<img onclick="opendec('#teckChia')" class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="teckChia" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Teck Chia has played the role of an investor, entrepreneur, product manager and software engineer in Silicon Valley for many years.
                                            Most recently, he has invested in startups such as Uber, Postmates, Masterclass, Standard Cognition and others.
                                            He discovered Bitcoin in 2012 and founded HashTrust, a service that makes it easy to create smart contracts in the Bitcoin blockchain. Prior to that, he was at Facebook, where he led the Mobile Platform team and the App Ads team that delivered meaningful value to Facebook's ecosystem of app developers.
                                            Teck holds a BSc. and MEng. in Computer Science and Cognitive Science from Cornell University.
        
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com/hiteck" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img onclick="guanbi('#teckChia')" class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="f-fl container3b1 container3b_li3">
                                <img class="headPortrait" src="{{ URL::asset('images/ben.png') }}">
                                <div class="briefIntroduction_a">
                                    <h4>Benjamin Rameau</h4>
                                    <p id="pBtn3" class="briefIntroduction" >Director at Binance Labs<img onclick="opendec('#benjamin')" class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="benjamin" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Benjamin Rameau is the founder of the Hong Kong EOS.IO Meetup and the Hong Kong ICO Meetup. Benj was Director at SBI Securities, where he worked on building an ICO advisory business targeting Japanese issuers. He joins the Binance Labs team with a decade of investment banking and hedge fund experience.
                                            He graduated from the University of British Columbia in 2004 with a Bachelor of Commerce.
                                            Benjamin is fully fluent in Japanese, French and English.
        
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com/rambo1stbld" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img onclick="guanbi('#benjamin')" class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </li>
        
                            <li class="f-fl">
                                <img class="headPortrait" src="{{ URL::asset('images/Christy.png') }}">
                                <div class="briefIntroduction_a">
                                    <h4>Christy Choi</h4>
                                    <p id="pBtn4" class="briefIntroduction" >Director at Binance Labs<img onclick="opendec('#christy')" class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="christy" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Christy Hyungwon Choi is a former entrepreneur and management consultant. She did her first tech startup at the age of 20.
                                            She previously led business development in a blockchain startup in Korea and was a Senior Consultant at Oliver Wyman, top global management consulting firm in Financial Services. 
                                            She's one of the crypto power girls from Asia, a group of female leaders in crypto, and is committed to connecting the dots of Blockchain innovation.
                                            Christy holds a Bachelor of Arts and Business Administration degree from Yonsei University. 
        
                                            
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com/_christychoi" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img onclick="guanbi('#christy')" class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="f-fl">
                                <img class="headPortrait" src="{{ URL::asset('images/flora.png') }}">
                                <div class="briefIntroduction_a">
                                    <h4>Flora Sun</h4>
                                    <p id="pBtn5" class="briefIntroduction" >Director at Binance Labs<img onclick="opendec('#flora')" class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="flora" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Prior to joining Binance Labs, Flora Sun was a software engineer in Silicon Valley. She has worked in telecommunications research group (COMSAT Labs), enterprise software corporations (HP, Oracle, Remend, Bitfone) and several consumer Internet startups. Flora is passionate in using computer science to make positive impact in people’s lives, and has developed technologies that are used by millions. Flora holds SB and MEng degrees in EECS from MIT.
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com/sunflora" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img onclick="guanbi('#flora')" class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="f-fl container3b1">
                                <img class="headPortrait" src="{{ URL::asset('images/ling.png') }}">
                                <div class="briefIntroduction_a">
                                    <h4>Ling Zhang</h4>
                                    <p id="pBtn6" class="briefIntroduction" >Director at Binance Labs<img onclick="opendec('#lingZhang')" class="direction f-fr" src="{{ URL::asset('images/xia.png') }}"></p>
                                    <div id="lingZhang" class="briefIntroduction_1a">
                                        <p class="briefIntroduction_1">
                                            Ling Zhang holds Bachelor of Law in International Political Economy and Bachelor of Management in Business Administration at Peking University. While participating in the MPP program at Harvard University’s John F. Kennedy School of Government (HKS), Ling pivoted to the role of Director of User Operation at Mobvoi, an AI-related unicorn startup (over $1bn US valuation) and the only Chinese company to receive investment from Google after their departure from the Chinese market.
                                            Besides her role at Mobvoi, Ling is also a former research assistant at the Development Research Center of the State Council and National Development and Reform Commission (NDRC), China, and Personal Liaison of the Under-Secretary-General of the United Nations, Mr. Joseph Verner Reed. 
        
                                        </p>
                                        <p class="briefIntroduction_2">
                                            <span class="briefIntroduction_2a f-fl"><a href="https://twitter.com/lingzh1220" target="_blank"><i class="iconfont icon-twitter"></i></a></span>
                                            <img onclick="guanbi('#lingZhang')" class="briefIntroduction_2b f-fr direction" src="{{ URL::asset('images/shang.png') }}">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                          
                        
                            <a href="mailto:labs@binance.com" target="_blank"><div class="btn1" id="contactUs">Contact us</div></a>
                        
                        
                        
                    </div>
                </div>
                <div class="banner" id="labs_7">
                    <div class="container container4">
                        <img class="container4a f-fl" src="{{ URL::asset('images/invest@0.5x.png') }}">
                        <div class="container4b f-fl">
                            <p class="container4bp" >Our investment focus includes:</p>
                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Public Blockchains</p>
                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Decentralized Exchanges (DEX)</p>
                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Wallets & Payment</p>
                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; Stable Digital Currencies</p>
                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; ATS/Security Token Platforms</p>
                            <p class="container4bp1">&nbsp;&nbsp;&nbsp;&nbsp;◆&nbsp; dApps</p>
                        </div>	
                    </div>
                </div>
                <div class="banner" id="labs_8">
                    <div class="container container5">
                        <p class="container5a">Portfolio</p>
                        <ul class="f-cb">
                            <li class="li1"><a href="https://www.oasislabs.com" target="_blank">
                                <img class="li1a li1b gray" src="{{ URL::asset('images/oasislabs.png') }}">
                            </a></li>
                            <li class="li2"><a href="https://www.mobilecoin.com/" target="_blank">
                                <img class="li2a li1b gray" src="{{ URL::asset('images/mobilecoin.png') }}">
                            </a></li>
                            <li class="li3"><a href="https://republic.co/" target="_blank">
                                <img class="li3a li1b gray" src="{{ URL::asset('images/republic.png') }}">
                            </a></li>
                            <li class="li4"><a href="https://certik.org/" target="_blank">
                                <img class="li4a li1b gray" src="{{ URL::asset('images/certik.png') }}">
                            </a></li>
                            <li class="li5"><a href="https://www.zdpvt.com/w" target="_blank">
                                <img class="li5a li1b gray" src="{{ URL::asset('images/pivot_en.png') }}">
                            </a></li>
                            <li class="li5"><a href="https://www.libracredit.io/" target="_blank">
                                <img class="li5a li1b gray" src="{{ URL::asset('images/libra.png') }}">
                            </a></li>
                        </ul>
                        <p class="container5b">More projects coming soon!</p>
                    </div>
                </div>
                <div class="banner" id="labs_9">
                    <div class="container container6">
                        <p class="container6a">Learn about Binance Labs’ other projects</p>
                        <div class="otherProjects f-cb">
                            <div class="otherProjects_1 f-fl">
                                <a href="./CGI.html" target="_blank"> <img src="{{ URL::asset('images/logo_cgi_2.png') }}"></a>
                                <p>We’re fighting for effective, longterm,
                                        positive progress in the
                                        industry.<br/> Join us.
                                </p>
                                <a href="./CGI.html" target="_blank"><div class="btn1 otherProjectsBtn" >Pledge your support</div></a>
        
                            </div>
                            <div class="otherProjects_2 f-fl">
                                <a href="./EF.html" target="_blank"><img src="{{ URL::asset('images/logo_ecosystemfund.png') }}"></a>
                                <p>One billion US Dollars.<br>
                                    Twenty initial partners.<br>
                                    One great ecosystem.<br>
                                </p>
                                <a href="./EF.html" target="_blank"><div class="btn1 otherProjectsBtn" >Learn more</div></a>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner" id="labs_10">
                    <div class="container">
                        <p class="labs_10_l">If you wish to join our program, please send us your application below.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScBmAIL5awpEbTR2a_L2PjsyHwpSfPkJTVoHMeRjprH08IH6Q/viewform" target="_blank"><div class="btn1 labs_10_btn_1" >Apply for funding</div></a><br>
                        <a href="https://twitter.com/binancelabs" target="_blank"><div class="btn1 labs_10_btn_2" ><i class="iconfont icon-twitter"></i>Follow @BinanceLabs</div></a>
                        
                    </div>
                </div>
            </div>
@endsection -->