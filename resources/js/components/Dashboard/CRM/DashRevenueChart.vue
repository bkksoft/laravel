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
        const colors = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];

        return{
            id: 'dash-revenue-chart',
            series: [
                {
                    name: "Total Revenue",
                    type: "area",
                    data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33, 43]
                },
                {
                    name: "Total Pipeline",
                    type: "line",
                    data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43, 56]
                }
            ],
            options: {

                chart: { height: 321, type: "line", toolbar: { show: !1 } },
                stroke: { curve: "smooth", width: 2 },
                
                fill: { type: "solid", opacity: [0.35, 1] },
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec"
                ],
                markers: { size: 0 },
                colors: colors,
                yaxis: [{ title: { text: "Revenue (USD)" }, min: 0 }],
                tooltip: {
                    shared: !0,
                    intersect: !1,
                    y: {
                        formatter: function(o) {
                            return void 0 !== o ? o.toFixed(0) + "k" : o;
                        }
                    }
                },
                grid: { borderColor: "#f1f3fa", padding: { bottom: 5 } },
                legend: { fontSize: "14px", fontFamily: "14px", offsetY: 5 },
                responsive: [
                    {
                        breakpoint: 600,
                        options: { yaxis: { show: !1 }, legend: { show: !1 } }
                    }
                ]
            }
        }
    }
}
</script>