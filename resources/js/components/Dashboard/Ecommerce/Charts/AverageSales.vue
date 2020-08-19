<template>
<div>
  <apexcharts id="average-sales" :height="options.chart.height" type="donut" :options="options" :series="series"></apexcharts>

  <div class="chart-widget-list">
        <p>
            <i class="mdi mdi-square text-primary"></i> Direct
            <span class="float-right">$300.56</span>
        </p>
        <p>
            <i class="mdi mdi-square text-danger"></i> Affilliate
            <span class="float-right">$135.18</span>
        </p>
        <p>
            <i class="mdi mdi-square text-success"></i> Sponsored
            <span class="float-right">$48.96</span>
        </p>
        <p class="mb-0">
            <i class="mdi mdi-square text-warning"></i> E-mail
            <span class="float-right">$154.02</span>
        </p>
    </div>
</div>
    
</template>

<script>
import VueApexCharts from "vue-apexcharts";

export default {
    components: {
        apexcharts: VueApexCharts
    },

    data(){
        return{
            series: [44, 55, 41, 17],
            options: {

                chart: { height: 213, type: "donut" },
                legend: { show: !1 },
                stroke: { colors: ["transparent"] },
                
                labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
                responsive: [{ breakpoint: 480, options: { chart: { width: 200 }, legend: { position: "bottom" } } }],
            }
        }
    }
}
</script>

<style>

</style>