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
            id: 'dash-campaigns-chart',
            series: [86, 36, 50],
            options: {

                chart: { height: 304, type: "radialBar" },
                colors: colors,
                
                labels: ["Total Sent", "Reached", "Opened"],
                plotOptions: { radialBar: { track: { margin: 8 } } }
            }
        }
    }
}
</script>