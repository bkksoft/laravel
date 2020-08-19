<template>
    <div class="map-weapper">
        <div id="world-map-markers" style="height: 224px"></div>
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

.map-weapper{
    position: relative;
    height: 224px;

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
