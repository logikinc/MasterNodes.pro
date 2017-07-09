<div class="row bar">
    <div class="col-lg-12 col-md-12" style="text-align: center;">
        <div class="row">
            <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="display: inline-block;">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs"></div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Total Masternodes</div>
                        <div class="bardatadata"><span class="orange">{!! $firstNode['total'] !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Daily {!! strtoupper(env('COIN')) !!} Earned</div>
                        <div class="bardatadata"><span class="blue">{!! number_format($coindaily,'2','.','') !!}</span></div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs"></div>
                </div>
            </div>
            <div class="col-md-1 hidden-md hidden-sm hidden-xs"></div>
        </div>
        <div class="row">
            <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="display: inline-block;">
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs"></div>
                    <div class="col-md-2 col-sm-6 col-xs-6  bardata">
                        <div class="bardatatitle">Daily Income</div>
                        <div class="bardatadata">$<span class="green">{!! $income['daily'] !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6  bardata">
                        <div class="bardatatitle">Weekly Income</div>
                        <div class="bardatadata">$<span class="green">{!! $income['weekly'] !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6  bardata">
                        <div class="bardatatitle">Monthly Income</div>
                        <div class="bardatadata">$<span class="green">{!! $income['monthly'] !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6  bardata">
                        <div class="bardatatitle">Yearly Income</div>
                        <div class="bardatadata">$<span class="green">{!! $income['yearly'] !!}</span></div>
                    </div>
                    <div class="col-md-2 hidden-sm hidden-xs"></div>
                </div>
            </div>
            <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        </div>
        <div class="row">
            <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="display: inline-block;">
                <div class="row">
                    <div class="col-md-1  hidden-sm hidden-xs">
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">24hr Block Count</div>
                        <div class="bardatadata"><span class="orange">{!! $block24hour !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Avg. Block Time</div>
                        <div class="bardatadata"><span class="darkGreen">{!! number_format($avgblocktime,'1','.','') !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Masternode Block Award</div>
                        <div class="bardatadata"><span class="blue">{!! $blockreward / (100 / env('MASTERNODE_PERCENT_OF_BLOCK')) !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">{!! $daytilldrop['name'] !!} to Award Drop</div>
                        <div class="bardatadata"><span class="darkGreen">{!! $daytilldrop['num'] !!}</span></div>
                    </div>
                    <div class="col-sm-3 col-xs-3  hidden-lg hidden-md">
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Next MN Block Award</div>
                        <div class="bardatadata"><span class="blue">{!! $nextbreward / (100 / env('MASTERNODE_PERCENT_OF_BLOCK')) !!}</span></div>
                    </div>
                    <div class="col-sm-3 col-xs-3  hidden-lg hidden-md">
                    </div>
                    <div class="col-md-1  hidden-sm hidden-xs"></div>
                </div>
            </div>
            <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        </div>
        <div class="row">
            <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="display: inline-block;">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Avg. Daily Awards</div>
                        <div class="bardatadata"><span class="blue">{!! number_format($avgblocks,'2','.',',') !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Avg. Award Freqency</div>
                        <div class="bardatadata"><span class="darkGreen">{!! number_format($avgrewardfreq,'2','.',',') !!} <span style="font-size:69%;">hrs</span></span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Avg. Daily Income</div>
                        <div class="bardatadata">$<span class="green">{!! number_format($dailyaverage,'2','.',',') !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Avg. Weekly Income</div>
                        <div class="bardatadata">$<span class="green">{!! number_format($weeklyaverage,'2','.',',') !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Avg. Monthly Income</div>
                        <div class="bardatadata">$<span class="green">{!! number_format($monthlyaverage,'2','.',',') !!}</span></div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Masternode worth</div>
                        <div class="bardatadata">$<span class="green">{!! $MasternodeWorth !!}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        </div>
    </div>
</div>