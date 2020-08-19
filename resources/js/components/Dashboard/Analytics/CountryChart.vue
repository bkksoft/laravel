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
            id: 'country-chart',
            series: [
                {
                    name: "Sessions",
                    data: [90, 75, 60, 50, 45, 36, 28, 20, 15, 12]
                }
            ],
            options: {

                chart: { height: 320, type: "bar", toolbar: { show: 0 }, animations: { enabled: false }  },
                plotOptions: { bar: { horizontal: !0 } },
                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
                dataLabels: { enabled: !1 },
                
                xaxis: {
                    categories: [
                        "India",
                        "China",
                        "United States",
                        "Japan",
                        "France",
                        "Italy",
                        "Netherlands",
                        "United Kingdom",
                        "Canada",
                        "South Korea"
                    ],
                    axisBorder: { show: !1 },
                    labels: {
                        formatter: function(e) {
                            return e + "%";
                        }
                    }
                },
                grid: { strokeDashArray: [5] }
            }
        }
    }
}
</script>