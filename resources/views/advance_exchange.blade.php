@extends('layouts.app')

@section('content') 
    <div class="advance-exchange-container col-12">
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <div class="col-12">
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
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
                                                <div class="dropdown-menu dropdown-mega">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-trend">Trend Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-regression">Regression Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-periodic">Periodic Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-percent">Percent Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-parallel">Parallel Rays</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-down">Down Arrow</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-clean">Clean</a> 
                                                        </div>
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-support">Support/Pressure Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-rectangle">Rectangle</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-fibonacci">Fibonacci Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-brand">Brand Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-up">Up Arrow</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-delete">Delete Selection</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Indicators</a>
                                                <div class="dropdown-menu dropdown-mega mega-auto">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-MACD">MACD</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-KDJ">KDJ</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-RSI">RSI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-DMI">DMI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-OVB">OVB</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-MTM">MTM</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-EMA">EMA</a> 
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-VWAP">VWAP</a> 
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-AVL">AVL</a> 
                                                        </div>
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-TRIX">TRIX</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-StrochRSI">StrochRSI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-EMV">EMV</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-WR">WR</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-BOLL">BOLL</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-SAR">SAR</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-CCI">CCI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-MA">MA</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#original-VOL">VOL</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  data-toggle="tab" href="#original-volx">VOL X</a>
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
                                            <div class="tab-pane container fade" id="original-trend">
                                                Orginal Trend Line
                                            </div>
                                            <div class="tab-pane container fade" id="original-regression">
                                                Orginal Regression Line
                                            </div>
                                            <div class="tab-pane container fade" id="original-periodic">
                                                Orginal Periodic Line
                                            </div>
                                            <div class="tab-pane container fade" id="original-percent">
                                                Orginal Percent Line
                                            </div>
                                            <div class="tab-pane container fade" id="original-parallel">
                                                Orginal Parallel Rays
                                            </div>
                                            <div class="tab-pane container fade" id="original-down">
                                                Orginal Down Arrow
                                            </div>
                                            <div class="tab-pane container fade" id="original-clean">
                                                Orginal Clean
                                            </div>
                                            <div class="tab-pane container fade" id="original-support">
                                                Orginal Support/Pressure Line
                                            </div>
                                            <div class="tab-pane container fade" id="original-rectangle">
                                                Orginal Rectangle
                                            </div>
                                            <div class="tab-pane container fade" id="original-fibonacci">
                                                Orginal Fibonacci Line
                                            </div>
                                            <div class="tab-pane container fade" id="original-brand">
                                                Orginal Brand Line
                                            </div>
                                            <div class="tab-pane container fade" id="original-up">
                                                Orginal Up Arrow
                                            </div>
                                            <div class="tab-pane container fade" id="original-delete">
                                                Orginal Delete Selection
                                            </div>
                                            <div class="tab-pane container fade" id="original-MACD">
                                                Orginal MACD
                                            </div>
                                            <div class="tab-pane container fade" id="original-KDJ">
                                                Orginal KDJ
                                            </div>
                                            <div class="tab-pane container fade" id="original-RSI">
                                                Orginal RSI
                                            </div>
                                            <div class="tab-pane container fade" id="original-DMI">
                                                Orginal DMI
                                            </div>
                                            <div class="tab-pane container fade" id="original-OVB">
                                                Orginal OVB
                                            </div>
                                            <div class="tab-pane container fade" id="original-MTM">
                                                Orginal MTM
                                            </div>
                                            <div class="tab-pane container fade" id="original-EMA">
                                                Orginal EMA
                                            </div>
                                            <div class="tab-pane container fade" id="original-VWAP">
                                                Orginal VWAP
                                            </div>
                                            <div class="tab-pane container fade" id="original-AVL">
                                                Orginal AVL
                                            </div>
                                            <div class="tab-pane container fade" id="original-TRIX">
                                                Orginal TRIX
                                            </div>
                                            <div class="tab-pane container fade" id="original-StrochRSI">
                                                Orginal StrochRSI
                                            </div>
                                            <div class="tab-pane container fade" id="original-EMV">
                                                Orginal EMV
                                            </div>
                                            <div class="tab-pane container fade" id="original-WR">
                                                Orginal WR
                                            </div>
                                            <div class="tab-pane container fade" id="original-BOLL">
                                                Orginal BOLL
                                            </div>
                                            <div class="tab-pane container fade" id="original-SAR">
                                                Orginal SAR
                                            </div>
                                            <div class="tab-pane container fade" id="original-CCI">
                                                Orginal CCI
                                            </div>
                                            <div class="tab-pane container fade" id="original-MA">
                                                Orginal MA
                                            </div>
                                            <div class="tab-pane container fade" id="original-VOL">
                                                Orginal VOL
                                            </div>
                                            <div class="tab-pane container fade" id="original-volx">
                                                Orginal VOL X
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
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
                                                <div class="dropdown-menu dropdown-mega">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-trend">Trend Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-regression">Regression Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-periodic">Periodic Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-percent">Percent Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-parallel">Parallel Rays</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-down">Down Arrow</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-clean">Clean</a> 
                                                        </div>
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-support">Support/Pressure Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-rectangle">Rectangle</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-fibonacci">Fibonacci Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-brand">Brand Line</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-up">Up Arrow</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-delete">Delete Selection</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Indicators</a>
                                                <div class="dropdown-menu dropdown-mega mega-auto">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-MACD">MACD</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-KDJ">KDJ</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-RSI">RSI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-DMI">DMI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-OVB">OVB</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-MTM">MTM</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-EMA">EMA</a> 
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-VWAP">VWAP</a> 
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-AVL">AVL</a> 
                                                        </div>
                                                        <div class="col-6">
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-TRIX">TRIX</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-StrochRSI">StrochRSI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-EMV">EMV</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-WR">WR</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-BOLL">BOLL</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-SAR">SAR</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-CCI">CCI</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-MA">MA</a>
                                                            <a class="dropdown-item nav-link"  data-toggle="tab" href="#trading-VOL">VOL</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"  data-toggle="tab" href="#original-volx">VOL X</a>
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
                                            <div class="tab-pane container fade" id="trading-trend">
                                                Trading Trend Line
                                            </div>
                                            <div class="tab-pane container fade" id="trading-regression">
                                                Trading Regression Line
                                            </div>
                                            <div class="tab-pane container fade" id="trading-periodic">
                                                Trading Periodic Line
                                            </div>
                                            <div class="tab-pane container fade" id="trading-percent">
                                                Trading Percent Line
                                            </div>
                                            <div class="tab-pane container fade" id="trading-parallel">
                                                Trading Parallel Rays
                                            </div>
                                            <div class="tab-pane container fade" id="trading-down">
                                                Trading Down Arrow
                                            </div>
                                            <div class="tab-pane container fade" id="trading-clean">
                                                Trading Clean
                                            </div>
                                            <div class="tab-pane container fade" id="trading-support">
                                                Trading Support/Pressure Line
                                            </div>
                                            <div class="tab-pane container fade" id="trading-rectangle">
                                                Trading Rectangle
                                            </div>
                                            <div class="tab-pane container fade" id="trading-fibonacci">
                                                Trading Fibonacci Line
                                            </div>
                                            <div class="tab-pane container fade" id="trading-brand">
                                                Trading Brand Line
                                            </div>
                                            <div class="tab-pane container fade" id="trading-up">
                                                Trading Up Arrow
                                            </div>
                                            <div class="tab-pane container fade" id="trading-delete">
                                                Trading Delete Selection
                                            </div>
                                            <div class="tab-pane container fade" id="trading-MACD">
                                                Trading MACD
                                            </div>
                                            <div class="tab-pane container fade" id="trading-KDJ">
                                                Trading KDJ
                                            </div>
                                            <div class="tab-pane container fade" id="trading-RSI">
                                                Trading RSI
                                            </div>
                                            <div class="tab-pane container fade" id="trading-DMI">
                                                Trading DMI
                                            </div>
                                            <div class="tab-pane container fade" id="trading-OVB">
                                                Trading OVB
                                            </div>
                                            <div class="tab-pane container fade" id="trading-MTM">
                                                Trading MTM
                                            </div>
                                            <div class="tab-pane container fade" id="trading-EMA">
                                                Trading EMA
                                            </div>
                                            <div class="tab-pane container fade" id="trading-VWAP">
                                                Trading VWAP
                                            </div>
                                            <div class="tab-pane container fade" id="trading-AVL">
                                                Trading AVL
                                            </div>
                                            <div class="tab-pane container fade" id="trading-TRIX">
                                                Trading TRIX
                                            </div>
                                            <div class="tab-pane container fade" id="trading-StrochRSI">
                                                Trading StrochRSI
                                            </div>
                                            <div class="tab-pane container fade" id="trading-EMV">
                                                Trading EMV
                                            </div>
                                            <div class="tab-pane container fade" id="trading-WR">
                                                Trading WR
                                            </div>
                                            <div class="tab-pane container fade" id="trading-BOLL">
                                                Trading BOLL
                                            </div>
                                            <div class="tab-pane container fade" id="trading-SAR">
                                                Trading SAR
                                            </div>
                                            <div class="tab-pane container fade" id="trading-CCI">
                                                Trading CCI
                                            </div>
                                            <div class="tab-pane container fade" id="trading-MA">
                                                Trading MA
                                            </div>
                                            <div class="tab-pane container fade" id="trading-VOL">
                                                Trading VOL
                                            </div>
                                            <div class="tab-pane container fade" id="trading-volx">
                                                Trading VOL X
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="depth">
                                        Depth...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row order-container">
                    <div class="col-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#open-orders">
                                    Open Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#order-history">
                                    Order History
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#trade-history">
                                    Trade History
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#funds">
                                    Funds
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="open-orders" class="container tab-pane active">
                                <div class="row">
                                    <div class="offset-8 col-4 text-right hide-option">
                                        <input type="checkbox">
                                        <span>Hide other pairs</span>
                                    </div>
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
                                                    <th>Filled %</th>
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
                                    @foreach ($open as  $order )
                                        <tr>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['date']) ) }}">{{ $order['date']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['pair']) ) }}">{{ $order['pair']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['type']) ) }}">{{ $order['type']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['side']) ) }}">{{ $order['side']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['price']) ) }}">{{ $order['price']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['amount']) ) }}">{{ $order['amount']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['filled']) ) }}">{{ $order['filled']  }} </a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['total']) ) }}">{{ $order['total']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['trigger_conditions']) ) }}">{{ $order['trigger_conditions'] }}</a></td>
                                           
                                        </tr>
                                    @endforeach 
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="order-history" class="container tab-pane fade">
                                <div class="row">
                                    <div class="offset-8 col-4 text-right hide-option">
                                        <input type="checkbox">
                                        <span>Hide other pairs</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#" class="btn-history">1 Day</a>
                                                <a href="#" class="btn-history">1 Week</a>
                                                <a href="#" class="btn-history">1 Month</a>
                                                <a href="#" class="btn-history">3 Month</a>
                                            </div>
                                            <div class="col-8">
                                                <form action="" method="">
                                                    <label for="">From</label>
                                                    <input type="date">
                                                    <label>To</label>
                                                    <input type="date">
                                                    <a href="#" class="btn-history">Search</a>
                                                </form>
                                            </div>
                                        </div>
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
                                    @foreach ($advance_order_history as  $order )
                                        <tr>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['date']) ) }}">{{ $order['date']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['pair']) ) }}">{{ $order['pair']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['type']) ) }}">{{ $order['type']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['side']) ) }}">{{ $order['side']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['average']) ) }}">{{ $order['average']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['price']) ) }}">{{ $order['price']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['filled']) ) }}">{{ $order['filled']  }} </a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['amount']) ) }}">{{ $order['amount']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['total']) ) }}">{{ $order['total']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['trigger_conditions']) ) }}">{{ $order['trigger_conditions']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['status']) ) }}">{{ $order['status']  }}</a></td>
                                        </tr>
                                        @endforeach     

                                             </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="trade-history" class="container tab-pane fade">
                                <div class="row">
                                    <div class="offset-8 col-4 text-right hide-option">
                                        <input type="checkbox">
                                        <span>Hide other pairs</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#" class="btn-history">1 Day</a>
                                                <a href="#" class="btn-history">1 Week</a>
                                                <a href="#" class="btn-history">1 Month</a>
                                                <a href="#" class="btn-history">3 Month</a>
                                            </div>
                                            <div class="col-8">
                                                <form action="" method="">
                                                    <label for="">From</label>
                                                    <input type="date">
                                                    <label>To</label>
                                                    <input type="date">
                                                    <a href="#" class="btn-history">Search</a>
                                                </form>
                                            </div>
                                        </div>
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>Pair</th>
                                                    <th>Type</th>
                                                    <th>Price</th>
                                                    <th>Filled</th>
                                                    <th>Free</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($trade_history as  $order )
                                        <tr>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['time']) ) }}">{{ $order['time']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['pair']) ) }}">{{ $order['pair']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['type']) ) }}">{{ $order['type']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['price']) ) }}">{{ $order['price']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['filled']) ) }}">{{ $order['filled']  }}</a> </td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['free']) ) }}">{{ $order['free']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['total']) ) }}">{{ $order['total']  }}</a></td>
                                        
                                        </tr>
                                        @endforeach    

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="funds" class="container tab-pane fade">
                                <div class="row">
                                    <div class="offset-8 col-4 text-right hide-option">
                                        <input type="checkbox">
                                        <span>Hide small assets</span>
                                    </div>
                                    <div class="col-12">
                                        <table class="table table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Coin</th>
                                                    <th>Total Balance</th>
                                                    <th>Available Balance</th>
                                                    <th>In Order</th>
                                                    <th>BTC Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                    @foreach ($funds as  $order )
                                        <tr>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['coin']) ) }}">{{ $order['coin']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['total_balance']) ) }}">{{ $order['total_balance']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['available_balance']) ) }}">{{ $order['available_balance']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['in_order']) ) }}">{{ $order['in_order']  }}</a></td>
                                            <td><a href="{{ route('advance',str_replace('/','_',$order['btc_value']) ) }}">{{ $order['btc_value']  }} </a></td>
                                          
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
            </div>
            <div class="col-5">
                <div class="row" style="height: 550px">
                    <div class="col-6">
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
                                        @foreach ($advance_market as  $value )
                                            <tr>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount'] }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['total']) ) }}">{{ $value['total'] }}</a></td>
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
                                        @foreach ($advance_market2 as  $value )
                                            <tr>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount'] }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['total']) ) }}">{{ $value['total'] }}</a></td>
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
                                        @foreach ($advance_market3 as  $value )
                                            <tr>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount'] }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['total']) ) }}">{{ $value['total'] }}</a></td>
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
                                        @foreach ($advance_market4 as  $value )
                                            <tr>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount'] }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['total']) ) }}">{{ $value['total'] }}</a></td>
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
                    <div class="col-6">
                        <div class="row left-side right-table">
                            <div class="col-12 right-content">
                                <table class="table table-hover table-responsive">
                                    <tbody>
                                    @foreach ($advance_market5 as  $value )
                                            <tr>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['price']) ) }}">{{ $value['price']  }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['amount']) ) }}">{{ $value['amount'] }}</a></td>
                                                <td><a href="{{ route('advance',str_replace('/','_',$value['total']) ) }}">{{ $value['total'] }}</a></td>
                                            </tr>
                                    @endforeach
                                           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row limit-container">
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
@endsection