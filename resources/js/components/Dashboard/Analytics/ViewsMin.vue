<template>
  <apexcharts :id="id" :height="options.chart.height" :type="options.chart.type" :options="options" :series="series"></apexcharts>
</template>

<script>
import VueApexCharts from "vue-apexcharts";

export default {
    components: {
        apexcharts: VueApexCharts
    },

    data(){
        for (var r = [], s = 10; 1 <= s; s--) r.push(s + " min ago");

        return{
            id: 'views-min',
            series: [
                {
                    name: "Views",
                    data: (function(e) {
                        for (var t = [], a = 0; a < e; a++)
                            t.push(Math.floor(90 * Math.random()) + 10);
                        return t;
                    })(10)
                }
            ],
            options: {

                chart: { height: 150, type: "bar", stacked: !0, toolbar: { show: 0 }, animations: { enabled: false }  },
                plotOptions: {
                    bar: {
                        horizontal: !1,
                        endingShape: "rounded",
                        columnWidth: "22%",
                        dataLabels: { position: "top" }
                    }
                },
                dataLabels: {
                    enabled: !0,
                    offsetY: -24,
                    style: { fontSize: "12px", colors: ["#98a6ad"] }
                },
                
                zoom: { enabled: !1 },
                legend: { show: !1 },
                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
                xaxis: {
                    categories: r,
                    labels: { show: !1 },
                    axisTicks: { show: !1 },
                    axisBorder: { show: !1 }
                },
                yaxis: { labels: { show: !1 } },
                fill: {
                    type: "gradient",
                    gradient: {
                        inverseColors: !0,
                        shade: "light",
                        type: "horizontal",
                        shadeIntensity: 0.25,
                        gradientToColors: void 0,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100, 100, 100]
                    }
                },
                tooltip: {
                    y: {
                        formatter: function(e) {
                            return e;
                        }
                    }
                }
            }
        }
    }
}
</script>