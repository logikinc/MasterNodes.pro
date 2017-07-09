<script>
    function runit() {
        var ctxa = $("#lineChart");
        var myChart = new Chart(ctxa, {
            type: 'line',
            data: {
                labels: [
					<?php $last = '';?>
                            @foreach($totalnodeslist as $value)
                            @if ($type == "1hour" or $type == "1day")
                            @if (date('h:i a',strtotime($value['created_at'])) != $last)
                        "{!! date('h:i a',strtotime($value['created_at'])) !!}",
					<?php $last = date('h:i a', strtotime($value['created_at'])); ?>
                            @endif
                            @else
                            @if (date('m-d-y',strtotime($value['created_at'])) != $last)
                        "{!! date('m-d-y',strtotime($value['created_at'])) !!}",
					<?php $last = date('m-d-y', strtotime($value['created_at'])); ?>
                    @endif
                    @endif
                    @endforeach
                ],
                @if ($type == "avgincome")
                datasets: [{
                    radius: .25,
                    label: 'Daily Average Income',
                    data: [
                            @foreach($totalnodeslist as $value)
							<?php $datapack = json_decode($value['data'], true); ?>
                            @if(isset($datapack['dailyaverage']))
                        {
                            x: '@if ($type == "1hour" or $type == "1day") {!! date('h:i a',strtotime($value['created_at'])) !!} @else {!! date('m-d-y',strtotime($value['created_at'])) !!} @endif',
                            y: {!! number_format($datapack['dailyaverage'],'0','.','') !!}
                        },
                        @endif
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(129, 57, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(129, 57, 192,1)'
                    ],
                    borderWidth: 1
                }, {
                    radius: .25,
                    label: 'Weekly Average Income',
                    data: [
                            @foreach($totalnodeslist as $value)
							<?php $datapack = json_decode($value['data'], true); ?>
                            @if(isset($datapack['weeklyaverage']))
                        {
                            x: '@if ($type == "1hour" or $type == "1day") {!! date('h:i a',strtotime($value['created_at'])) !!} @else {!! date('m-d-y',strtotime($value['created_at'])) !!} @endif',
                            y:  {!! number_format($datapack['weeklyaverage'],'2','.','') !!}
                        },
                        @endif
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(255, 255, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 255, 255, 1)'
                    ],
                    borderWidth: 1
                }, {
                    radius: .25,
                    label: 'Monthly Average Income',
                    data: [
                            @foreach($totalnodeslist as $value)
							<?php $datapack = json_decode($value['data'], true); ?>
                            @if(isset($datapack['monthlyaverage']))
                        {
                            x: '@if ($type == "1hour" or $type == "1day") {!! date('h:i a',strtotime($value['created_at'])) !!} @else {!! date('m-d-y',strtotime($value['created_at'])) !!} @endif',
                            y: {!! number_format($datapack['monthlyaverage'],'2','.','') !!}
                        },
                        @endif
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(0, 222, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(0, 222, 255, 1)'
                    ],
                    borderWidth: 1
                }]
                @else
                datasets: [{
                    radius: .25,
                    label: 'activeNodes',
                    data: [
                            @foreach($totalnodeslist as $value)
                        {
                            x: '@if ($type == "1hour" or $type == "1day") {!! date('h:i a',strtotime($value['created_at'])) !!} @else {!! date('m-d-y',strtotime($value['created_at'])) !!} @endif',
                            y: {!! number_format($value['total'],'0','.','') !!}
                        },
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(129, 57, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(129, 57, 192,1)'
                    ],
                    borderWidth: 1
                }, {
                    radius: .25,
                    label: 'Daily (usd)',
                    data: [
                            @foreach($totalnodeslist as $value)
							<?php $datapack = json_decode($value['data'], true); ?>
                        {
                            x: '@if ($type == "1hour" or $type == "1day") {!! date('h:i a',strtotime($value['created_at'])) !!} @else {!! date('m-d-y',strtotime($value['created_at'])) !!} @endif',
                            y: {!! number_format($datapack['incomedaily'],'2','.','') !!}
                        },
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(255, 255, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 255, 255, 1)'
                    ],
                    borderWidth: 1
                }, {
                    radius: .25,
                    label: 'Weekly (usd)',
                    data: [
                            @foreach($totalnodeslist as $value)
							<?php $datapack = json_decode($value['data'], true); ?>
                        {
                            x: '@if ($type == "1hour" or $type == "1day") {!! date('h:i a',strtotime($value['created_at'])) !!} @else {!! date('m-d-y',strtotime($value['created_at'])) !!} @endif',
                            y: {!! number_format($datapack['incomeweekly'],'2','.','') !!}
                        },
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(0, 222, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(0, 222, 255, 1)'
                    ],
                    borderWidth: 1
                }, {
                    radius: .25,
                    label: 'Monthly (usd)',
                    data: [
                            @foreach($totalnodeslist as $value)
							<?php $datapack = json_decode($value['data'], true); ?>
                        {
                            x: '@if ($type == "1hour" or $type == "1day") {!! date('h:i a',strtotime($value['created_at'])) !!} @else {!! date('m-d-y',strtotime($value['created_at'])) !!} @endif',
                            y: {!! number_format($datapack['incomemonth'],'2','.','') !!}
                        },
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(73, 255, 124, 0.2)'
                    ],
                    borderColor: [
                        'rgba(73, 255, 124, 1)'
                    ],
                    borderWidth: 1
                }]
                @endif
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [
                        {
                            display: true,
                            ticks: {
                                //callback: function (dataLabel, index) {
                                //    @if ($type == "1day")
                                //        return index % 1 === 0 ? dataLabel : '';
                                //    @elseif ($type == "1hour")
                                //        return index % 1 === 0 ? dataLabel : '';
                                //    @elseif ($type == "30day")
                                //        return index % 7 === 0 ? dataLabel : '';
                                //    @elseif ($type == "90day")
                                //         return index % 1 === 0 ? dataLabel : '';
                                //     @else
                                //         return index % 30 === 0 ? dataLabel : '';
                                //    @endif
                                //}
                            }
                        }
                    ]

                }
            }
        });
    }
    runit();
</script>
