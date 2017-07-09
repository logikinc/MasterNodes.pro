<script>
    var ctxd1 = $("#do1Chart");
    var ctxd2 = $("#do2Chart");
    var ctxd3 = $("#do3Chart");
    var ctxd4 = $("#do4Chart");

		<?php $i = 1; ?>
            @foreach ($country as $key => $value)
            @if ($i <= 4)
    var datadc{!! $i !!} = [{!! $value['countb'] !!},{!! $value['count'] !!}];
            @endif
		<?php $i++; ?>
            @endforeach

    var myDoughnutChart = new Chart(ctxd1, {
            type: 'doughnut',
            data: {
                labels: [
                    "Red",
                    "Blue"
                ],
                datasets: [
                    {
                        data: datadc1,
                        backgroundColor: [
                            "#DDDDDC",
                            "#DC2B2E"
                        ],
                        hoverBackgroundColor: [
                            "#DDDDDC",
                            "#DC2B2E"
                        ]
                    }]
            },
            options: {
                cutoutPercentage: 70,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 1,
                    onComplete: function () {
                        var chartInstance = this.chart,
                            ctx = chartInstance.ctx;
                        ctx.font = Chart.helpers.fontString(25, 'normal', 'Oswald');
                        ctx.fillStyle = '#FFFFFF';
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function (dataset, i) {
                            var meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function (bar, index) {
                                var data = dataset.data[1];
                                ctx.fillText(data + '%', bar._model.x, bar._model.y + 15);
                            });
                        });
                    }
                },
                tooltips: {
                    enabled: false
                },
                legend: {
                    display: false
                },
                elements: {
                    arc: {
                        borderWidth: 0
                    }
                },
                scales: {
                    xAxes: [{
                        display: false,
                        categoryPercentage: 1.0,
                        barPercentage: 1.0
                    }], yAxes: [{
                        display: false
                    }]
                }
            }
        });
    var myDoughnutChart = new Chart(ctxd2, {
        type: 'doughnut',
        data: {
            labels: [
                "Red",
                "Blue"
            ],
            datasets: [
                {
                    data: datadc2,
                    backgroundColor: [
                        "#DDDDDC",
                        "#B675FF"
                    ],
                    hoverBackgroundColor: [
                        "#DDDDDC",
                        "#B675FF"
                    ]
                }]
        },
        options: {
            cutoutPercentage: 70,
            hover: {
                animationDuration: 0
            },
            animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(25, 'normal', 'Oswald');
                    ctx.fillStyle = '#FFFFFF';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[1];
                            ctx.fillText(data + '%', bar._model.x, bar._model.y + 15);
                        });
                    });
                }
            },
            tooltips: {
                enabled: false
            },
            legend: {
                display: false
            },
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            scales: {
                xAxes: [{
                    display: false,
                    categoryPercentage: 1.0,
                    barPercentage: 1.0
                }], yAxes: [{
                    display: false
                }]
            }
        }
    });
    var myDoughnutChart = new Chart(ctxd3, {
        type: 'doughnut',
        data: {
            labels: [
                "Red",
                "Blue"
            ],
            datasets: [
                {
                    data: datadc3,
                    backgroundColor: [
                        "#DDDDDC",
                        "#51A5DC"
                    ],
                    hoverBackgroundColor: [
                        "#DDDDDC",
                        "#51A5DC"
                    ]
                }]
        },
        options: {
            cutoutPercentage: 70,
            hover: {
                animationDuration: 0
            },
            animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(25, 'normal', 'Oswald');
                    ctx.fillStyle = '#FFFFFF';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[1];
                            ctx.fillText(data + '%', bar._model.x, bar._model.y + 15);
                        });
                    });
                }
            },
            tooltips: {
                enabled: false
            },
            legend: {
                display: false
            },
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            scales: {
                xAxes: [{
                    display: false,
                    categoryPercentage: 1.0,
                    barPercentage: 1.0
                }], yAxes: [{
                    display: false
                }]
            }
        }
    });
    var myDoughnutChart = new Chart(ctxd4, {
        type: 'doughnut',
        data: {
            labels: [
                "Red",
                "Blue"
            ],
            datasets: [
                {
                    data: datadc4,
                    backgroundColor: [
                        "#DDDDDC",
                        "#56F3A4"
                    ],
                    hoverBackgroundColor: [
                        "#DDDDDC",
                        "#56F3A4"
                    ]
                }]
        },
        options: {
            cutoutPercentage: 70,
            hover: {
                animationDuration: 0
            },
            animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(25, 'normal', 'Oswald');
                    ctx.fillStyle = '#FFFFFF';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[1];
                            ctx.fillText(data + '%', bar._model.x, bar._model.y + 15);
                        });
                    });
                }
            },
            tooltips: {
                enabled: false
            },
            legend: {
                display: false
            },
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            scales: {
                xAxes: [{
                    display: false,
                    categoryPercentage: 1.0,
                    barPercentage: 1.0
                }], yAxes: [{
                    display: false
                }]
            }
        }
    });
    window.dispatchEvent(new Event('resize'));
</script>