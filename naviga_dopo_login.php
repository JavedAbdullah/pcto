
                                <!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Viewer with HTML, CSS & JavaScript</title>
    <link rel="short cat icon " href="lib/docs/resources/favicon.ico">
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.1/dist/chart.min.js" ></script> -->





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>



    <script src="https://code.highcharts.com/stock/highstock.js">
    </script>
    <script src="https://code.highcharts.com/stock/modules/data.js">
    </script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js">
    </script>
    <script src="https://code.highcharts.com/stock/modules/export-data.js">
    </script>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>disegna grafici da file CSV</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="content/football2/images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:100,300,400,400italic,500,600,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='content/football2/css/structure.css'>
    <link rel='stylesheet' href='content/football2/css/football2.css'>
    <link rel='stylesheet' href='content/football2/css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin-5.3.1/css/settings.css">

</head>

<body class="home page-template-default page template-slider color-custom style-default button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-creative header-open minimalist-header-no ab-hide subheader-both-center menu-link-color footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-header-mini mobile-sticky">

    
                                <div id="Header_creative" class>
        <a href="#" class="creative-menu-toggle"><i class="icon-menu-fine"></i></a>

        <div class="creative-wrapper">

            <div id="Top_bar">
                <div class="one clearfix">
                    <div class="top_bar_left">
                        <div class="logo">
                            <a id="logo" href="index-football2.html" data-height="106" data-padding="60"><img class="logo-main scale-with-grid" src="content/football2/images/retina-football2.png" data-retina="content/football2/images/football2.png" data-height="212" data-no-retina><img class="logo-sticky scale-with-grid" src="content/football2/images/retina-football2.png"
                                    data-retina="content/football2/images/football2.png" data-height="212" data-no-retina><img class="logo-mobile scale-with-grid" src="content/football2/images/retina-football2.png" data-retina="content/football2/images/football2.png"
                                    data-height="212" data-no-retina><img class="logo-mobile-sticky scale-with-grid" src="content/football2/images/retina-football2.png" data-retina="content/football2/images/football2.png" data-height="212" data-no-retina></a>
                        </div>
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul id="menu-main-menu" class="menu menu-main">
                                    <li class=" current-menu-item page_item current_page_item">
                                        <a href="#"><span>HOME</span></a>
                                    </li>
                                    <li>
                                        <a href="disegnaACC.php"><span>carica ACC</span></a>
                                    </li>
                                    <li>
                                        <a href="content/football2/news.html"><span>carica ECG</span></a>
                                    </li>
                                    <li>
                                        <a href="content/football2/our-history.html"><span>carica GYRO</span></a>
                                    </li>

                                </ul>
                            </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                        </div>
                    </div>
                    <div class="top_bar_right">
                        <div class="top_bar_right_wrapper">
                            <a href="index.php" class="action_button" >LOG OUT<i class="icon-right-open"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <script src="lib/papaparse.min.js">
    </script>
    <script type="module" src="js/script.js"></script>




    <div id="Action_bar">
                <ul class="social">
                    <p> &copy; 2021 GRUPPO PCTO - <a target="_blank" rel="nofollow" href="https://xeos.it/">XEOS</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="Wrapper">
        <div id="Header_wrapper" class>
            <header id="Header">
                <div class="mfn-main-slider" id="mfn-rev-slider">
                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.3">
                            <ul>
                                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-data-param1
                                    data-param2 data-param3 data-param4 data-param5 data-param6 data-param7 data-param8 data-param9 data-param10 data-description>
                                    <img src="content/football2/images/football2_pic1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="slide-1-layer-1" data-x="50" data-y="230" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 24px; line-height: 22px; font-weight: 400; color: #fff; letter-spacing: 5px;font-family:Oswald;">
                                        BENVENUTO
                                    </div>
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="slide-1-layer-2" data-x="50" data-y="271" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 64px; font-weight: 600; color: #fa1e3d; letter-spacing: 2px;font-family:Oswald;">
                                        SEI NELLA TUA AREA
                                        <br> PERSONALE
                                    </div>
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="slide-1-layer-3" data-x="50" data-y="450" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 30px; font-weight: 300; color: #fff; letter-spacing: 1px;font-family:Oswald;">
                                        nella tua sinistra
                                        <br> trovi le pagine dove potrai caricare
                                        <br> i tuoi file corrispondenti

                                    </div>

                                </li>

                            </ul>


                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>


                    </div>

                </div>

            </header>

        </div>



        <div id="body_overlay"></div>

        <!-- JS -->
        <script src="js/jquery-2.1.4.min.js"></script>

        <script src="js/mfn.menu.js"></script>
        <script src="js/jquery.plugins.js"></script>
        <script src="js/jquery.jplayer.min.js"></script>
        <script src="js/animations/animations.js"></script>
        <script src="js/translate3d.js"></script>
        <script src="js/scripts.js"></script>

        <script src="plugins/rs-plugin-5.3.1/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/jquery.themepunch.revolution.min.js"></script>

        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.video.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.parallax.min.js"></script>

        <script>
            var revapi1, tpj;
            (function() {
                if (!/loaded|interactive|complete/.test(document.readyState))
                    document.addEventListener("DOMContentLoaded", onLoad);
                else
                    onLoad();

                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("off" == "on")
                            tpj.noConflict();
                    }
                    if (tpj("#rev_slider_1_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                    } else {
                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                            sliderType: "hero",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 9000,
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: 1080,
                            gridheight: 900,
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "enterpoint",
                                speed: 400,
                                speedbg: 0,
                                speedls: 0,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                            },
                            shadow: 0,
                            spinner: "spinner2",
                            autoHeight: "off",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                disableFocusListener: false,
                            }
                        });
                    };
                };
            }());
        </script>

</body>

</html>