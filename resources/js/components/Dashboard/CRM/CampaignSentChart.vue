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
            id: 'campaign-sent-char',
            series: [{ data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54] }],
            options: {

                chart: { type: "bar", height: 60, sparkline: { enabled: !0 } },
                plotOptions: { bar: { columnWidth: "60%" } },
                colors: colors,
                
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                xaxis: { crosshairs: { width: 1 } },
                tooltip: {
                    fixed: { enabled: !1 },
                    x: { show: !1 },
                    y: {
                        title: {
                            formatter: function(o) {
                                return "";
                            }
                        }
                    },
                    marker: { show: !1 }
                }
            }
        }
    }
}
</script>