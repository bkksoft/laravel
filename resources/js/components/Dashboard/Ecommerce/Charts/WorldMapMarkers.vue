<template>
    <div class="map-weapper">
        <div id="world-map-markers" style="height: 224px"></div>

        <div>

            <div>
                <h5 class="mb-1 mt-0 font-weight-normal">New York</h5>
                <div class="progress-w-percent">
                    <span class="progress-value font-weight-bold">72k </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div>
                <h5 class="mb-1 mt-0 font-weight-normal">San Francisco</h5>
                <div class="progress-w-percent">
                    <span class="progress-value font-weight-bold">39k </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div>
                <h5 class="mb-1 mt-0 font-weight-normal">Sydney</h5>
                <div class="progress-w-percent">
                    <span class="progress-value font-weight-bold">25k </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div>
                <h5 class="mb-1 mt-0 font-weight-normal">Singapore</h5>
                <div class="progress-w-percent mb-0">
                    <span class="progress-value font-weight-bold">61k </span>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>


<script>

window.$ = window.jQuery = require('jquery');
require('jvectormap');
require('./jquery-jvectormap-world-mill-en.js');


export default {

    mounted(){
        this.initMaps();
    },

    methods:{
        initMaps(){
            // $.fn.vectorMap('addMap', 'world_mill', require('jvectormap-content/world-mill'));

            const $map = $('#world-map-markers');

            $map.empty();

            $map.vectorMap({
                map: "world_mill_en",
                normalizeFunction: "polynomial",
                hoverOpacity: 0.7,
                hoverColor: !1,
                regionStyle: { initial: { fill: "#e3eaef" } },
                markerStyle: { initial: { r: 9, fill: "#727cf5", "fill-opacity": 0.9, stroke: "#fff", "stroke-width": 7, "stroke-opacity": 0.4 }, hover: { stroke: "#fff", "fill-opacity": 1, "stroke-width": 1.5 } },
                backgroundColor: "transparent",
                markers: [
                    { latLng: [40.71, -74], name: "New York" },
                    { latLng: [37.77, -122.41], name: "San Francisco" },
                    { latLng: [-33.86, 151.2], name: "Sydney" },
                    { latLng: [1.3, 103.8], name: "Singapore" },
                ],
                zoomOnScroll: !1,
            });
        }
    }
}
</script>

<style lang="scss">
.progress-w-percent {
    min-height: 20px;
    margin-bottom: 20px;

    .progress-value {
        width: 40px;
        float: right;
        text-align: right;
        line-height: 20px;
    }
    .progress {
        width: calc(100% - 50px);
        float: left;
        margin-top: 8px;
    }

    .progress-sm {
        height: 5px;
    }
}
.map-weapper{
    position: relative;
    // height: 224px;

    .jvectormap-container{
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
        background-color: transparent;
    }

    .jvectormap-label {
        position: absolute;
        display: none;
        border: solid 1px #CDCDCD;
        border-radius: 3px;
        background: #292929;
        color: white;
        font-family: sans-serif, Verdana;
        font-size: smaller;
        padding: 3px;
    }

    .jvectormap-zoomin, .jvectormap-zoomout {
        position: absolute;
        left: 10px;
        border-radius: 3px;
        background: #424242;
        padding: 2px;
        color: white;
        width: 15px;
        height: 15px;
        cursor: pointer;
        line-height: 10px;
        text-align: center;
    }

    .jvectormap-zoomin {
        top: 10px;
    }

    .jvectormap-zoomout {
        top: 30px;
    }
}
</style>
