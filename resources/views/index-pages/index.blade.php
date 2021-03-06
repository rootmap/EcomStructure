@extends('front-layout.master')

@if(isset($slider))
@section('slider')
<div id="field_slideshow">
    <div class="field-main-slider block" style="overflow: hidden;">
        <div id="insideslider_mod" class="outer-slide" style="width: 1920px; height: 600px">
            <div class="loading">
                <div class="bg-loading"></div>
                <div class="icon-loading"></div>
            </div>
            <div data-u="slides" style="width: 1920px; height: 600px">
                @foreach($slider as $sli)
                <div class="field-main-slider_1">
                    <a href="#"> 
                        <img class="img-slider" src="{{url('upload/slider')}}/{{$sli->sliderimage}}" alt="" data-u="image"> 
                    </a>
                    <?php /*<div class="box-slider">
                        <div class="large-slide-title title_font" data-u="caption" data-t="T-*IB" data-t2="ZML|TR" data-d="-300">New Food </div>
                        <div class="big-slide-title title_font" data-u="caption" data-t="ZM*WVR|LB" data-t2="WVC|R" data-d="-300"> up to</div>
                        <div class="small-slide-title title_font" data-u="caption" data-t="TORTUOUS|HL" data-t2="JDN|B" data-d="-300">
                            <p class="custom_location" style="width: 360px; text-align: center; right: 375px; left: auto;">50% off</p>
                        </div>
                        <div class="div-slide-button shop_now" data-u="caption" data-t="B-R*"> <a class="slide-button title_font" href="{{url('product')}}/{{$sli->product_id}}/{{$sli->name}}"> Order now</a></div>
                    </div>*/ ?>
                </div>
                @endforeach
            </div>
            <?php /*
            <div data-u="navigator">
                <div data-u="prototype"></div>
            </div> <span data-u="arrowleft"><i class="icon-angle-left"></i></span> <span data-u="arrowright"><i class="icon-angle-right"></i></span> */ ?></div>
    </div>
</div>
@endsection
@endif
@section('content')
<div id="center_column" class="center_column col-xs-12 col-sm-12 col-md-12">
    <div class="clearfix">
        <div class="block title_center horizontal_mode clearfix">
            <h4 class="title_block title_font"> <a class="title_text" href="" title="Category"> Category <span class="bd_title"></span> </a></h4>
            <div class="row">
                @foreach($cats as $ctt)
                <div class="col-md-3">
                    <div class="left-block box">
                        <a href="{{url('category')}}/{{$ctt->id}}/{{$ctt->name}}" style="color: #ffffff; text-decoration: none;">
                            <img src="{{url('upload/category')}}/{{$ctt->thumb}}" width="100%">
                            <div style="padding: 10px; background-color: #00a9ec; text-align: center;"> View {{$ctt->name}}</div>
                        </a>
                    </div>

                </div>
                @endforeach

            </div>
        </div>

    </div>
    <div class="clearfix">
        
        <div class="Brands-block-slider">
                <div class="container">
                    @include('front-include.brand')
                </div>
        </div>

        <div id="featured_products_block" class="block title_center horizontal_mode clearfix">
            <h4 class="title_block title_font"> <span class="title_text"> LATEST PRODUCTS <span class="bd_title"></span> </span></h4>
            <div class="row">
                <div id="featured_products" class="carousel-grid owl-carousel">
                    @if(isset($product))
                    @foreach($product as $pro)
                    <div class="item first">
                        <div class="item-inner">
                            <div class="left-block">
                                <a class="product_img" href="{{url('product')}}/{{$pro->id}}/{{$pro->name}}" title=""> 
                                    <span class="hover-image"><img class="replace-2x" style="height: 300px !important;" src="{{url('upload/product')}}/{{$pro->photo}}" alt="{{$pro->name}}" title="{{$pro->name}}" height="344" width="270"/></span> 
                                    <span class="img_root"> <img style="height: 300px !important;" src="{{url('upload/product')}}/{{$pro->photo}}" height="344" width="270" alt="" /> </span> </a>
                                <div class="conditions-box"></div>
                            </div>
                            <div class="right-block">
                                <h5 class="sub_title_font"> 
                                    <a class="product-name" style="height: 53px;" href="{{url('product')}}/{{$pro->id}}/{{$pro->name}}" title="{{$pro->name}}"> {{$pro->name}} </a>
                                </h5>
                                <div class="price-rating">
                                    <div class="content_price"> 
                                        @if(empty($pro->unit))
                                            <span class="price product-price"> ${{$pro->price}} </span>
                                        @endif
                                    </div>
                                    <div class="comments_note" itemtype="" itemscope="">
                                        <div class="star_content clearfix" itemtype="" itemscope="" itemprop="aggregateRating">
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star"></div>
                                            <meta itemprop="worstRating" content="0" />
                                            <meta itemprop="ratingValue" content="4" />
                                            <meta itemprop="bestRating" content="5" />
                                        </div>
                                    </div>
                                </div>
                                <div class="button-container">
                                    <div class="tab_button">
                                        <a class="title_font" href="{{url('product')}}/{{$pro->id}}/{{$pro->name}}" rel="" title="Quick view"> <span><i class="icon-eye"></i></span> </a>
                                        <a class="addToWishlist title_font wishlistProd_1" href="{{url('product-wishlist')}}/{{$pro->id}}/{{$pro->name}}" data-tooltip="Add to Wishlist" rel="nofollow" onclick="WishlistCart('wishlist_block_list', 'add', '{{$pro->id}}', false, 1);
                                                return false;"> <span><i class="icon-heart"></i></span> </a>
                                             @if(!empty($pro->unit))
                                    
                                    <a class="title_font button_cart button ajax_add_to_cart_button btn btn-default" 
                                        href="{{url('product')}}/{{$pro->id}}/{{$pro->name}}" 
                                        title="Choose Product"> 
                                        <i class="icon-shopping-cart"></i> 
                                        <span>Choose Product</span> 
                                    </a>
                                    @elseif(!empty($pro->iscolor))
                                    <?php $color=count($pro->iscolor); ?>
                                    <a class="title_font button_cart button ajax_add_to_cart_button btn btn-default" 
                                        href="{{url('product')}}/{{$pro->id}}/{{$pro->name}}" 
                                        title="Choose Product"> 
                                        <i class="icon-shopping-cart"></i> 
                                        <span>Choose Product</span> 
                                    </a>
                                    @else           
                                        <a class="button cart_add ajax_add_to_cart_button btn btn-default caption-add-to-cart title_font" rel="nofollow" 
                                                           href="javascript:void(0);" 
                                                           data-base="<?=url('/')?>" 
                                                           title="Add to cart" data-minimal_quantity="1"  
                                                           data-token="<?=csrf_token()?>" 
                                                           data-cart="{{route('product.addToCartajax',['id'=>$pro->id,'reur'=>base64_encode('home')])}}"> <i class="icon-shopping-cart"></i> <span>Add to cart</span> </a>
                                     @endif                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
        
        
        
        <div class="block block_testimonials title_center fieldFullWidth" style="background:url({{url('site-pub/images')}}/back.jpg ) center center no-repeat; background-attachment: fixed; background-blend-mode: screen; background-clip: border-box; background-color: rgba(0, 0, 0, 0); background-size:cover; background-origin: padding-box; background-repeat: no-repeat;">
            <div class="overlay_testimonials">
                <div class="container">
                    <div class="row">
                        <div id="testimonials_block_right">
                            <div class="title">
                                <h2 class="title_font"> <span class="title_text"> what clients say <span class="bd_title"></span> </span></h2></div>
                            <div id="wrapper" class="block_content">
                                <div id="slide-panel">
                                    <div id="slide">
                                        <div class="main-block">
                                            <div class="content_test_top">
                                                <p class="des_testimonial">Demo Text</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-content">
                                                    <a class="fancybox-media" href="{{url('site-pub/images')}}/630-client-3.png"> <img src="{{url('site-pub/images')}}/630-client-3.png" alt="Image Testimonial" /> </a>
                                                </div>
                                                <div class="content_test">
                                                    <p class="des_namepost">Jane Doe</p>
                                                    <p class="des_company">Online Marketer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-block">
                                            <div class="content_test_top">
                                                <p class="des_testimonial">Demo Text</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-content">
                                                    <a class="fancybox-media" href="{{url('site-pub/images')}}/993-client-6.png"> <img src="{{url('site-pub/images')}}/993-client-6.png" alt="Image Testimonial" /> </a>
                                                </div>
                                                <div class="content_test">
                                                    <p class="des_namepost">Cornelius Reeves</p>
                                                    <p class="des_company">Project Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-block">
                                            <div class="content_test_top">
                                                <p class="des_testimonial">Demo Text</p>
                                            </div>
                                            <div class="media">
                                                <div class="media-content">
                                                    <a class="fancybox-media" href="{{url('site-pub/images')}}/58-client-8.png"> <img src="{{url('site-pub/images')}}/58-client-8.png" alt="Image Testimonial" /> </a>
                                                </div>
                                                <div class="content_test">
                                                    <p class="des_namepost">Jochen Rechsteiner</p>
                                                    <p class="des_company">Stylish Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div id="pagination_cycle"></div>
        </div>
    </div>
    
</div>

@endsection
@include('front-include.titleseo')
@section('css')
<link rel="stylesheet" href="{{url('site-pub/css/v_5809_f02ef3882af671fecce4b6ee1842792d_all.css')}}" type="text/css" media="all" />
@endsection

@section('js')
@include('front-include.cartjs')
@include('front-include.subscribe')
<script type="text/javascript">
            /* <![CDATA[ */;
            var CUSTOMIZE_TEXTFIELD = 1;
            var FIELD_enableCountdownTimer = true;
            var FIELD_mainLayout = 'fullwidth';
            var FIELD_stickyCart = true;
            var FIELD_stickyMenu = true;
            var FIELD_stickySearch = true;
            var FancyboxI18nClose = 'Close';
            var FancyboxI18nNext = 'Next';
            var FancyboxI18nPrev = 'Previous';
            var LANG_RTL = '0';
            var added_to_wishlist = 'The product was successfully added to your wishlist.';
            var ajax_allowed = true;
            var ajaxsearch = true;
            var baseDir = '';
            var baseUri = '';
            var comparator_max_item = 3;
            var compare_add_text = 'Add to Compare';
            var compare_remove_text = 'Remove from Compare';
            var comparedProductsIds = [];
            var contentOnly = false;
            var countdownDay = 'Day';
            var countdownDays = 'Days';
            var countdownHour = 'Hour';
            var countdownHours = 'Hours';
            var countdownMinute = 'Min';
            var countdownMinutes = 'Mins';
            var countdownSecond = 'Sec';
            var countdownSeconds = 'Secs';
            var currency = {
                "id": 1,
                "name": "Dollar",
                "iso_code": "USD",
                "iso_code_num": "840",
                "sign": "$",
                "blank": "0",
                "conversion_rate": "1.000000",
                "deleted": "0",
                "format": "1",
                "decimals": "1",
                "active": "1",
                "prefix": "$ ",
                "suffix": "",
                "id_shop_list": null,
                "force_id": false
            };
            var currencyBlank = 0;
            var currencyFormat = 1;
            var currencyRate = 1;
            var currencySign = '$';
            var customizationIdMessage = 'Customization #';
            var delete_txt = 'Delete';
            var displayList = false;
            var field_height = '450';
            var field_newsletter = '1';
            var field_path = '';
            var field_width = '770';
            var fieldblocksearch_type = 'top';
            var fieldbs_autoscroll = '5000';
            var fieldbs_maxitem = '5';
            var fieldbs_minitem = '2';
            var fieldbs_navigation = false;
            var fieldbs_pagination = false;
            var fieldbs_pauseonhover = false;
            var fieldfeaturedpsl_autoscroll = false;
            var fieldfeaturedpsl_maxitem = '4';
            var fieldfeaturedpsl_mediumitem = '3';
            var fieldfeaturedpsl_minitem = '2';
            var fieldfeaturedpsl_navigation = true;
            var fieldfeaturedpsl_pagination = false;
            var fieldfeaturedpsl_pauseonhover = false;
            var fieldnewpsl_autoscroll = false;
            var fieldnewpsl_maxitem = '4';
            var fieldnewpsl_mediumitem = '3';
            var fieldnewpsl_minitem = '2';
            var fieldnewpsl_navigation = true;
            var fieldnewpsl_pagination = false;
            var fieldnewpsl_pauseonhover = true;
            var fieldonecatepsl_autoscroll = false;
            var fieldonecatepsl_maxitem = '2';
            var fieldonecatepsl_mediumitem = '1';
            var fieldonecatepsl_minitem = '2';
            var fieldonecatepsl_navigation = true;
            var fieldonecatepsl_pagination = false;
            var fieldonecatepsl_pauseonhover = false;
            var freeProductTranslation = 'Free!';
            var freeShippingTranslation = 'Free shipping!';
            var generated_date = 1480615261;
            var hasDeliveryAddress = false;
            var highDPI = false;
            var id_lang = 1;
            var img_dir = 'images/';
            var instantsearch = false;
            var isGuest = 0;
            var isLogged = 0;
            var isMobile = false;
            var langIso = 'en-us';
            var loggin_required = 'You must be logged in to manage your wishlist.';
            var max_item = 'You cannot add more than 3 product(s) to the product Comparison';
            var min_item = 'Please select at least one product';
            var mywishlist_url = 'module/blockwishlist/mywishlist';
            var page_name = 'index';
            var placeholder_blocknewsletter = 'Your e-mail';
            var priceDisplayMethod = 1;
            var priceDisplayPrecision = 2;
            var quickView = true;
            var removingLinkText = 'remove this product from my cart';
            var roundMode = 2;
            var search_url = 'search';
            var static_token = 'cf034011c60a29a745742ca00eb50882';
            var toBeDetermined = 'To be determined';
            var token = '1781ddff19ab1fd7c75d1f91a7f58d3f';
            var usingSecureMode = false;
            var wishlistProductsIds = false; /* ]]> */
        </script>
        <script type="text/javascript" src="{{url('site-pub/js/v_4_619fb63d8c09c4d00ce069406222c1c7.js')}}"></script>
        <script type="text/javascript" src="{{url('site-pub/js/jquery.elevatezoom.min.js')}}"></script>
        @include('front-include.cartadd')
        <script type="text/javascript">
            /* <![CDATA[ */;
            var zoom_type = 'window';
            var zoom_fade_in = 400;
            var zoom_fade_out = 550;
            var zoom_cursor_type = 'default';
            var zoom_window_pos = 1;
            var zoom_scroll = true;
            var zoom_easing = true;
            var zoom_tint = true;
            var zoom_tint_color = '#333';
            var zoom_tint_opacity = 0.4;
            var zoom_lens_shape = 'round';
            var zoom_lens_size = 420;
            ;

            function applyElevateZoom() {
                var src = $('.thickbox.shown').attr('href');
                var bigimage = $('.fancybox.shown').attr('href');
                $('#bigpic').elevateZoom({
                    zoomType: zoom_type,
                    cursor: zoom_cursor_type,
                    zoomWindowFadeIn: zoom_fade_in,
                    zoomWindowFadeOut: zoom_fade_out,
                    zoomWindowPosition: zoom_window_pos,
                    scrollZoom: zoom_scroll,
                    easing: zoom_easing,
                    tint: zoom_tint,
                    tintColour: zoom_tint_color,
                    tintOpacity: zoom_tint_opacity,
                    lensShape: zoom_lens_shape,
                    lensSize: zoom_lens_size,
                    zoomImage: bigimage,
                    borderSize: 1,
                    borderColour: '#d4d4d4',
                    zoomWindowWidth: 535,
                    zoomWindowHeight: 535,
                    zoomLevel: 0.5,
                    lensBorderSize: 0
                });
            }
            $(document).ready(function () {
                applyElevateZoom();
                $('#color_to_pick_list').click(function () {
                    restartElevateZoom();
                });
                $('#color_to_pick_list').hover(function () {
                    restartElevateZoom();
                });
                $('#views_block li a').hover(function () {
                    restartElevateZoom();
                });
            });

            function restartElevateZoom() {
                $(".zoomContainer").remove();
                applyElevateZoom();
            }
            ;
            ;
            var input = $("#search_query_top");
            $('document').ready(function () {
                var width_ac_results = input.outerWidth();
                Input_focus()
                $("#search_query_top").autocomplete('search', {
                    minChars: 3,
                    max: 10,
                    width: (width_ac_results > 0 ? width_ac_results : 500),
                    selectFirst: false,
                    scroll: true,
                    dataType: "json",
                    formatItem: function (data, i, max, value, term) {
                        return value;
                    },
                    parse: function (data) {
                        var mytab = new Array();
                        for (var i = 0; i < data.length; i++)
                            mytab[mytab.length] = {
                                data: data[i],
                                value: '<img alt="' + data[i].pname + '" src="' + data[i].image + '"><div class="right-search"><h5>' + data[i].pname + '</h5><span class="price">' + data[i].dprice + '</span></div> '
                            };
                        return mytab;
                    },
                    extraParams: {
                        ajaxSearch: 1,
                        id_lang: 1,
                        category_filter: $("#category_filter").val()
                    }
                }).result(function (event, data, formatted) {
                    $('#search_query_top').val(data.pname);
                    document.location.href = data.product_link;
                });
                $("#category_filter").change(function () {
                    $(".ac_results").remove();
                    $("#search_query_top").trigger('unautocomplete');
                    Input_focus()
                    $("#search_query_top").autocomplete('search', {
                        minChars: 3,
                        max: 10,
                        width: (width_ac_results > 0 ? width_ac_results : 500),
                        selectFirst: false,
                        scroll: true,
                        dataType: "json",
                        formatItem: function (data, i, max, value, term) {
                            return value;
                        },
                        parse: function (data) {
                            var mytab = new Array();
                            for (var i = 0; i < data.length; i++)
                                mytab[mytab.length] = {
                                    data: data[i],
                                    value: '<img alt="' + data[i].pname + '" src="' + data[i].image + '"><div class="right-search"><h5>' + data[i].pname + '</h5><span class="price">' + data[i].dprice + '</span></div> '
                                };
                            return mytab;
                        },
                        extraParams: {
                            ajaxSearch: 1,
                            id_lang: 1,
                            category_filter: $("#category_filter").val()
                        }
                    }).result(function (event, data, formatted) {
                        $('#search_query_top').val(data.pname);
                        document.location.href = data.product_link;
                    });
                });
            });

            function Input_focus() {
                $('#search_query_top').on('focus', function () {
                    var width_ac_results = input.outerWidth();
                    var $this = $(this);
                    if ($this.val() == 'Enter your keyword ...') {
                        $this.val('');
                        $('.btn.button-search').addClass('active');
                    }
                }).on('blur', function () {
                    var $this = $(this);
                    if ($this.val() == '') {
                        $this.val('Enter your keyword ...');
                        $('.btn.button-search').removeClass('active');
                    }
                });
            }
            ;
            ;
            jQuery(document).ready(function ($) {
                var _SlideshowTransitions = [{
                        $Duration: 700,
                        $Opacity: 2,
                        $Brother: {
                            $Duration: 1000,
                            $Opacity: 2
                        }
                    }, {
                        $Duration: 1200,
                        $Delay: 20,
                        $Cols: 8,
                        $Rows: 4,
                        $Clip: 15,
                        $During: {
                            $Left: [0.3, 0.7],
                            $Top: [0.3, 0.7]
                        },
                        $SlideOut: true,
                        $FlyDirection: 9,
                        $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                        $Assembly: 260,
                        $Easing: {
                            $Left: $JssorEasing$.$EaseInWave,
                            $Top: $JssorEasing$.$EaseInWave,
                            $Clip: $JssorEasing$.$EaseOutQuad
                        },
                        $ScaleHorizontal: 0.2,
                        $ScaleVertical: 0.1,
                        $Outside: true,
                        $Round: {
                            $Left: 1.3,
                            $Top: 2.5
                        }
                    }, {
                        $Duration: 1000,
                        $Zoom: 1,
                        $Rotate: true,
                        $SlideOut: true,
                        $FlyDirection: 8,
                        $Easing: {
                            $Top: $JssorEasing$.$EaseInCubic,
                            $Zoom: $JssorEasing$.$EaseInCubic,
                            $Opacity: $JssorEasing$.$EaseLinear,
                            $Rotate: $JssorEasing$.$EaseInCubic
                        },
                        $ScaleVertical: 0.5,
                        $Opacity: 2,
                        $Round: {
                            $Rotate: 0.5
                        }
                    }, {
                        $Duration: 1000,
                        $Delay: 30,
                        $Cols: 8,
                        $Rows: 4,
                        $Clip: 15,
                        $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
                        $Assembly: 2050,
                        $Easing: $JssorEasing$.$EaseInQuad
                    }];
                var _CaptionTransitions = [];
                _CaptionTransitions["L"] = {
                    $Duration: 900,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R"] = {
                    $Duration: 900,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T"] = {
                    $Duration: 900,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B"] = {
                    $Duration: 900,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL"] = {
                    $Duration: 900,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR"] = {
                    $Duration: 900,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL"] = {
                    $Duration: 900,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR"] = {
                    $Duration: 900,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutBack,
                        $Top: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutBack,
                        $Top: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutBack,
                        $Top: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR|IB"] = {
                    $Duration: 1200,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutBack,
                        $Top: $JssorEasing$.$EaseInOutBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR|IE"] = {
                    $Duration: 1200,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutExpo,
                        $Top: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutExpo,
                        $Top: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutExpo,
                        $Top: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR|EP"] = {
                    $Duration: 1200,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutExpo,
                        $Top: $JssorEasing$.$EaseInOutExpo
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L*"] = {
                    $Duration: 900,
                    $Rotate: -0.05,
                    $FlyDirection: 1,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R*"] = {
                    $Duration: 900,
                    $Rotate: 0.05,
                    $FlyDirection: 2,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T*"] = {
                    $Duration: 900,
                    $Rotate: -0.05,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B*"] = {
                    $Duration: 900,
                    $Rotate: 0.05,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL*"] = {
                    $Duration: 900,
                    $Rotate: -0.05,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR*"] = {
                    $Duration: 900,
                    $Rotate: 0.05,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL*"] = {
                    $Duration: 900,
                    $Rotate: -0.05,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR*"] = {
                    $Duration: 900,
                    $Rotate: 0.05,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInOutSine
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR*IE"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.3,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR*IB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.3,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L-*IB"] = {
                    $Duration: 900,
                    $Rotate: -0.5,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["R-*IB"] = {
                    $Duration: 900,
                    $Rotate: 0.5,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["T-*IB"] = {
                    $Duration: 900,
                    $Rotate: -0.5,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleVertical: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Top: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["B-*IB"] = {
                    $Duration: 900,
                    $Rotate: 0.5,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleVertical: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Top: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["TL-*IB"] = {
                    $Duration: 900,
                    $Rotate: -0.5,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.7,
                    $ScaleVertical: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["TR-*IB"] = {
                    $Duration: 900,
                    $Rotate: 0.5,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.7,
                    $ScaleVertical: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["BL-*IB"] = {
                    $Duration: 900,
                    $Rotate: -0.5,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.7,
                    $ScaleVertical: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["BR-*IB"] = {
                    $Duration: 900,
                    $Rotate: 0.5,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInBack
                    },
                    $ScaleHorizontal: 0.7,
                    $ScaleVertical: 0.7,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.2, 0.8]
                    }
                };
                _CaptionTransitions["L*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 4,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 8,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TL*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["TR*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BL*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["BR*IW"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Rotate: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["R|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["T|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["B|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["TL|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["TR|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["BL|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["BR|IE*IE"] = {
                    $Duration: 1800,
                    $Zoom: 11,
                    $Rotate: -1.5,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutElastic,
                        $Top: $JssorEasing$.$EaseInOutElastic,
                        $Zoom: $JssorEasing$.$EaseInElastic,
                        $Rotate: $JssorEasing$.$EaseInOutElastic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Zoom: [0, 0.8],
                        $Opacity: [0, 0.7]
                    },
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["CLIP"] = {
                    $Duration: 900,
                    $Clip: 15,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["CLIP|LR"] = {
                    $Duration: 900,
                    $Clip: 3,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["CLIP|TB"] = {
                    $Duration: 900,
                    $Clip: 12,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["CLIP|L"] = {
                    $Duration: 900,
                    $Clip: 1,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["CLIP|R"] = {
                    $Duration: 900,
                    $Clip: 2,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["CLIP|T"] = {
                    $Duration: 900,
                    $Clip: 4,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["CLIP|B"] = {
                    $Duration: 900,
                    $Clip: 8,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["MCLIP|L"] = {
                    $Duration: 900,
                    $Clip: 1,
                    $Move: true,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    }
                };
                _CaptionTransitions["MCLIP|R"] = {
                    $Duration: 900,
                    $Clip: 2,
                    $Move: true,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    }
                };
                _CaptionTransitions["MCLIP|T"] = {
                    $Duration: 900,
                    $Clip: 4,
                    $Move: true,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    }
                };
                _CaptionTransitions["MCLIP|B"] = {
                    $Duration: 900,
                    $Clip: 8,
                    $Move: true,
                    $Easing: {
                        $Clip: $JssorEasing$.$EaseInOutCubic
                    }
                };
                _CaptionTransitions["ZM"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM|P30"] = {
                    $Duration: 900,
                    $Zoom: 1.3,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM|P50"] = {
                    $Duration: 900,
                    $Zoom: 1.5,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM|P70"] = {
                    $Duration: 900,
                    $Zoom: 1.7,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM|P80"] = {
                    $Duration: 900,
                    $Zoom: 1.8,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMF|2"] = {
                    $Duration: 900,
                    $Zoom: 3,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInExpo,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["ZMF|3"] = {
                    $Duration: 900,
                    $Zoom: 4,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInExpo,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["ZMF|4"] = {
                    $Duration: 900,
                    $Zoom: 5,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInExpo,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["ZMF|5"] = {
                    $Duration: 900,
                    $Zoom: 6,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInExpo,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["ZMF|10"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInExpo,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|L"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|R"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|T"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|B"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|TL"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|TR"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|BL"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|BR"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|L"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|R"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|T"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|B"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|TL"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|TR"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|BL"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZML|IE|BR"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInElastic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|L"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|R"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|T"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|B"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|TL"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|TR"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|BL"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZMS|BR"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*JDN|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JUP|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["ZM*JDN|LB*"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.75
                    }
                };
                _CaptionTransitions["ZM*JDN|RB*"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.75
                    }
                };
                _CaptionTransitions["ZM*JDN1|L"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*JDN1|R"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*JDN1|T"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*JDN1|B"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*JUP1|L"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*JUP1|R"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*JUP1|T"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*JUP1|B"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Zoom: 0.5
                    }
                };
                _CaptionTransitions["ZM*WVC|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVC|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVC|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVC|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVC|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVC|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVC|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVC|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WVR|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["ZM*WV*J1|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J1|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J1|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J1|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J1|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3
                    }
                };
                _CaptionTransitions["ZM*WV*J1|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3
                    }
                };
                _CaptionTransitions["ZM*WV*J1|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3
                    }
                };
                _CaptionTransitions["ZM*WV*J1|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3
                    }
                };
                _CaptionTransitions["ZM*WV*J2|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J2|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J2|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J2|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J2|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J2|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J2|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J2|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2
                };
                _CaptionTransitions["ZM*WV*J3|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J3|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J3|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J3|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J3|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J3|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J3|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5
                    }
                };
                _CaptionTransitions["ZM*WV*J3|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5
                    }
                };
                _CaptionTransitions["RTT"] = {
                    $Duration: 900,
                    $Rotate: 1,
                    $Easing: {
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInQuad
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT|90"] = {
                    $Duration: 900,
                    $Rotate: 1,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["RTT|360"] = {
                    $Duration: 900,
                    $Rotate: 1,
                    $Easing: {
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInQuad
                    },
                    $Opacity: 2
                };
                _CaptionTransitions["RTT|0"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInQuad
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT|2"] = {
                    $Duration: 900,
                    $Zoom: 3,
                    $Rotate: 1,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInQuad
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT|3"] = {
                    $Duration: 900,
                    $Zoom: 4,
                    $Rotate: 1,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInQuad
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT|4"] = {
                    $Duration: 900,
                    $Zoom: 5,
                    $Rotate: 1,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInQuad
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT|5"] = {
                    $Duration: 900,
                    $Zoom: 6,
                    $Rotate: 1,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInExpo,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInExpo
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTT|10"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $Easing: {
                        $Zoom: $JssorEasing$.$EaseInExpo,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInExpo
                    },
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|L"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|R"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|T"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|B"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|TL"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|TR"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|BL"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTL|BR"] = {
                    $Duration: 900,
                    $Zoom: 11,
                    $Rotate: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.8
                    }
                };
                _CaptionTransitions["RTTS|L"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTTS|R"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTTS|T"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTTS|B"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTTS|TL"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuad,
                        $Top: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTTS|TR"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuad,
                        $Top: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTTS|BL"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuad,
                        $Top: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTTS|BR"] = {
                    $Duration: 900,
                    $Zoom: 1,
                    $Rotate: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuad,
                        $Top: $JssorEasing$.$EaseInQuad,
                        $Zoom: $JssorEasing$.$EaseInQuad,
                        $Rotate: $JssorEasing$.$EaseInQuad,
                        $Opacity: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 1.2
                    }
                };
                _CaptionTransitions["RTT*JDN|L"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|R"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|T"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|B"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|L"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|R"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|T"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|B"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JUP|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: 0.2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["RTT*JDN|LB*"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.75,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN|RB*"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.75,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN1|L"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN1|R"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN1|T"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN1|B"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JUP1|L"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JUP1|R"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JUP1|T"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JUP1|B"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN1|TL"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN1|TR"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JDN1|BL"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JUP1|TL"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JUP1|TR"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*JUP1|BL"] = {
                    $Duration: 1200,
                    $Zoom: 6,
                    $Rotate: 0.25,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic,
                        $Opacity: $JssorEasing$.$EaseLinear,
                        $Rotate: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WVC|LT"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVC|LB"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVC|RT"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVC|RB"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVC|TL"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVC|TR"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVC|BL"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVC|BR"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|LT"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|LB"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|RT"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|RB"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 2,
                    $ScaleVertical: 0.3,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|TL"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|TR"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|BL"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WVR|BR"] = {
                    $Duration: 1500,
                    $Zoom: 11,
                    $Rotate: 0.3,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 2,
                    $Opacity: 2
                };
                _CaptionTransitions["RTT*WV*J1|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J1|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J1|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J1|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.3,
                        $Top: 0.5,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J1|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J1|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J1|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J1|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.8,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.5]
                    },
                    $Round: {
                        $Left: 0.5,
                        $Top: 0.3,
                        $Rotate: 0.4
                    }
                };
                _CaptionTransitions["RTT*WV*J2|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J2|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J2|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J2|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J2|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J2|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J2|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J2|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -0.6,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.4,
                    $ScaleVertical: 0.8,
                    $Opacity: 2,
                    $Round: {
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|LT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|LB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|RT"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|RB"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInSine,
                        $Top: $JssorEasing$.$EaseOutJump,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Top: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|TL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|TR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|BL"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["RTT*WV*J3|BR"] = {
                    $Duration: 1200,
                    $Zoom: 11,
                    $Rotate: -1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseInSine,
                        $Zoom: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 0.5,
                        $Rotate: 0.5
                    }
                };
                _CaptionTransitions["DDG|TL"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 0.8
                    }
                };
                _CaptionTransitions["DDG|TR"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 0.8
                    }
                };
                _CaptionTransitions["DDG|BL"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 0.8
                    }
                };
                _CaptionTransitions["DDG|BR"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 0.8
                    }
                };
                _CaptionTransitions["DDGDANCE|LT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["DDGDANCE|RT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["DDGDANCE|LB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["DDGDANCE|RB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseInJump,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.8],
                        $Top: [0, 0.8]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["DDGPET|LT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.05,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["DDGPET|LB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.05,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["DDGPET|RT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.05,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["DDGPET|RB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.05,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.8,
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["FLTTR|L"] = {
                    $Duration: 900,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.1,
                    $Opacity: 2,
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["FLTTR|R"] = {
                    $Duration: 900,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.1,
                    $Opacity: 2,
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["FLTTR|T"] = {
                    $Duration: 900,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.1,
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["FLTTR|B"] = {
                    $Duration: 900,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.1,
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|LT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|LB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|RT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|RB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|TL"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine,
                        $Left: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7],
                        $Left: [0.1, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|TR"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine,
                        $Left: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7],
                        $Left: [0.1, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|BL"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine,
                        $Left: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7],
                        $Left: [0.1, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["FLTTRWN|BR"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseInOutSine,
                        $Left: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7],
                        $Left: [0.1, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["LATENCY|LT"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 0.4
                    }
                };
                _CaptionTransitions["LATENCY|LB"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 0.4
                    }
                };
                _CaptionTransitions["LATENCY|RT"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 0.4
                    }
                };
                _CaptionTransitions["LATENCY|RB"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInOutSine,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.1, 0.7]
                    },
                    $Round: {
                        $Top: 0.4
                    }
                };
                _CaptionTransitions["LATENCY|TL"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseOutSine,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.1, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.4
                    }
                };
                _CaptionTransitions["LATENCY|TR"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseOutSine,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.1, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.4
                    }
                };
                _CaptionTransitions["LATENCY|BL"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseOutSine,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.1, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.4
                    }
                };
                _CaptionTransitions["LATENCY|BR"] = {
                    $Duration: 1200,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseOutSine,
                        $Zoom: $JssorEasing$.$EaseInOutQuad
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.1, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 0.4
                    }
                };
                _CaptionTransitions["TORTUOUS|HL"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 1,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|HR"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 2,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|VB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 8,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|VT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 4,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|LT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|LB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|RT"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|RB"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Top: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleVertical: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|TL"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|TR"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|BL"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["TORTUOUS|BR"] = {
                    $Duration: 1800,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Zoom: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.2,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["SPACESHIP|LT"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuint,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Opacity: $JssorEasing$.$EaseInQuint
                    },
                    $ScaleHorizontal: 1,
                    $ScaleVertical: 0.1,
                    $Opacity: 2
                };
                _CaptionTransitions["SPACESHIP|LB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: -0.1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuint,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Opacity: $JssorEasing$.$EaseInQuint
                    },
                    $ScaleHorizontal: 1,
                    $ScaleVertical: 0.1,
                    $Opacity: 2
                };
                _CaptionTransitions["SPACESHIP|RT"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuint,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Opacity: $JssorEasing$.$EaseInQuint
                    },
                    $ScaleHorizontal: 1,
                    $ScaleVertical: 0.1,
                    $Opacity: 2
                };
                _CaptionTransitions["SPACESHIP|RB"] = {
                    $Duration: 1200,
                    $Zoom: 3,
                    $Rotate: 0.1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInQuint,
                        $Top: $JssorEasing$.$EaseInWave,
                        $Opacity: $JssorEasing$.$EaseInQuint
                    },
                    $ScaleHorizontal: 1,
                    $ScaleVertical: 0.1,
                    $Opacity: 2
                };
                _CaptionTransitions["ATTACK|LT"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInExpo,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.1,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.3, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["ATTACK|LB"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInExpo,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.1,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.3, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["ATTACK|RT"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInExpo,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.1,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.3, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["ATTACK|RB"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInExpo,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.1,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.7],
                        $Top: [0.3, 0.7]
                    },
                    $Round: {
                        $Top: 1.3
                    }
                };
                _CaptionTransitions["ATTACK|TL"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInExpo
                    },
                    $ScaleHorizontal: 0.1,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.3, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["ATTACK|TR"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInExpo
                    },
                    $ScaleHorizontal: 0.1,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.3, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["ATTACK|BL"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInExpo
                    },
                    $ScaleHorizontal: 0.1,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.3, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["ATTACK|BR"] = {
                    $Duration: 1500,
                    $Zoom: 1,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseInExpo
                    },
                    $ScaleHorizontal: 0.1,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.3, 0.7],
                        $Top: [0, 0.7]
                    },
                    $Round: {
                        $Left: 1.3
                    }
                };
                _CaptionTransitions["LISTV|L"] = {
                    $Duration: 1500,
                    $Clip: 4,
                    $FlyDirection: 1,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTV|R"] = {
                    $Duration: 1500,
                    $Clip: 4,
                    $FlyDirection: 2,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTH|L"] = {
                    $Duration: 1500,
                    $Clip: 1,
                    $FlyDirection: 1,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTH|R"] = {
                    $Duration: 1500,
                    $Clip: 1,
                    $FlyDirection: 2,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTVC|L"] = {
                    $Duration: 1500,
                    $Clip: 12,
                    $FlyDirection: 1,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTVC|R"] = {
                    $Duration: 1500,
                    $Clip: 12,
                    $FlyDirection: 2,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTVC|B"] = {
                    $Duration: 1500,
                    $Clip: 12,
                    $FlyDirection: 8,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleVertical: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Top: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTVC|T"] = {
                    $Duration: 1500,
                    $Clip: 12,
                    $FlyDirection: 4,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleVertical: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Top: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTHC|L"] = {
                    $Duration: 1500,
                    $Clip: 3,
                    $FlyDirection: 1,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTHC|R"] = {
                    $Duration: 1500,
                    $Clip: 3,
                    $FlyDirection: 2,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleHorizontal: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTHC|B"] = {
                    $Duration: 1500,
                    $Clip: 3,
                    $FlyDirection: 8,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleVertical: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Top: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["LISTHC|T"] = {
                    $Duration: 1500,
                    $Clip: 3,
                    $FlyDirection: 4,
                    $Easing: $JssorEasing$.$EaseInOutCubic,
                    $ScaleVertical: 0.8,
                    $ScaleClip: 0.8,
                    $Opacity: 2,
                    $During: {
                        $Top: [0.4, 0.6],
                        $Clip: [0, 0.4],
                        $Opacity: [0.4, 0.6]
                    }
                };
                _CaptionTransitions["WV|L"] = {
                    $Duration: 1800,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["WV|R"] = {
                    $Duration: 1800,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["WV|T"] = {
                    $Duration: 1200,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["WV|B"] = {
                    $Duration: 1200,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["WVC|L"] = {
                    $Duration: 1800,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["WVC|R"] = {
                    $Duration: 1800,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["WVC|T"] = {
                    $Duration: 1200,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["WVC|B"] = {
                    $Duration: 1200,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["WVR|L"] = {
                    $Duration: 1800,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["WVR|R"] = {
                    $Duration: 1800,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.3,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["JDN|L"] = {
                    $Duration: 2000,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutJump
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["JDN|R"] = {
                    $Duration: 2000,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutJump
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["JDN|T"] = {
                    $Duration: 1500,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["JDN|B"] = {
                    $Duration: 1500,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutJump,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["JUP|L"] = {
                    $Duration: 2000,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInJump
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["JUP|R"] = {
                    $Duration: 2000,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInJump
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.4,
                    $Opacity: 2,
                    $Round: {
                        $Top: 2.5
                    }
                };
                _CaptionTransitions["JUP|T"] = {
                    $Duration: 1500,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["JUP|B"] = {
                    $Duration: 1500,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInJump,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.3,
                    $ScaleVertical: 0.6,
                    $Opacity: 2,
                    $Round: {
                        $Left: 1.5
                    }
                };
                _CaptionTransitions["FADE"] = {
                    $Duration: 900,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JDN|L"] = {
                    $Duration: 1200,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JDN|R"] = {
                    $Duration: 1200,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JDN|T"] = {
                    $Duration: 1200,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JDN|B"] = {
                    $Duration: 1200,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JUP|L"] = {
                    $Duration: 900,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JUP|R"] = {
                    $Duration: 900,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JUP|T"] = {
                    $Duration: 900,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["FADE*JUP|B"] = {
                    $Duration: 900,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.6,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["L-JDN"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["R-JDN"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["T-JDN"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["B-JDN"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["L-JUP"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["R-JUP"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInCubic
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.5,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["T-JUP"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["B-JUP"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInCubic,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["L-WVC"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.3,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["R-WVC"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseOutWave
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.3,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["T-WVC"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 5,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["B-WVC"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseOutWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["L-WVR"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 9,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.3,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["R-WVR"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseLinear,
                        $Top: $JssorEasing$.$EaseInWave
                    },
                    $ScaleHorizontal: 0.8,
                    $ScaleVertical: 0.3,
                    $During: {
                        $Top: [0, 0.5]
                    }
                };
                _CaptionTransitions["T-WVR"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 6,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["B-WVR"] = {
                    $Duration: 1200,
                    $Opacity: 2,
                    $FlyDirection: 10,
                    $Easing: {
                        $Left: $JssorEasing$.$EaseInWave,
                        $Top: $JssorEasing$.$EaseLinear
                    },
                    $ScaleHorizontal: 0.2,
                    $ScaleVertical: 0.8,
                    $During: {
                        $Left: [0, 0.5]
                    }
                };
                _CaptionTransitions["CLIP-FADE"] = {
                    $Duration: 1200,
                    $Clip: 15,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["CLIP|LR-FADE"] = {
                    $Duration: 1200,
                    $Clip: 3,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["CLIP|TB-FADE"] = {
                    $Duration: 1200,
                    $Clip: 12,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["CLIP|L-FADE"] = {
                    $Duration: 1200,
                    $Clip: 1,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["CLIP|R-FADE"] = {
                    $Duration: 1200,
                    $Clip: 2,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["CLIP|T-FADE"] = {
                    $Duration: 1200,
                    $Clip: 4,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["CLIP|B-FADE"] = {
                    $Duration: 1200,
                    $Clip: 8,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["MCLIP|L-FADE"] = {
                    $Duration: 1200,
                    $Clip: 1,
                    $Move: true,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["MCLIP|R-FADE"] = {
                    $Duration: 1200,
                    $Clip: 2,
                    $Move: true,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["MCLIP|T-FADE"] = {
                    $Duration: 1200,
                    $Clip: 4,
                    $Move: true,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["MCLIP|B-FADE"] = {
                    $Duration: 1200,
                    $Clip: 8,
                    $Move: true,
                    $Opacity: 1.7,
                    $During: {
                        $Clip: [0.5, 0.5],
                        $Opacity: [0, 0.5]
                    }
                };
                _CaptionTransitions["L*CLIP"] = {
                    $Duration: 1200,
                    $Clip: 12,
                    $FlyDirection: 1,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["R*CLIP"] = {
                    $Duration: 1200,
                    $Clip: 12,
                    $FlyDirection: 2,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $ScaleHorizontal: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T*CLIP"] = {
                    $Duration: 1200,
                    $Clip: 3,
                    $FlyDirection: 4,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["B*CLIP"] = {
                    $Duration: 1200,
                    $Clip: 3,
                    $FlyDirection: 8,
                    $Easing: $JssorEasing$.$EaseInCubic,
                    $ScaleVertical: 0.6,
                    $Opacity: 2
                };
                _CaptionTransitions["T-L*"] = {
                    $Duration: 1500,
                    $Rotate: -1,
                    $FlyDirection: 5,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.33],
                        $Top: [0.67, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["T-R*"] = {
                    $Duration: 1500,
                    $Rotate: 1,
                    $FlyDirection: 6,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.33],
                        $Top: [0.67, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["B-L*"] = {
                    $Duration: 1500,
                    $Rotate: -1,
                    $FlyDirection: 9,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.33],
                        $Top: [0.67, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["B-R*"] = {
                    $Duration: 1500,
                    $Rotate: -1,
                    $FlyDirection: 10,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.33],
                        $Top: [0.67, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["L-T*"] = {
                    $Duration: 1500,
                    $Rotate: -1,
                    $FlyDirection: 5,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.67, 0.33],
                        $Top: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["L-B*"] = {
                    $Duration: 1500,
                    $Rotate: -1,
                    $FlyDirection: 10,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.67, 0.33],
                        $Top: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["R-T*"] = {
                    $Duration: 1500,
                    $Rotate: -1,
                    $FlyDirection: 6,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.67, 0.33],
                        $Top: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["R-B*"] = {
                    $Duration: 1500,
                    $Rotate: -1,
                    $FlyDirection: 10,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0.67, 0.33],
                        $Top: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["FADE-L*"] = {
                    $Duration: 1500,
                    $Rotate: 6.25,
                    $FlyDirection: 1,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["FADE-R*"] = {
                    $Duration: 1500,
                    $Rotate: 6.25,
                    $FlyDirection: 2,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleHorizontal: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Left: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["FADE-T*"] = {
                    $Duration: 1500,
                    $Rotate: 6.25,
                    $FlyDirection: 4,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                _CaptionTransitions["FADE-B*"] = {
                    $Duration: 1500,
                    $Rotate: 6.25,
                    $FlyDirection: 8,
                    $Easing: $JssorEasing$.$EaseLinear,
                    $ScaleVertical: 0.5,
                    $Opacity: 2,
                    $During: {
                        $Top: [0, 0.33],
                        $Rotate: [0, 0.33]
                    },
                    $Round: {
                        $Rotate: 0.25
                    }
                };
                var options = {
                    $FillMode: 2,
                    $AutoPlay: true,
                    $AutoPlayInterval: 3000,
                    $PauseOnHover: 1,
                    $ArrowKeyNavigation: true,
                    $SlideEasing: $JssorEasing$.$EaseOutQuint,
                    $SlideDuration: 800,
                    $MinDragOffsetToSlide: 20,
                    $SlideSpacing: 0,
                    $DisplayPieces: 1,
                    $ParkingPosition: 0,
                    $UISearchMode: 1,
                    $PlayOrientation: 1,
                    $DragOrientation: 1,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: _SlideshowTransitions,
                        $TransitionsOrder: 0,
                        $ShowLink: true
                    },
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlider$,
                        $CaptionTransitions: _CaptionTransitions,
                        $PlayInMode: 10,
                        $PlayOutMode: 4
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$,
                        $ChanceToShow: 2,
                        $AutoCenter: 1,
                        $Steps: 1,
                        $Lanes: 1,
                        $SpacingX: 8,
                        $SpacingY: 8,
                        $Orientation: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,
                        $ChanceToShow: 2,
                        $AutoCenter: 2,
                        $Steps: 1
                    }
                };
                var insideslider_mod = new $JssorSlider$("insideslider_mod", options);
                $('.homepage-slideshow [data-u="arrowleft"]').on('click', function () {
                    insideslider_mod.$Prev();
                });
                $('.homepage-slideshow [data-u="arrowleft"]').on('click', function () {
                    insideslider_mod.$Next();
                });

                function ScaleSlider() {
                    var cfgWidth = 1920;
                    var cfgHeight = 600;
                    var parentWidth = insideslider_mod.$Elmt.parentNode.clientWidth;
                    var slideCurrWidth = $('#insideslider_mod').outerWidth();
                    var baseWidthMax = 1200;
                    var slideWrapRate = baseWidthMax / cfgHeight;
                    var arrowleft = $('#insideslider_mod [data-u="arrowleft"]');
                    var arrowright = $('#insideslider_mod [data-u="arrowright"]');
                    if (cfgWidth <= baseWidthMax) {
                        arrowleft.css({
                            'left': 30
                        });
                        arrowright.css({
                            'right': 30
                        });
                    } else {
                        arrowleft.css({
                            'left': ((cfgWidth - baseWidthMax) / 2) + 30
                        });
                        arrowright.css({
                            'right': ((cfgWidth - baseWidthMax) / 2) + 30
                        });
                    }
                    $('#insideslider_mod').css({
                        'left': '50%',
                        'margin-left': -(slideCurrWidth / 2)
                    })
                    if (parentWidth) {
                        if (cfgWidth > baseWidthMax) {
                            if (parentWidth <= baseWidthMax) {
                                insideslider_mod.$ScaleHeight(parentWidth / slideWrapRate);
                            } else {
                                insideslider_mod.$ScaleHeight(cfgHeight);
                            }
                        } else {
                            insideslider_mod.$ScaleWidth(Math.min(cfgWidth, parentWidth));
                        }
                    } else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $(window).on('resize', ScaleSlider);
                }
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
            });
            jQuery(window).on('load', function () {
                jQuery('#insideslider_mod .loading').fadeOut();
            });
            ;
            $(document).ready(function () {
                $('#slide').cycle({
                    fx: 'scrollHorz',
                    speed: 1000,
                    timeout: 3000000,
                    next: '.next',
                    prev: '.prev',
                    pager: '#pagination_cycle'
                });
                $('#media_post').fancybox();
                $('.fancybox-media').attr('rel', 'media-gallery').fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',
                    arrows: false,
                    helpers: {
                        media: {},
                        buttons: {}
                    }
                });
                if ($(window).width() < 768) {
                    $('#left_column #wrapper').css({
                        'display': 'none'
                    });
                    $('#right_column #wrapper').css({
                        'display': 'none'
                    });
                }
            });
            ;
            $('.list_subCate').owlCarousel({
                itemsCustom: [
                    [0, 1],
                    [320, 1],
                    [480, 1],
                    [768, 1],
                    [992, 1],
                    [1200, 1]
                ],
                responsiveRefreshRate: 50,
                slideSpeed: 200,
                paginationSpeed: 500,
                rewindSpeed: 600,
                autoPlay: false,
                stopOnHover: true,
                rewindNav: true,
                pagination: false,
                navigation: true,
                navigationText: ['<div class="carousel-previous disable-select"><span class="icon-angle-left"></span></div>', '<div class="carousel-next disable-select"><span class="icon-angle-right"></span></div>']
            });
            ;
            var placeholder2 = "Enter email address";
            $(document).ready(function () {
                $('#newsletter-input-popup').on({
                    focus: function () {
                        if ($(this).val() == placeholder2) {
                            $(this).val('');
                        }
                    },
                    blur: function () {
                        if ($(this).val() == '') {
                            $(this).val(placeholder2);
                        }
                    }
                });
            }); /* ]]> */
        </script>
       
@endsection