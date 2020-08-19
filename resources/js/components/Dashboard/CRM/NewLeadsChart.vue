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
            id: 'new-leads-chart',
            series: [{ data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54] }],
            options: {

                chart: { type: "line", height: 60, sparkline: { enabled: !0 } },
                
                stroke: { width: 2, curve: "smooth" },
                markers: { size: 0 },
                colors: colors,
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