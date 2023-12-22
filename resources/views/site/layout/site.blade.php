<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title>
        @yield('title')
    </title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('meta_description')"/>

    <meta property="og:url" content="@yield('meta_url')"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('meta_description')"/>
    <meta property="og:image" content="@yield('meta_image')"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ isset($information['icon']) ? $information['icon'] : '' }}">
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "http:\/\/xetienchuyenhaiphongquangninh.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.1"}
        };
        /*! This file is auto-generated */
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='{{ asset('site/wp-includes/css/dist/block-library/style.min.css') }}'
          type='text/css' media='all'/>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
          href='{{ asset('site/wp-content/plugins/contact-form-7/includes/css/styles.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='menu-image-css'
          href='{{ asset('site/wp-content/plugins/menu-image/includes/css/menu-image.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='dashicons-css' href='{{ asset('site/wp-includes/css/dashicons.min.css') }}'
          type='text/css'
          media='all'/>
    <link rel='stylesheet' id='cmoz-style-css'
          href='{{ asset('site/wp-content/plugins/contact-me-on-zalo/assets/css/style-1.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='flatsome-icons-css'
          href='{{ asset('site/wp-content/themes/congnghevietnam.vn/assets/css/fl-icons.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='font-awesome-official-css' href='{{ asset('site/releases/v5.15.1/css/all.css') }}'
          type='text/css'
          media='all' integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
          crossorigin="anonymous"/>
    <link rel='stylesheet' id='flatsome-main-css'
          href='{{ asset('site/wp-content/themes/congnghevietnam.vn/assets/css/flatsome.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='flatsome-style-css'
          href='{{ asset('site/wp-content/themes/congnghevietnam.vn/style.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-official-v4shim-css'
          href='{{ asset('site/releases/v5.15.1/css/v4-shims.css') }}'
          type='text/css' media='all'
          integrity="sha384-WCuYjm/u5NsK4s/NfnJeHuMj6zzN2HFyjhBu/SnZJj7eZ6+ds4zqIM3wYgL59Clf" crossorigin="anonymous"/>
    <style id='font-awesome-official-v4shim-inline-css' type='text/css'>
        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("{{ asset('site/releases/v5.15.1/webfonts/fa-brands-400.eot') }}"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-brands-400.eot') }}?#iefix") format("embedded-opentype"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-brands-400.woff2') }}") format("woff2"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-brands-400.woff') }}") format("woff"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-brands-400.ttf') }}") format("truetype"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-brands-400.svg') }}#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("{{ asset('site/releases/v5.15.1/webfonts/fa-solid-900.eot') }}"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-solid-900.eot') }}?#iefix") format("embedded-opentype"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-solid-900.woff2') }}") format("woff2"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-solid-900.woff') }}") format("woff"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-solid-900.ttf"') }}) format(" truetype "), url("{{ asset('site/releases/v5.15.1/webfonts/fa-solid-900.svg') }}#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url("{{ asset('site/releases/v5.15.1/webfonts/fa-regular-400.eot') }}"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-regular-400.eot') }}?#iefix") format("embedded-opentype"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-regular-400.woff2') }}") format("woff2"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-regular-400.woff') }}") format("woff"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-regular-400.ttf') }}") format("truetype"),
            url("{{ asset('site/releases/v5.15.1/webfonts/fa-regular-400.svg') }}#fontawesome") format("svg");
            unicode-range: U+F004-F005, U+F007, U+F017, U+F022, U+F024, U+F02E, U+F03E, U+F044, U+F057-F059, U+F06E, U+F070, U+F075, U+F07B-F07C, U+F080, U+F086, U+F089, U+F094, U+F09D, U+F0A0, U+F0A4-F0A7, U+F0C5, U+F0C7-F0C8, U+F0E0, U+F0EB, U+F0F3, U+F0F8, U+F0FE, U+F111, U+F118-F11A, U+F11C, U+F133, U+F144, U+F146, U+F14A, U+F14D-F14E, U+F150-F152, U+F15B-F15C, U+F164-F165, U+F185-F186, U+F191-F192, U+F1AD, U+F1C1-F1C9, U+F1CD, U+F1D8, U+F1E3, U+F1EA, U+F1F6, U+F1F9, U+F20A, U+F247-F249, U+F24D, U+F254-F25B, U+F25D, U+F267, U+F271-F274, U+F279, U+F28B, U+F28D, U+F2B5-F2B6, U+F2B9, U+F2BB, U+F2BD, U+F2C1-F2C2, U+F2D0, U+F2D2, U+F2DC, U+F2ED, U+F328, U+F358-F35B, U+F3A5, U+F3D1, U+F410, U+F4AD;
        }
    </style>
    <script type='text/javascript' src='{{ asset('site/wp-includes/js/jquery/jquery.min.js') }}'
            id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset('site/wp-includes/js/jquery/jquery-migrate.min.js') }}'
            id='jquery-migrate-js'></script>
    <script type='text/javascript'
            src='{{ asset('site/wp-content/plugins/sticky-menu-or-anything-on-scroll/assets/js/jq-sticky-anything.min.js') }}'
            id='stickyAnythingLib-js'></script>
    <link rel="https://api.w.org/" href="wp-json/"/>
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/6451"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/>
    <link rel='shortlink' href=''/>
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }</style>
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="{{ asset('site/wp-content/themes/congnghevietnam.vn/assets/css/ie-fallback.css') }}">
        <script src="/cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js">
        </script>
        <script>
        var head = document.getElementsByTagName('head')[0],style = document.createElement('style');
        style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';
        head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);
        </script>
<script src="{{ asset('site/wp-content/themes/congnghevietnam.vn/assets/libs/ie-flexibility.js') }}"></script><![endif]-->
    <link rel="icon" href="favicon.ico">

    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #f05829;
        }

        .full-width .ubermenu-nav, .container, .row {
            max-width: 1238px
        }

        .row.row-collapse {
            max-width: 1208px
        }

        .row.row-small {
            max-width: 1230.5px
        }

        .row.row-large {
            max-width: 1268px
        }

        .header-main {
            height: 44px
        }

        #logo img {
            max-height: 44px
        }

        #logo {
            width: 178px;
        }

        .header-bottom {
            min-height: 10px
        }

        .header-top {
            min-height: 50px
        }

        .transparent .header-main {
            height: 44px
        }

        .transparent #logo img {
            max-height: 44px
        }

        .has-transparent + .page-title:first-of-type, .has-transparent + #main > .page-title, .has-transparent + #main > div > .page-title, .has-transparent + #main .page-header-wrapper:first-of-type .page-title {
            padding-top: 44px;
        }

        .transparent .header-wrapper {
            background-color: rgba(255, 255, 255, 0) !important;
        }

        .transparent .top-divider {
            display: none;
        }

        .header.show-on-scroll, .stuck .header-main {
            height: 60px !important
        }

        .stuck #logo img {
            max-height: 60px !important
        }

        .header-bg-color, .header-wrapper {
            background-color: rgba(255, 255, 255, 0.61)
        }

        .header-bottom {
            background-color: #f1f1f1
        }

        .top-bar-nav > li > a {
            line-height: 16px
        }

        .header-main .nav > li > a {
            line-height: 44px
        }

        .stuck .header-main .nav > li > a {
            line-height: 40px
        }

        .header-bottom-nav > li > a {
            line-height: 16px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 38px
            }

            #logo img {
                max-height: 38px
            }
        }

        .nav-dropdown {
            border-radius: 3px
        }

        .nav-dropdown {
            font-size: 100%
        }

        /* Color */
        .accordion-title.active, .has-icon-bg .icon .icon-inner, .logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active > a, .nav-outline > li.active > a, .cart-icon strong, [data-color='primary'], .is-outline.primary {
            color: #f05829;
        }

        /* Color !important */
        [data-text-color="primary"] {
            color: #f05829 !important;
        }

        /* Background Color */
        [data-text-bg="primary"] {
            background-color: #f05829;
        }

        /* Background */
        .scroll-to-bullets a, .featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current, .nav-pagination > li > span:hover, .nav-pagination > li > a:hover, .has-hover:hover .badge-outline .badge-inner, button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline), .featured-table .title, .is-outline:hover, .has-icon:hover .icon-label, .nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover, .grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt, .nav-box > li > a:hover, .nav-box > li.active > a, .nav-pills > li.active > a, .current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before, .banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner {
            background-color: #f05829;
        }

        /* Border */
        .nav-vertical.nav-tabs > li.active > a, .scroll-to-bullets a.active, .nav-pagination > li > .current, .nav-pagination > li > span:hover, .nav-pagination > li > a:hover, .has-hover:hover .badge-outline .badge-inner, .accordion-title.active, .featured-table, .is-outline:hover, .tagcloud a:hover, blockquote, .has-border, .cart-icon strong:after, .cart-icon strong, .blockUI:before, .processing:before, .loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover {
            border-color: #f05829
        }

        .nav-tabs > li.active > a {
            border-top-color: #f05829
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #f05829
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #f05829
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg, .slider .flickity-prev-next-button:hover .arrow {
            fill: #f05829;
        }

        /* Background Color */
        [data-icon-label]:after, .secondary.is-underline:hover, .secondary.is-outline:hover, .icon-label, .button.secondary:not(.is-outline), .button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step {
            background-color: #ed1c24;
        }

        [data-text-bg="secondary"] {
            background-color: #ed1c24;
        }

        /* Color */
        .secondary.is-underline, .secondary.is-link, .secondary.is-outline, .stars a.active, .star-rating:before, .woocommerce-page .star-rating:before, .star-rating span:before, .color-secondary {
            color: #ed1c24
        }

        /* Color !important */
        [data-text-color="secondary"] {
            color: #ed1c24 !important;
        }

        /* Border */
        .secondary.is-outline:hover {
            border-color: #ed1c24
        }

        .success.is-underline:hover, .success.is-outline:hover, .success {
            background-color: #ec5803
        }

        .success-color, .success.is-link, .success.is-outline {
            color: #ec5803;
        }

        .success-border {
            border-color: #ec5803 !important;
        }

        /* Color !important */
        [data-text-color="success"] {
            color: #ec5803 !important;
        }

        /* Background Color */
        [data-text-bg="success"] {
            background-color: #ec5803;
        }

        body {
            font-family: "Lato", sans-serif
        }

        body {
            font-weight: 400
        }

        body {
            color: #333333
        }

        .nav > li > a {
            font-family: "Lato", sans-serif;
        }

        .mobile-sidebar-levels-2 .nav > li > ul > li > a {
            font-family: "Lato", sans-serif;
        }

        .nav > li > a {
            font-weight: 700;
        }

        .mobile-sidebar-levels-2 .nav > li > ul > li > a {
            font-weight: 700;
        }

        h1, h2, h3, h4, h5, h6, .heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a {
            font-family: "Lato", sans-serif;
        }

        h1, h2, h3, h4, h5, h6, .heading-font, .banner h1, .banner h2 {
            font-weight: 700;
        }

        h1, h2, h3, h4, h5, h6, .heading-font {
            color: #ff6600;
        }

        .breadcrumbs {
            text-transform: none;
        }

        button, .button {
            text-transform: none;
        }

        .section-title span {
            text-transform: none;
        }

        h3.widget-title, span.widget-title {
            text-transform: none;
        }

        .alt-font {
            font-family: "Dancing Script", sans-serif;
        }

        .alt-font {
            font-weight: 400 !important;
        }

        .header:not(.transparent) .header-nav-main.nav > li > a {
            color: #766969;
        }

        .header:not(.transparent) .header-nav-main.nav > li > a:hover, .header:not(.transparent) .header-nav-main.nav > li.active > a, .header:not(.transparent) .header-nav-main.nav > li.current > a, .header:not(.transparent) .header-nav-main.nav > li > a.active, .header:not(.transparent) .header-nav-main.nav > li > a.current {
            color: #000000;
        }

        .header-nav-main.nav-line-bottom > li > a:before, .header-nav-main.nav-line-grow > li > a:before, .header-nav-main.nav-line > li > a:before, .header-nav-main.nav-box > li > a:hover, .header-nav-main.nav-box > li.active > a, .header-nav-main.nav-pills > li > a:hover, .header-nav-main.nav-pills > li.active > a {
            color: #FFF !important;
            background-color: #000000;
        }

        a {
            color: #002c5f;
        }

        a:hover {
            color: #ed1c24;
        }

        .tagcloud a:hover {
            border-color: #ed1c24;
            background-color: #ed1c24;
        }

        .absolute-footer, html {
            background-color: #333333
        }

        /* Custom CSS */
        pre, blockquote, form, figure, p, dl, ul, ol {
            margin-bottom: 0.6em;
        }

        .entry-divider {
            display: none;
        }

        h1.entry-title.mb.uppercase {
            margin-bottom: 20px;
            background: url(wp-content/uploads/2019/11/du-hoc-aac-dong-hanh-cung-khach-hang.png) no-repeat bottom center;
            text-align: center;
            padding-bottom: 28px;
        }

        .col, .gallery-item, .columns {
            padding: 0 15px;
        }

        div#masthead ul.header-nav li a {
            font-size: 88% !important;
        }

        .ftb .container.section-title-container {
            margin-bottom: 0;
            margin-top: 16px;
        }

        .type-post .entry-content.single-page {
            text-align: justify;
        }

        .absolute-footer, .absolute-footer p {
            padding: 3px 0;
            margin: 0
        }

        ul.header-nav.header-nav-main.nav.nav-left.nav-divided.nav-uppercase ul.nav-dropdown.nav-dropdown-default {
            padding: 6px;
        }

        .menufix p, .menusub a.button {
            margin: 0 !important;
        }

        .menufix a {
            padding: 0 3px;
        }

        .cn360 a.button {
            min-width: 138px;
        }

        .section-title-container {
            margin-bottom: 1em;
        }

        .dtlt .col.medium-3.small-6.large-3:hover .box-text.text-center a.button {
            opacity: 1;
        }

        h1, .h1, .h2, h2 {
            font-size: 2em;
            margin-top: .2em;
            margin-bottom: .2em;
        }

        .slider-style-shadow {
            padding: 0;
        }

        .slider-style-container .flickity-slider > *:not(.is-selected) {
            opacity: 1
        }

        ol.flickity-page-dots {
            bottom: 0;
        }

        footer#footer i.fa {
            color: #003469;
        }

        footer#footer .section.dark i.fa {
            color: #f1f1f1;
        }

        footer#footer .ft .container.section-title-container {
            margin-top: 1em;
            margin-bottom: 0em;
        }

        /* header cate */
        body.archive.category div#content {
            padding-top: 0;
        }

        div#content header.archive-page-header {
{{--            background: url({{ asset('site/wp-content/uploads/2022/12/cho-thue-tai-xe-chuyen-nghiep-min.jpg') }}) repeat 50% 41%;--}}
            padding: 38px;
            margin-bottom: 38px;
        }

        div#content header.archive-page-header .large-12.text-center.col {
            padding: 0;
        }

        div#content header.archive-page-header .large-12.text-center.col h1.page-title.is-large.uppercase {
            margin: 0;
            font-size: 1.8em;
            padding-top: 16px;
            text-align: center;
            background: url({{ asset('site//wp-content/uploads/2019/11/line.png') }}) no-repeat bottom center;
            padding-bottom: 30px;
        }

        div#content header.archive-page-header .large-12.text-center.col .taxonomy-description {
            color: #cacaca;
            padding-top: 16px;
        }

        div#content header.archive-page-header .large-12.text-center.col .taxonomy-description p {
            margin-bottom: 6px;
        }

        /* menu bar */
        li#wp-admin-bar-wp-logo, li#wp-admin-bar-flatsome_panel, li#wp-admin-bar-flatsome-activate, li#wp-admin-bar-wpseo-configuration-wizard, li#wp-admin-bar-wpseo-settings {
            display: none;
        }

        div#wpadminbar {
            background: #003469;
        }

        /* Menu page sub */
        .parent-pageid-115 .header-wrapper.stuck {
            display: none;
        }

        .parent-pageid-115 section.section.menufix.sticky-element-original.element-is-sticky {
            margin-top: 0 !important;
            top: 0 !important;
        }

        /* Cam nhan 360 dieu chinh nav */
        .devvn_ireel_wrap {
            padding-bottom: 12px;
            margin-bottom: 16px;
        }

        .nav_color_wrap {
            position: absolute !important;
            bottom: -6px !important;
            left: 50% !important;
            margin-left: -18% !important;
        }

        /* menu con */
        .menucon p, .menucon p img, .menucon a.button {
            margin: 0 !important;
        }

        /* form */
        span.wpcf7-form-control-wrap.lai-thu input, span.wpcf7-form-control-wrap.mua-xe input {
            text-align: center;
            font-size: 200%;
            padding: 0;
            margin: 0 0 16px 0;
            font-weight: bold;
        }

        span.wpcf7-form-control.wpcf7-checkbox span.wpcf7-list-item input[type="checkbox"] {
            width: 18px;
            margin: 6px 0 0 0;
            padding: 0;
        }

        .wpcf7 label {
            font-size: 110%;
        }

        .wpcf7 hr {
            margin: 0 0 10px auto;
        }

        .lightbox-content h2 {
            background: url(wp-content/uploads/2019/11/line.png) no-repeat bottom center;
            padding-bottom: 29px;
            padding-top: 6px;
            margin-bottom: 12px
        }

        span.wpcf7-form-control-wrap input {
            width: 100%;
        }

        span.wpcf7-form-control-wrap.dien-thoai input, span.wpcf7-form-control-wrap.email input {
            margin-left: 10px;
        }

        .lightbox-content {
            border-radius: 6px;
        }

        input.wpcf7-form-control.wpcf7-submit {
            margin: 0;
            border: 0;
            border-radius: 50px;
        }

        /* menu image */
        .menu-item-86.has-dropdown.current-dropdown .nav-dropdown li {
            float: left;
            display: block;
            margin: 0;
            vertical-align: top;
        }

        .menu-item-86.has-dropdown.current-dropdown ul.nav-dropdown.nav-dropdown-default {
            min-width: 1000px;
            left: 50% !important;
            position: fixed;
            right: auto;
        }

        li#menu-item-86 ul.nav-dropdown.nav-dropdown-default img.menu-image {
            max-height: 58px;
        }

        .menu-item-86.has-dropdown.current-dropdown .nav-column > li:last-child:not(.nav-dropdown-col) > a, .nav-dropdown > li:last-child:not(.nav-dropdown-col) > a {
            border-bottom: 1px solid #ececec !important;
        }

        /* rut gon content */
        .rut-gon {
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
            padding-bottom: 25px;
            display: block;
        }

        .readmorecontent {
            text-align: center;
            cursor: pointer;
            position: absolute;
            z-index: 10;
            bottom: 0;
            width: 100%;
            background: #fff;
        }

        .readmorecontent:before {
            height: 55px;
            margin-top: -45px;
            content: "";
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgb(0, 44, 95) 100%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgb(0, 44, 95) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff00', endColorstr='#ffffff', GradientType=0);
            display: block;
        }

        .readmorecontent a {
            color: #ffffff;
            display: block;
            background: #002c5f;
            padding: 10px;
        }

        .readmorecontent a:after {
            content: '';
            width: 0;
            right: 0;
            border-top: 6px solid #318A00;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            display: inline-block;
            vertical-align: middle;
            margin: -2px 0 0 5px;
        }

        .readmorecontent_less:before {
            display: none;
        }

        .readmorecontent_less a:after {
            border-top: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #318A00;
        }

        /* table */
        table tr td {
            padding-left: 6px !important;
        }

        section .col.medium-4.small-12.large-4 .img-inner.image-cover.dark, section .col.medium-6.small-12.large-6 .img-inner.image-cover.dark {
            margin-top: 26px !important;
            margin-bottom: 8px;
        }

        .col.post-item {
            padding-bottom: 26px;
        }

        .devvn_muaxe_note {
            margin-top: 20px;
        }

        .devvn_ireel_headerimg.devvn_ireel_img_responsive {
            padding-bottom: 16px;
        }

        .page-id-129 .nav_color_wrap, .page-id-139 .nav_color_wrap {
            margin-left: -12% !important;
        }

        .page-id-133 .nav_color_wrap, .page-id-135 .nav_color_wrap, .page-id-137 .nav_color_wrap {
            margin-left: -14% !important;
        }

        /* tool right */
        .tool-right {
            position: fixed;
            top: 30%;
            right: 0;
            z-index: 999;
            background: #ffffff;
            padding: 12px 8px;
            box-shadow: 10px 0px 30px #888888;
            border-radius: 15px 0 0 15px;
            width: 68px;
            text-align: center;
            font-size: 80%;
            font-weight: bold;
        }

        .tool-right p {
            border-bottom: 1px dashed #e9e9e9;
        }

        .tool-right p:nth-child(3) {
            border-bottom: none;
            margin-bottom: 0;
        }

        /* add */
        .zalo-container.right {
            right: 6px;
        }

        /* menu fix */
        .page-id-115 .header-wrapper.stuck, .page-id-129 .header-wrapper.stuck, .page-id-139 .header-wrapper.stuck, .page-id-137 .header-wrapper.stuck, .page-id-131 .header-wrapper.stuck, .page-id-143 .header-wrapper.stuck, .page-id-135 .header-wrapper.stuck, .page-id-141 .header-wrapper.stuck, .page-id-147 .header-wrapper.stuck, .page-id-133 .header-wrapper.stuck {
            display: none;
        }

        .page-id-115 .menufix, .page-id-129 .menufix, .page-id-139 .menufix, .page-id-137 .menufix, .page-id-131 .menufix, .page-id-143 .menufix, .page-id-135 .menufix, .page-id-141 .menufix, .page-id-147 .menufix, .page-id-133 .menufix {
            top: 0px !important;
        }

        /* video youtube */
        .video-foreground {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        @media (min-aspect-ratio: 16/9) {
            .video-foreground {
                height: 300%;
                top: -100%;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            .video-foreground {
                width: 300%;
                left: -100%;
            }
        }

        b, strong {
            font-weight: bold !important;
        }

        .row.tinmb .col.post-item .col-inner {
            border-bottom: 1px solid #dddddd;
            margin-bottom: 0.5em;
            padding-bottom: 0.5em;
        }

        .pd0 .col {
            padding-bottom: 0 !important;
        }

        .messdk p.txtdatmua b {
            background-size: 154px;
            padding: 8px 18px 8px 46px;
        }

        element.style {
        }

        .messdk p.txtdatmua b {
            background-size: 154px;
            padding: 8px 18px 8px 46px;
            color: #002c5f;
        }

        p.txtdatmua b {
            background: url(wp-content/uploads/2021/02/a.png) no-repeat;
            background-size: 125px;
            padding: 8px 11px 8px 37px;
        }

        .messdk .dmn input {
            width: 47% !important;
            float: left;
            margin: 0;
            border-radius: 0 !important;
        }

        .messdk .dmn input {
            height: 45px;
            font-size: 100% !important;
        }

        .box-blog-post .is-divider {
            display: none;
        }

        .messdk input.wpcf7-form-control.wpcf7-submit {
            background-color: #ed1d25;
        }

        .messdk .dmn {
            margin-bottom: 5px;
        }

        .section.tc .box1 p {
            text-transform: uppercase;
        }

        .header .header-bottom .sub-menu li {
            min-width: 350px;
        }

        .dichvu img {
            border-radius: 50%;
        }

        .pd0 .col {
            padding-bottom: 0;
        }

        .dongia .col-inner {
            padding-bottom: 0px !important;
            padding-top: 0px !important;
        }

        p.pricechuan {
            color: #ed1c24;
        }

        .strong-view.wpmtst-default .wpmtst-testimonial-inner {
            background: #fff;
        }

        /* Custom CSS Mobile */
        @media (max-width: 549px) {
            h1, .h1, .h2, h2 {
                font-size: 1.5em;
                margin-top: .1em;
                margin-bottom: .1em;
            }

            h1 span, .h1 span, .h2 span, h2 span {
                margin: 0 auto !important;
            }

            .menufix .col.medium-9.small-12.large-9 .col-inner {
                padding: 0 0 10px 0 !important
            }

            .sidebar-menu.no-scrollbar {
                padding-top: 0;
            }

            .menufix .col-inner {
                text-align: center
            }

            section.section.menufix.sticky-element-original.element-is-sticky .col-inner.text-center {
                font-size: 88%;
            }

            .devvn_ireel_wrap {
                padding-bottom: 50px;
            }

            section {
                padding-top: 38px !important;
                padding-bottom: 38px !important;
            }

            section.menufix {
                padding: 0 !important;
            }

            section.menucon {
                padding: 3px !important;
            }

            span.wpcf7-form-control-wrap.ho-ten input, span.wpcf7-form-control-wrap.dien-thoai input, span.wpcf7-form-control-wrap.email input {
                width: 100%;
                margin: 0 0 10px 0 !important;
            }

            .tool-right img {
                width: 60%;
            }

            .tool-right {
                width: 50px;
                font-size: 75%;
                padding: 10px 3px;
            }

            input.wpcf7-form-control.wpcf7-submit {
                min-width: 80% !IMPORTANT;
                font-size: 100%;
            }

            .absolute-footer.dark.medium-text-center.text-center {
                margin-bottom: 35px;
                font-size: 78%;
            }

            .menufix .col.medium-9.small-12.large-9, .menufix .col.medium-10.small-12.large-10, .menufix .col.medium-12.small-12.large-10 {
                font-size: 64%;
            }

            .menufix .col.medium-2.small-12.large-2 .col-inner, .menufix.col.medium-3.small-12.large-3.col-inner, .menufix .col.medium-12.small-12.large-2 .col-inner.text-center {
                padding-bottom: 0 !important;
            }

            .dtlt .box-text-inner {
                font-size: 80%;
            }

            .cn360 .col-inner.text-center a.button {
                font-size: 70%;
            }

            .nav_color_wrap {
                left: 18% !IMPORTANT;
            }

            .textcenter {
                text-align: center !important;
            }

            .dmn form {
                font-size: 88%;
            }

            .dm .col-inner p {
                font-size: 60%;
            }

            .messdk {
                font-size: 70%;
            }

            .messdk .dmn input {
                height: 35px;
            }

            .messdk h4, .messdk p {
                text-align: center !important;
            }

            .messdk p.txtdatmua b {
                background-size: 108px !important;
                padding: 8px 16px 8px 32px !important;
            }

            .txtdatmua span {
                font-size: 100% !important;
            }

            .messdk input.wpcf7-form-control.wpcf7-submit {
                min-width: 53% !important;
            }

            #ppo-cta-fixed {
                display: none;
                background: #fff;
                color: #164892;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 55px;
                text-align: center;
                z-index: 9999;
                border-top: 1px solid #e2e2e2;
                background-color: #002c5f;
            }

            #ppo-cta-fixed .item {
                display: inline-block;
                width: 24%;
                max-width: 76px;
                height: 52px;
                text-align: center;
                background-repeat: no-repeat;
                background-position: center 28%;
                background-size: 30.6px;
                position: relative;
            }

            #ppo-cta-fixed .item .text-content {
                color: #ffffff;
                width: 100%;
                position: absolute;
                left: 0;
                bottom: 10%;
                white-space: nowrap;
                font-size: .7em;
                margin-bottom: -3px;
                font-weight: bold;
            }

            #ppo-cta-fixed .item-home {
                background-image: url(wp-content/uploads/2021/04/home.png);
                background-size: 24px;
            }

            #ppo-cta-fixed .item-muaxe {
                background-image: url(wp-content/uploads/2021/04/mua-xe.png);
                background-size: 24px;
            }

            #ppo-cta-fixed .item-laithu {
                background-image: url(wp-content/uploads/2021/04/lai-thu.png);
                background-size: 24px;
            }

            #ppo-cta-fixed .item-tragop {
                background-image: url(wp-content/uploads/2021/04/tra-gop.png);
                background-size: 24px;
            }

            .zalo-container.right {
                margin-bottom: 45px !important;
            }

            a.spl.dst {
                display: none;
            }

            a.spl.dst {
                display: none;
            }

            a.phoneimg {
                display: inherit !important;
            }

            .stuck #logo img {
                max-height: 38px !important;
            }

            .header.show-on-scroll, .stuck .header-main {
                max-height: 44px !important;
            }
        }

        .label-new.menu-item > a:after {
            content: "New";
        }

        .label-hot.menu-item > a:after {
            content: "Hot";
        }

        .label-sale.menu-item > a:after {
            content: "Sale";
        }

        .label-popular.menu-item > a:after {
            content: "Popular";
        }</style>
    <style type="text/css" id="wp-custom-css">
        .row-border {
            border-radius: 18px;
            border: 3px solid #e7573d;
        }

        .bg-white {
            background: #fff;
        }

        .bg-over-white {
            background: #FFFFFFAB;
        }

        .font-bold {
            font-weight: bold;
        }

        .tool-right {
            visibility: hidden;
        }        </style>

    <!--CSS-->

    <!--JS-->

</head>
<body class="home page-template page-template-page-transparent-header-light page-template-page-transparent-header-light-php page page-id-6451 lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border parallax-mobile">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0&appId=475816949623557" nonce="zOZYtkWR"></script>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0.49803921568627"/>
                <feFuncG type="table" tableValues="0 0.49803921568627"/>
                <feFuncB type="table" tableValues="0 0.49803921568627"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 1"/>
                <feFuncG type="table" tableValues="0 0.27843137254902"/>
                <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0 0"/>
                <feFuncG type="table" tableValues="0 0.64705882352941"/>
                <feFuncB type="table" tableValues="0 1"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.78039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.94901960784314"/>
                <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745"/>
                <feFuncG type="table" tableValues="0 1"/>
                <feFuncB type="table" tableValues="0.44705882352941 0.4"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "/>
            <feComponentTransfer color-interpolation-filters="sRGB">
                <feFuncR type="table" tableValues="0.098039215686275 1"/>
                <feFuncG type="table" tableValues="0 0.66274509803922"/>
                <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725"/>
                <feFuncA type="table" tableValues="1 1"/>
            </feComponentTransfer>
            <feComposite in2="SourceGraphic" operator="in"/>
        </filter>
    </defs>
</svg>
<a class="skip-link screen-reader-text" href="#main">Skip to content</a>

<div id="wrapper">
    @include('site.common.header')

    <main id="main" class="">
        @yield('content')
    </main>

    @include('site.common.footer')

</div>
@include('site.common.menu_mobile')

<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        js = d.createElement(s);
        js.id = id;
        js.src = 'vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1'
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="103934712186852"></div>


<!--CMOZ contact me -->

<div id="button-contact-vr" class="left">
    <div id="gom-all-in-one">
        <!-- zalo -->
        <div id="zalo-vr" class="button-contact">
            <div class="phone-vr">
                <div class="phone-vr-circle-fill"></div>
                <div class="phone-vr-img-circle">
                    <a target="_blank" href="https://zalo.me/{{isset($information['hotline']) ? $information['hotline'] : ''}}"
                       onclick="gtag_report_conversion('tel:{{isset($information['hotline']) ? $information['hotline'] : ''}}')">
                        <img alt="Contact Me on Zalo"
                             data-src="{{ asset('site/wp-content/plugins/contact-me-on-zalo/assets/images/zalo.png') }}"
                             class=" ls-is-cached lazyloaded"
                             src="{{ asset('site/wp-content/plugins/contact-me-on-zalo/assets/images/zalo.png') }}">
                        <noscript><img src="{{ asset('site/wp-content/plugins/contact-me-on-zalo/assets/images/zalo.png') }}"/></noscript>
                    </a>
                </div>
            </div>
        </div>
        <!-- end zalo -->

        <!-- Phone -->
        <div id="phone-vr" class="button-contact">
            <div class="phone-vr">
                <div class="phone-vr-circle-fill"></div>
                <div class="phone-vr-img-circle">
                    <a href="tel:{{isset($information['hotline']) ? $information['hotline'] : ''}}" onclick="gtag_report_conversion('tel:{{isset($information['hotline']) ? $information['hotline'] : ''}}')">
                        <img src="{{ asset('site/wp-content/plugins/contact-me-on-zalo/assets/images/phone.png') }}">
                        <noscript><img src="{{ asset('site/wp-content/plugins/contact-me-on-zalo/assets/images/phone.png') }}"/></noscript>
                    </a>
                </div>
            </div>
        </div>
        <div class="phone-bar phone-bar-n">
            <a href="tel:{{isset($information['hotline']) ? $information['hotline'] : ''}}" onclick="gtag_report_conversion('tel:{{isset($information['hotline']) ? $information['hotline'] : ''}}')">
                <span class="text-phone">{{isset($information['hotline']) ? $information['hotline'] : ''}}</span>
            </a>
        </div>

        <!-- end phone -->

    </div>

</div>

<link rel='stylesheet' id='testimonials-default-css'
      href='{{ asset('site/wp-content/plugins/strong-testimonials/templates/default/content.css') }}' type='text/css'
      media='all'/>
<link rel='stylesheet' id='wpmtst-slider-controls-sides-outside-buttons2-css'
      href='{{ asset('site/wp-content/plugins/strong-testimonials/public/css/slider-controls-sides-outside-buttons2.css') }}'
      type='text/css' media='all'/>
<script type='text/javascript' src='{{ asset('site/wp-includes/js/dist/vendor/regenerator-runtime.min.js') }}'
        id='regenerator-runtime-js'></script>
<script type='text/javascript' src='{{ asset('site/wp-includes/js/dist/vendor/wp-polyfill.min.js') }}'
        id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {

    };
    /* ]]> */
</script>
<script type='text/javascript' src='{{ asset('site/wp-content/plugins/contact-form-7/includes/js/index.js') }}'
        id='contact-form-7-js'></script>
<script type='text/javascript' id='stickThis-js-extra'>
    /* <![CDATA[ */
    var sticky_anything_engage = {
        "element": ".menufix",
        "topspace": "60",
        "minscreenwidth": "0",
        "maxscreenwidth": "999999",
        "zindex": "1000",
        "legacymode": "",
        "dynamicmode": "",
        "debugmode": "",
        "pushup": "#footer",
        "adminbar": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='{{ asset('site/wp-content/plugins/sticky-menu-or-anything-on-scroll/assets/js/stickThis.js') }}'
        id='stickThis-js'></script>
<script type='text/javascript'
        src='{{ asset('site/wp-content/themes/congnghevietnam.vn/inc/extensions/flatsome-live-search/flatsome-live-search.js') }}'
        id='flatsome-live-search-js'></script>
<script type='text/javascript' src='{{ asset('site/wp-includes/js/hoverIntent.min.js') }}' id='hoverIntent-js'></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
    /* <![CDATA[ */
    var flatsomeVars = {
        "ajaxurl": "",
        "rtl": "",
        "sticky_height": "60",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {"can_edit_pages": false},
        "i18n": {"mainMenu": "Main Menu"},
        "options": {"cookie_notice_version": "1"}
    };
    /* ]]> */
</script>
<script type='text/javascript' src='{{ asset('site/wp-content/themes/congnghevietnam.vn/assets/js/flatsome.js') }}'
        id='flatsome-js-js'></script>
<script type='text/javascript' defer
        src='{{ asset('site/wp-content/plugins/strong-testimonials/public/js/lib/actual/jquery-actual.min.js') }}'
        id='jquery-actual-js'></script>
<script type='text/javascript' src='{{ asset('site/wp-includes/js/imagesloaded.min.js') }}' id='imagesloaded-js'></script>
<script type='text/javascript' src='{{ asset('site/wp-includes/js/underscore.min.js') }}' id='underscore-js'></script>
<script type='text/javascript' defer
        src='{{ asset('site/wp-content/plugins/strong-testimonials/public/js/lib/verge/verge.min.js') }}' id='verge-js'></script>
<script type='text/javascript' src='{{ asset('site/wp-includes/js/dist/hooks.min.js') }}'
        id='wp-hooks-js'></script>
<script type='text/javascript' src='{{ asset('site/wp-includes/js/dist/i18n.min.js') }}'
        id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
    wp.i18n.setLocaleData({'text direction\u0004ltr': ['ltr']});
</script>
<script type='text/javascript' id='wpmtst-slider-js-extra'>
    /* <![CDATA[ */
    var strong_slider_id_1 = {
        "config": {
            "mode": "horizontal",
            "speed": 1000,
            "pause": 8000,
            "autoHover": 1,
            "autoStart": 1,
            "infiniteLoop": 1,
            "stopAutoOnClick": 1,
            "adaptiveHeight": 1,
            "adaptiveHeightSpeed": 500,
            "controls": 1,
            "autoControls": 0,
            "pager": 0,
            "slideCount": 3,
            "debug": false,
            "compat": {"lazyload": {"active": false, "classes": []}},
            "touchEnabled": true,
            "type": "show_multiple",
            "breakpoints": {
                "single": {"maxSlides": 1, "moveSlides": 1, "slideMargin": 1},
                "multiple": {
                    "desktop": {"width": 1200, "maxSlides": 3, "moveSlides": 1, "slideMargin": 20},
                    "large": {"width": 1024, "maxSlides": 3, "moveSlides": 1, "slideMargin": 20},
                    "medium": {"width": 640, "maxSlides": 2, "moveSlides": 1, "slideMargin": 10},
                    "small": {"width": 480, "maxSlides": 1, "moveSlides": 1, "slideMargin": 1}
                }
            },
            "prevText": "",
            "nextText": "",
            "startText": "",
            "stopText": ""
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' defer
        src='{{ asset('site/wp-content/plugins/strong-testimonials/public/js/lib/strongslider/jquery-strongslider.min.js') }}'
        id='wpmtst-slider-js'></script>
<script type='text/javascript' id='wpmtst-controller-js-extra'>
    /* <![CDATA[ */
    var strongControllerParms = {
        "initializeOn": "documentReady",
        "method": "",
        "universalTimer": "500",
        "observerTimer": "500",
        "event": "",
        "script": "",
        "containerId": "page",
        "addedNodeId": "content",
        "debug": ""
    };
    /* ]]> */
</script>
<script type='text/javascript' src='{{ asset('site/wp-content/plugins/strong-testimonials/public/js/controller.min.js') }}'
        id='wpmtst-controller-js'></script>

<script type='text/javascript' src='{{ asset('site/wp-content/themes/congnghevietnam.vn/assets/libs/packery.pkgd.min.js') }}' id='flatsome-masonry-js-js'></script>

<script type="text/javascript">
    window.addEventListener("load", function (event) {
        jQuery(".cfx_form_main,.wpcf7-form,.wpforms-form,.gform_wrapper form").each(function () {
            var form = jQuery(this);
            var screen_width = "";
            var screen_height = "";
            if (screen_width == "") {
                if (screen) {
                    screen_width = screen.width;
                } else {
                    screen_width = jQuery(window).width();
                }
            }
            if (screen_height == "") {
                if (screen) {
                    screen_height = screen.height;
                } else {
                    screen_height = jQuery(window).height();
                }
            }
            form.append('<input type="hidden" name="vx_width" value="' + screen_width + '">');
            form.append('<input type="hidden" name="vx_height" value="' + screen_height + '">');
            form.append('<input type="hidden" name="vx_url" value="' + window.location.href + '">');
        });

    });
</script>
<script>
    function contact(e) {
        var from = jQuery('.from-contact');
        var btn = jQuery(e).text('Đang tải ...');
        var data = from.serialize();
        console.log(data)
        jQuery.ajax({
            type: "POST",
            url: '{{ route('sub_contact', ['languageCurrent' => $languageCurrent]) }} ',
            data: data,
            success: function(result){
                // gửi thành công
                if (result.status == 200) {
                    alert(result.message);
                    btn.text('Đăng ký ngay');

                    return;
                }
                // gửi thất bại
                if (result.status != 200) {
                    alert('Gửi liên hệ không thành công!');
                    btn.text('Đăng ký ngay');

                    return;
                }
            },
            error: function(error) {
                //alert('Lỗi gì đó đã xảy ra!')
            }
        });
        return false;
    }
</script>

</body>

</html>