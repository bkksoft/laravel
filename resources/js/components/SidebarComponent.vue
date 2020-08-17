<template>
    <div id="sidebar" class="sidebar-container" :class="[is_allocation && 'sidebar-sub-menu-allocation', isOpen && 'is-collapsed', is_collapsed_focus && 'is-collapsed-focus']" role="navigation">
        <div class="sidebar-overlay" @mouseleave="is_collapsed_focus=false">

            <div class="sidebar-menu" @mouseenter="is_collapsed_focus=true">

                <div class="sidebar-header">
                    <div class="sidebar-header-account media">
                        <div class="account-logo"></div>
                        <div class="media-body account-box ml-3">
                            <h1 class="account-name fs-24 fw-600 text-capitalize mb-0">ชง</h1>
                            <div class="account-subname fs-13"><span>บทบาท :</span> <span class="ml-1">เจ้าของ</span></div>
                        </div>
                    </div>

                    <div class="sidebar-header-progressbar">
                        <div class="fs-13">ตั้งค่าเว็บไซต์ของคุณ</div>
                        <div class="progress my-1">
                            <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                class="progress-bar w-75"></div>
                        </div>
                        <div class="fs-11">5/13 เสร็จแล้ว</div>
                    </div>
                </div>

                <div class="sidebar-body wk-scrollbar">
                    <ul class="sidebar-nav">
                        <li v-for="nav in navs" :key="nav.id" :class="nav.isExactActive && 'active'" class="nav-item">
                            <a :href="nav.path" class="nav-link" data-toggle="nav" :control="nav.id">
                                <div class="nav-link-text">
                                    <div class="icon" v-if="nav.icon" v-html="nav.icon"></div>
                                    <div class="text">{{ nav.name }}</div>
                                </div>

                                <svg v-if="nav.items" class="arrow" viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M9.14644661,8.14512634 C9.34170876,7.9498642 9.65829124,7.9498642 9.85355339,8.14512634 L14.206596,12.5 L9.85355339,16.8536987 C9.65829124,17.0489609 9.34170876,17.0489609 9.14644661,16.8536987 C8.95118446,16.6584366 8.95118446,16.3418541 9.14644661,16.1465919 L12.7923824,12.5 L9.14644661,8.85223312 C8.95118446,8.65697098 8.95118446,8.34038849 9.14644661,8.14512634 Z"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <sub-menu v-for="nav in navs" :key="`sub-menu-`+nav.id" :nav="nav"></sub-menu>

        </div>
    </div>
</template>

<script>

import {routes} from '../navigations'
import SubMenu from './SubMenu'


function hasOwn(obj, key) {
    return Object.prototype.hasOwnProperty.call(obj, key);
} // Escape special characters.

function escapeRe(str) {
    return str.replace(/[.*+?^$|[\](){}\\-]/g, '\\$&');
} // Return a future date by the given string.
function computeExpires(str) {
    var lastCh = str.charAt(str.length - 1);
    var value = parseInt(str, 10);
    var expires = new Date();
    switch (lastCh) {
    case 'Y':
        expires.setFullYear(expires.getFullYear() + value);
        break;
    case 'M':
        expires.setMonth(expires.getMonth() + value);
        break;
    case 'D':
        expires.setDate(expires.getDate() + value);
        break;
    case 'h':
        expires.setHours(expires.getHours() + value);
        break;
    case 'm':
        expires.setMinutes(expires.getMinutes() + value);
        break;
    case 's':
        expires.setSeconds(expires.getSeconds() + value);
        break;
    default:
        expires = new Date(str);
    }
    return expires;
} // Convert an object to a cookie option string.
function convert(opts) {
    var res = ''; // eslint-disable-next-line
    for (var key in opts) {
    if (hasOwn(opts, key)) {
        if (/^expires$/i.test(key)) {
        var expires = opts[key];
        if (typeof expires !== 'object') {
            expires += typeof expires === 'number' ? 'D' : '';
            expires = computeExpires(expires);
        }
        res += ";" + key + "=" + expires.toUTCString();
        } else if (/^secure$/.test(key)) {
        if (opts[key]) {
            res += ";" + key;
        }
        } else {
        res += ";" + key + "=" + opts[key];
        }
    }
    }
    if (!hasOwn(opts, 'path')) {
    res += ';path=/';
    }
    return res;
}
function getCookie(key, decoder) {
    if (decoder === void 0) {
    decoder = decodeURIComponent;
    }
    if (typeof key !== 'string' || !key) {
    return null;
    }
    var reKey = new RegExp("(?:^|; )" + escapeRe(key) + "(?:=([^;]*))?(?:;|$)");
    var match = reKey.exec(document.cookie);
    if (match === null) {
    return null;
    }
    return typeof decoder === 'function' ? decoder(match[1]) : match[1];
} // The all cookies
function setCookie(key, value, encoder, options) {
    if (encoder === void 0) {
    encoder = encodeURIComponent;
    }
    if (typeof encoder === 'object' && encoder !== null) {
    /* eslint-disable no-param-reassign */
    options = encoder;
    encoder = encodeURIComponent;
    /* eslint-enable no-param-reassign */
    }
    var attrsStr = convert(options || {});
    var valueStr = typeof encoder === 'function' ? encoder(value) : value;
    var newCookie = key + "=" + valueStr + attrsStr;
    document.cookie = newCookie;
} // Remove a cookie by the specified key.

export default {

    components: {
        SubMenu,
    },

    data(){
        return {
            navs: routes,

            is_allocation: false,

            status: null,
            supportsLocalStorage: true,
            isOpen: false,


            is_collapsed_focus: false,
        }
    },

    created(){

        var loc = window.location.pathname;

        // set path
        let isExactActive = false;
        for (let index = 0; index < this.navs.length; index++) {
            const nav = this.navs[index];

            if(nav.path==loc){
                this.navs[index]['isActive'] = true;
            }

            if( loc=='/' ){
                if( loc==nav.path ){
                    this.navs[index]['isExactActive'] = true;

                    if(nav.items){
                        this.is_allocation = true;
                    }
                }
            }
            else if(nav.path.search(loc) >= 0){
                this.navs[index]['isExactActive'] = true;
                isExactActive = true;

                if(nav.items){
                    this.is_allocation = true;
                }
            }


            if(nav.items){

                // if( isExactActive ){
                //     this.is_allocation = true;
                // }

                for (let i = 0; i < nav.items.length; i++) {
                    const item = nav.items[i];

                    if( item.group ){

                        for (let n = 0; n < item.group.items.length; n++) {
                            const sub = item.group.items[n];

                            if( sub.path==loc ){
                                this.navs[index]['items'][i]['group']['items'][n]['isActive'] = true;
                            }
                        }
                    }
                    else if( item.hr ){

                    }
                    else if( item.path==loc ){
                        this.navs[index]['items'][i]['isActive'] = true;
                    }
                }
            }
        }
    },

    mounted(){
        const vm = this
        $('[data-toggle=nav-collapsed]').click( e => {
            e.preventDefault();

            vm.isOpen = !vm.isOpen;
            if(vm.isOpen){
                vm.removeCookie();
            }
            else{
                vm.accept();
            }
            // this.is_allocation = !this.is_allocation;
        });

        this.checkLocalStorageFunctionality();
        this.init();

        // console.log( '..isOpen..', this.isOpen );
    },

    methods: {
        init() {
            var visitedType = this.getCookieStatus();
            if (visitedType && (visitedType === 'accept' || visitedType === 'decline' || visitedType === 'postpone')) {
                this.isOpen = false;
            }
            if (!visitedType) {
                this.isOpen = true;
            }
            this.status = visitedType;

            // console.log( 'init..', visitedType );
            // this.$emit('status', visitedType);
        },
        checkLocalStorageFunctionality() {
            // Check for availability of localStorage
            try {
                var test = '__cookie-sidebar-collapsed';
                window.localStorage.setItem(test, test);
                window.localStorage.removeItem(test);
            } catch (e) {
                // console.error('Local storage is not supported, falling back to cookie use');
                this.supportsLocalStorage = false;
            }
        },
        setCookieStatus(type) {
            // console.log( 'setCookieStatus..', type );

            if (this.supportsLocalStorage) {
                if (type === 'accept') {
                    localStorage.setItem("cookie-sidebar-collapsed", 'accept');
                }
                if (type === 'decline') {
                    localStorage.setItem("cookie-sidebar-collapsed", 'decline');
                }
                if (type === 'postpone') {
                    localStorage.setItem("cookie-sidebar-collapsed", 'postpone');
                }
            } else {
                if (type === 'accept') {
                    setCookie("cookie-sidebar-collapsed", 'accept');
                }
                if (type === 'decline') {
                    setCookie("cookie-sidebar-collapsed", 'decline');
                }
                if (type === 'postpone') {
                    setCookie("cookie-sidebar-collapsed", 'postpone');
                }
            }
        },

        getCookieStatus() {
            // console.log('getCookieStatus...', this.supportsLocalStorage );
            if (this.supportsLocalStorage) {
                return localStorage.getItem("cookie-sidebar-collapsed")
            } else {
                return getCookie("cookie-sidebar-collapsed")
            }
        },
        accept() {
            if (!this.debug) {
                this.setCookieStatus('accept');
            }
            this.status = 'accept';
            this.isOpen = false;
            console.log( this.status, this.debug, this.isOpen, localStorage.getItem("cookie-sidebar-collapsed") );
            // this.$emit('clicked-accept');
        },
        removeCookie () {
            localStorage.removeItem('cookie-sidebar-collapsed');
            this.status = null;
        },
    }

}
</script>

<style>

</style>
