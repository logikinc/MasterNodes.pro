@include('layout.header')
</head>
<body>
@include('layout.sidebar')
<div class="container-fluid">
    @include('layout.logo')
    @include('layout.statsbar')
    <div class="row middle">
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        <div class="col-lg-10 col-md-12" style="text-align: center;">
            {{--<div class="col-md-6" class="pull-right" style="height:75%">--}}
            <canvas id="lineChart"></canvas>
            {{--</div>--}}
        </div>
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
    </div>
    <div class="row middle">
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-pills" style="text-align: center;">
                <li id="90day" role="presentation" class="glist"><a href="#" onclick="loadit('90day')">90 days</a></li>
                <li id="30day" role="presentation" class="glist active"><a href="#" onclick="loadit('30day')">30 days</a></li>
                <li id="1day" role="presentation" class="glist"><a href="#" onclick="loadit('1day')">1 day</a></li>
                <li id="1hour" role="presentation" class="glist"><a href="#" onclick="loadit('1hour')">1 Hour</a></li>
                <li id="trendline" role="presentation" class="glist"><a href="#" onclick="loadit('trendline')">TrendLine</a></li>
                <li id="avgincome" role="presentation" class="glist"><a href="#" onclick="loadit('avgincome')">Average Income</a></li>
            </ul>
        </div>
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
    </div>
    @include('layout.footer')
    <div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    </div>
</div>
<script>
    function loadit(type) {
        $('.glist').removeClass('active');
        $('#' + type).addClass('active');
        $('#DataSet').load('{!! route('mlgdata') !!}/?data=' + type);
    }
</script>
<div id="DataSet">
    @include('mlgData',['type' => '30day'])
</div>
@include('layout.analytics')
</body>
</html>
