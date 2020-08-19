<template>
    <div class="map-weapper mt-3 mb-3">
        <div id="world-map-markers" :style="mapStyle"></div>
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

    data(){

        return {
            mapStyle: {
                height: `300px`
            }
        }
    },

    methods:{
        initMaps(){

            const $map = $('#world-map-markers');

            $map.empty();

            $map.vectorMap({
                map: "world_mill_en",
                normalizeFunction: "polynomial",
                hoverOpacity: 0.7,
                hoverColor: !1,
                regionStyle: { initial: { fill: "rgba(93,106,120,0.2)" } },
                series: {
                    regions: [
                        {
                            values: {
                                KR: "#e6ebff",
                                CA: "#b3c3ff",
                                GB: "#809bfe",
                                NL: "#4d73fe",
                                IT: "#1b4cfe",
                                FR: "#727cf5",
                                JP: "#e7fef7",
                                US: "#e7e9fd",
                                CN: "#8890f7",
                                IN: "#727cf5"
                            },
                            attribute: "fill"
                        }
                    ]
                },
                backgroundColor: "transparent",
                zoomOnScroll: !1
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