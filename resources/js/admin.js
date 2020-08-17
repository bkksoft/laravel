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


const Sidebar = {

    mounted() {
        const vm = this;
        this.status = null;
        this.supportsLocalStorage = true,
        this.isOpen = false;

        this.checkLocalStorageFunctionality();
        this.init();

        // console.log( '..isOpen..', this.isOpen );

        // event 
        const $sidebar = $('#sidebar');
        const $nav = $('.sidebar-menu');
        const $subview = $('.sidebar-sub-menu');
        const $navExact = $('.sidebar-nav').find('>.active');


        if(this.isOpen){
            $sidebar.addClass('is-collapsed', function () {
                $sidebar.removeClass('off');
            });
        }
        else{
            $sidebar.removeClass('is-collapsed', function () {
                $sidebar.removeClass('off');
            });
        }

        $sidebar.toggleClass('is-collapsed', this.isOpen)

        setTimeout(()=>{
            $sidebar.removeClass('off');
        }, 100)

        $('[data-toggle=nav-collapsed]').click(e=>{
            e.preventDefault();

            if( $sidebar.hasClass('is-collapsed') ){
                $sidebar.removeClass('is-collapsed');
                vm.accept()
            }
            else{
                $sidebar.addClass('is-collapsed');
                vm.removeCookie();
            }
        });

        $nav.mouseenter( e=> {
            if(!$sidebar.hasClass('is-collapsed-focus')){
                $sidebar.addClass('is-collapsed-focus');
            }
        });

        $sidebar.mouseleave( e => {
            if($sidebar.hasClass('is-collapsed-focus')){
                $sidebar.removeClass('is-collapsed-focus');

                rollbackExact($navExact)
                // $navExact.addClass('active').siblings().removeClass('active');
            }
        })

        $('[data-toggle=nav]').click( function(e) {
            
            const $li = $(this).parent();

            if( rollbackExact($li) ){
                e.preventDefault();
            }
        });

        function rollbackExact( $li ) {

            const control = $li.children().attr('aria-controls');
            const $sub = $subview.filter('[aria-labelledby='+ control +'-nav]');

            $li.addClass('active').siblings().removeClass('active');

            $subview.addClass('d-none');
            if($sub.length){
                // e.preventDefault();
                $sub.removeClass('d-none');
                return true;
            }
        }
    },

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
        // console.log( this.status, this.debug, this.isOpen, localStorage.getItem("cookie-sidebar-collapsed") );
        // this.$emit('clicked-accept');
    },
    removeCookie () {
        localStorage.removeItem('cookie-sidebar-collapsed');
        this.status = null;
    },

}

$(function () {

    
    Sidebar.mounted();
    
})