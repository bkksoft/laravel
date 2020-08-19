<template>
    <apexcharts id="revenue-chart" :height="364" type="line" :options="options" :series="series"></apexcharts>
</template>

<script>

import VueApexCharts from "vue-apexcharts";


export default {

    components: {
        apexcharts: VueApexCharts
    },

    data(){
        return{
            series: [
                { name: "Current Week", data: [10, 20, 15, 25, 20, 30, 20] },
                { name: "Previous Week", data: [0, 15, 10, 30, 15, 35, 25] },
            ],
            options: {

                chart: {
                    height: 364,
                    type: "line",
                    
                    dropShadow: { enabled: !0, opacity: 0.2, blur: 7, left: -7, top: 7 },

                    toolbar: {
                        show: 0,
                    },

                    animations: {
                        enabled: false,
                    },
                },
                dataLabels: { enabled: !1 },
                stroke: { curve: "smooth", width: 4 },

                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
                zoom: { enabled: !1 },
                legend: { show: !1 },
                xaxis: { type: "string", categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"], tooltip: { enabled: !1 }, axisBorder: { show: !1 } },
                yaxis: {
                    labels: {
                        formatter: function (e) {
                            return e + "k";
                        },
                        offsetX: -15,
                    },
                },
            }
        }
    }
}
</script>
