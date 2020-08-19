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
        const a = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];

        return{
            id: 'sessions-os',
            series: [44, 55, 67, 83],
            options: {

                chart: { height: 268, type: "radialBar" },
                plotOptions: {
                    radialBar: {
                        dataLabels: {
                            name: { fontSize: "22px" },
                            value: { fontSize: "16px" },
                            total: {
                                show: !0,
                                label: "OS",
                                formatter: function(e) {
                                    return 8541;
                                }
                            }
                        }
                    }
                },
                colors: a,
                
                labels: ["Windows", "Macintosh", "Linux", "Android"]
            }
        }
    }
}
</script>