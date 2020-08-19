<template>
    <div class="apexcharts-panel">
        <h4 class="header-title mb-3">Projections Vs Actuals</h4>

        <apexcharts id="high-performing-product" :height="225" type="bar" :options="ops" :series="series"></apexcharts>
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

            ops: {

                // parentHeightOffset: 0,

                chart: {
                    stacked: !0,

                    toolbar: {
                        show: 0,
                    },

                    animations: {
                        enabled: false,
                    },

                },

                plotOptions: { bar: { horizontal: !1, columnWidth: "20%" } },

                grid: { padding: { left: 0, right: 0 } },

                dataLabels: { enabled: !1 },

                stroke: { show: !0, width: 2, colors: ["transparent"] },

                legend: { show: !1 },
                colors: ["#727cf5", "#e3eaef"],
                xaxis: { categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], axisBorder: { show: !1 } },
                yaxis: {
                    labels: {
                        formatter: function (e) {
                            return e + "k";
                        },
                        offsetX: -15,
                    },
                },
                fill: { opacity: 1 },
                tooltip: {
                    y: {
                        formatter: function (e) {
                            return "$" + e + "k";
                        },
                    },
                },
            },


            series: [
                { name: "Actual", data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81] },
                { name: "Projection", data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59] },
            ],



            options: {
                series: [
                    {
                        name: 'TEAM A',
                        type: 'column',
                        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                    },
                    {
                        name: 'TEAM B',
                        type: 'area',
                        data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
                    },
                    {
                        name: 'TEAM C',
                        type: 'line',
                        data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
                    },
                ],

                chart: {
                    // height: 350,
                    type: 'line',
                    stacked: false,
                },

                stroke: {
                    width: [0, 2, 5],
                    curve: 'smooth'
                },

                plotOptions: {
                    bar: {
                        columnWidth: '50%'
                    }
                },

                fill: {
                    opacity: [0.85, 0.25, 1],
                    gradient: {
                        inverseColors: false,
                        shade: 'light',
                        type: "vertical",
                        opacityFrom: 0.85,
                        opacityTo: 0.55,
                        stops: [0, 100, 100, 100]
                    }
                },

                labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003',
                '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'
                ],
                markers: {
                    size: 0
                },
                xaxis: {
                    type: 'datetime'
                },
                yaxis: {
                    title: {
                        text: 'Points',
                    },
                    min: 0
                },
                tooltip: {
                    shared: false,
                    intersect: false,
                    y: {
                        formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }
                        return y;

                        }
                    }
                }
            },

            ops2:{
                chart: {
                    type: 'line',
                    width: '100%',
                    toolbar: {
                        show: false
                    }
                },
                series: [{
                    name: 'sales',
                    data: [30,40,35,50,49,60,70,91,125]
                }],
                xaxis: {
                    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
                },


            }
        }
    },
    created(){


    },
    mounted(){

        // const chart = new ApexCharts(document.querySelector("#high-performing-product"), this.ops2);
        // chart.render();

    }
}
</script>

<style lang="scss" scope>
.apexcharts-panel {
//   flex-basis: 100%;
  position: relative;
}

.apexcharts-xaxis text, .apexcharts-yaxis text{
    fill: #adb5bd;
    font-family: 'Sarabun', sans-serif;
}
// .apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
//     pointer-events: none;
//     opacity: 0;
//     transition: 0.15s ease all;
// }
</style>
