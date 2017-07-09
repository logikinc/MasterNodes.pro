<div class="row bar">
    <div class="col-lg-12 col-md-12" style="text-align: center;">
        <div class="row">
            <div class="col-lg-1 hidden-md"></div>
            <div class="col-lg-10 col-md-12" style="display: inline-block;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Total Masternodes</div>
                        <div class="bardatadata"><span class="orange">{!! $firstNode['total'] !!}</span></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Daily {!! strtoupper(env('COIN')) !!} Earned</div>
                        <div class="bardatadata"><span class="blue">{!! number_format($coindaily,'2','.','') !!}</span></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Daily Income</div>
                        <div class="bardatadata">$<span class="green">{!! number_format($income['daily'],'2','.',',') !!}</span></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Weekly Income</div>
                        <div class="bardatadata">$<span class="green">{!! number_format($income['weekly'],'2','.',',') !!}</span></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Monthly Income</div>
                        <div class="bardatadata">$<span class="green">{!! number_format($income['monthly'],'2','.',',') !!}</span></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 bardata">
                        <div class="bardatatitle">Yearly Income</div>
                        <div class="bardatadata">$<span class="green">{!! number_format($income['yearly'],'2','.',',') !!}</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 hidden-md"></div>
        </div>
    </div>
</div>
