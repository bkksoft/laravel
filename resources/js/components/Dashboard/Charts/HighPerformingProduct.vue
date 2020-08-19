<template>
    <div class="defaultPanel">
        <apexcharts type="bar" :options="ops" :series="series"></apexcharts>
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
                chart: {
                    id: 'vuechart-example'
                },
                xaxis: {
                    categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998]
                }
            },
            series: [{
                name: 'series-1',
                data: [30, 40, 45, 50, 49, 60, 70, 91]
            }],

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

        const chart = new ApexCharts(document.querySelector("#high-performing-product"), this.ops2);
        chart.render();

    }
}
</script>

<style lang="scss" scope>
.defaultPanel {
  flex-basis: 100%;
}
</style>