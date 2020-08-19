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
        var e = new Date(),
            t = (function(e, t) {
                for (
                    var a = new Date(t, e, 1), o = [], r = 0;
                    a.getMonth() === e && r < 15;

                ) {
                    var s = new Date(a);
                    o.push(
                        s.getDate() +
                            " " +
                            s.toLocaleString("en-us", { month: "short" })
                    ),
                        a.setDate(a.getDate() + 1),
                        (r += 1);
                }
                return o;
            })(e.getMonth() + 1, e.getFullYear())

        return{
            id: 'sessions-overview',
            series: [
                {
                    name: "Sessions",
                    data: [
                        10,
                        20,
                        5,
                        15,
                        10,
                        20,
                        15,
                        25,
                        20,
                        30,
                        25,
                        40,
                        30,
                        50,
                        35
                    ]
                }
            ],
            options: {

                chart: { height: 309, type: "area", toolbar: { show: 0 }, animations: { enabled: false } },
                dataLabels: { enabled: !1 },
                stroke: { curve: "smooth", width: 4 },
                
                zoom: { enabled: !1 },
                legend: { show: !1 },
                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
                xaxis: {
                    type: "string",
                    categories: t,
                    tooltip: { enabled: !1 },
                    axisBorder: { show: !1 },
                    labels: {}
                },
                yaxis: {
                    labels: {
                        formatter: function(e) {
                            return e + "k";
                        },
                        offsetX: -15
                    }
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        type: "vertical",
                        shadeIntensity: 1,
                        inverseColors: !1,
                        opacityFrom: 0.45,
                        opacityTo: 0.05,
                        stops: [45, 100]
                    }
                }
            }
        }
    }
}
</script>

<style>

</style>