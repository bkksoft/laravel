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
            id: 'sessions-browser',
            series: [{ name: "Usage", data: [80, 50, 30, 40, 60, 20] }],
            options: {

                chart: { height: 343, type: "radar", toolbar: { show: 0 }, animations: { enabled: false }  },
                
                labels: [
                    "Chrome",
                    "Firefox",
                    "Safari",
                    "Opera",
                    "Edge",
                    "Explorer"
                ],
                plotOptions: {
                    radar: {
                        size: 130,
                        polygons: {
                            strokeColor: "#e9e9e9",
                            fill: { colors: ["#f8f8f8", "#fff"] }
                        }
                    }
                },
                colors: a,
                yaxis: {
                    labels: {
                        formatter: function(e) {
                            return e + "%";
                        }
                    }
                },
                dataLabels: { enabled: !0 },
                markers: {
                    size: 4,
                    colors: ["#fff"],
                    strokeColor: a[0],
                    strokeWidth: 2
                }
            }
        }
    }
}
</script>