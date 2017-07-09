@include('layout.header')
<body>
@include('layout.sidebar')
<div class="container-fluid">
    @include('layout.logo')
    @include('layout.statsbar')
    <div class="row middle">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            @foreach ($nodes as $node)
                <div class="col-md-6" style="border: solid 1px white; width: 480px; height: 320px;">
                    <div class="row pibar">
                        <div class="col-md-6 pibardata">
                            <div class="pibardatatitle">Balance</div>
                            <div class="pibardatadata"><span class="orange">{!! $node['info']['balance'] !!}</span></div>
                        </div>
                        <div class="col-md-6 pibardataend">
                            <div class="pibardatatitle">Balance Value</div>
                            <div class="pibardatadata">$<span class="green">{!! number_format(($price_usd * $node['info']['balance']), '2', '.', ',') !!}</span></div>
                        </div>
                        <div class="col-md-6 pibardata">
                            <div class="pibardatatitle">DarkBalance</div>
                            <div class="pibardatadata"><span class="orange">{!! number_format($node['info']['darksend_balance'], '8', '.', ',') !!}</span></div>
                        </div>
                        <div class="col-md-6 pibardataend">
                            <div class="pibardatatitle">DarkBalance Value</div>
                            <div class="pibardatadata">$<span class="green">{!! number_format(($price_usd * $node['info']['darksend_balance']), '2', '.', ',') !!}</span></div>
                        </div>
                        <div class="col-md-6 pibardata">
                            <div class="pibardatatitle">Stake</div>
                            <div class="pibardatadata"><span class="green">{!! number_format($node['info']['stake'], '8', '.', ',') !!}</span></div>
                        </div>
                        <div class="col-md-6 pibardataend">
                            <div class="pibardatatitle">Time To Stake</div>
                            <div class="pibardatadata"><span class="green">{!! $node['stakinginfo']['dhm'] !!}</span></div>
                        </div>
                        <div class="col-md-6 pibardata">
                            <div class="pibardatatitle">Connections</div>
                            <div class="pibardatadata"><span class="green">{!! $node['info']['connections'] !!}</span></div>
                        </div>
                        <div class="col-md-6 pibardataend">
                            <div class="pibardatatitle">Blocks</div>
                            <div class="pibardatadata"><span class="green">{!! $node['info']['blocks'] !!}</span></div>
                        </div>
                    </div>
                    <div class="row pibar">
                        <div class="col-md-12 pibardataend">
                            <div class="pibardatatitle">Main Address</div>
                            <div class="pibardatadata"><span class="orange">{!! $node['mainaddress'] !!}</span></div>
                        </div>
                        <div class="col-md-12 pibardataend">
                            <div class="pibardatatitle">Last Updated</div>
                            <div class="pibardatadata"><span class="orange">{!! $node['lastupdated'] !!}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-1"></div>
    </div>
    @include('layout.footer')
    <div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    </div>
</div>
@include('layout.analytics')
</body>
</html>
