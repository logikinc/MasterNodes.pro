<script>
    var ctxb = $("#barChart");
    var myBarChart = new Chart(ctxb, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [
                {
                    backgroundColor: [
                        '#6E20F3',
                        '#4EBDE4',
                        '#6E20F3',
                        '#4EBDE4',
                        '#6E20F3',
                        '#4EBDE4'
                    ],
                    borderColor: [
                        '#6E20F3',
                        '#4EBDE4',
                        '#6E20F3',
                        '#4EBDE4',
                        '#6E20F3',
                        '#4EBDE4'
                    ],
                    borderWidth: 1,
                    data: [
                        @foreach ($blockdetails as $value)
                        {!! $value['percent'] !!},
                        @endforeach
                    ],
                }
            ]
        },
        options: {
            responsive: true,
            hover: {
                animationDuration: 0
            },
            animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, 'normal', 'Oswald');
                    ctx.fillStyle = '#FFFFFF';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data + '%', bar._model.x, bar._model.y - 5);
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
            scales: {
                xAxes: [{
                    display: false,
                    categoryPercentage: 1.0,
                    barPercentage: 1.0
                }], yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero: true,
                        max: 150
                    }
                }]
            }
        }
    });
</script>