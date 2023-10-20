<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-ico" />

    <title>{{ $profileEnglishTable->name }}</title>

    <link rel='stylesheet' href='{{ asset('Application/css/settings.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/animsition.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/font-awesome.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/flaticon.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/jquery.easy-pie-chart.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/owl.carousel.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/owl.transitions.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/pe-icon-7-stroke.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/media.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/composer.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/custom_script.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/owl.transitions.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Application/css/bootstrap/bootstrap.css') }}' type='text/css'
        media='all' />


</head>

<body
    class="home page page-id-7 page-parent page-template page-template-template-one-pager page-template-template-one-pager-php wpb-js-composer js-comp-ver-4.12 vc_responsive">
    <div class="overlay overlay-slidedown">
        <div class="fa overlay-close fa-close"></div>
        <div class="popup-search-wrapper">
            <form method="get" id="searchform" class="search-form" action="#">
                <div>
                    <input type="text" id="s" name="s" value="Type text and hit enter"
                        onfocus="if(this.value=='Type text and hit enter')this.value='';"
                        onblur="if(this.value=='')this.value='Type text and hit enter';" autocomplete="off">
                </div>
            </form>
        </div>
    </div>
    <div class="animsition global-wrapper">
        <div class="boxed-wrapper">
            <section id="home" class="onepager_section_class first-onepage-section first-page-item">
            </section>

            <div id="header" class="wrapper-special">
                <div class="logo">
                    <a href="index.html" title="ENES"><img class="logoImage" src="images/logo.png"
                            alt="ENES" /><img class="logoImageRetina" src="images/logo-retina.png"
                            alt="ENES" /></a>
                    <div class="clear"></div>
                </div>
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                    <!-- START REVOLUTION SLIDER 5.2.6 auto mode -->
                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.2.6">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="zoomout" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut"
                                data-easeout="Power4.easeInOut" data-masterspeed="2000"
                                data-thumb="upload/cat-slider-100x50.jpg" data-rotate="0" data-fstransition="fade"
                                data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
                                data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset(str_replace('\\', '/', $profileEnglishTable->mainImage)) }}"
                                    alt="" title="cat-slider" width="1600" height="923"
                                    data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-1-layer-1"
                                    data-x="center" data-y="center" data-voffset="-35"
                                    data-width="['auto','auto','auto','auto']"
                                    data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on">BackEnd
                                    <span style="color:#fff;">Developer</span>
                                </div>


                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption NotGeneric-SubTitle hideonmob  tp-resizeme"
                                    id="slide-1-layer-4" data-x="center" data-y="center" data-voffset="20"
                                    data-width="['auto','auto','auto','auto']"
                                    data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;"
                                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2500"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on">Hello there!
                                    My Name is <span style="color:#daae19;">{{ $profileEnglishTable->name }} </span>
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption hideonmob  tp-resizeme" id="slide-1-layer-11" data-x="828"
                                    data-y="462" data-width="['auto']" data-height="['auto']"
                                    data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;"
                                    data-transform_out="opacity:0;s:300;e:Power2.easeInOut;" data-start="4500"
                                    data-splitin="none" data-splitout="none" data-responsive_offset="on"></div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" id="div_285e_0"></div>
                    </div>

                </div>
                <!-- END REVOLUTION SLIDER -->
                <div id="header2" class="header-wrapper-special">
                    <div class="menu-wrapper">
                        <div class="main-menu">
                            <div class="menu-main-nav-menu-container">
                                <ul id="menu-main-nav-menu" class="sf-menu">
                                    <li class="menu-item menu-item-has-children"><a href="#home">Home</a>

                                    </li>
                                    <li class="menu-item"><a href="#about">About</a></li>
                                    <li class="menu-item"><a href="#services">Our services</a></li>
                                    <li class="menu-item"><a href="#portfolio">Portfolio</a></li>
                                    {{-- <li class="menu-item"><a href="#experience">Experience</a></li>
                                    <li class="menu-item"><a href="#blog">Blog</a></li>
                                    <li class="menu-item"><a href="#contact">Contact</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div id="trigger-overlay" class="fa home-header-search fa-search"></div>
                        <div class="menu-icons-inside">
                            <div class="menu-icon menu-icon-mobile"><span class="menu-icon-create"></span></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header-extra"></div>
            </div>
            <div class="mobile-menu-wrapper">
                <div class="menu-main-nav-menu-container">
                    <ul id="menu-main-nav-menu-1" class="mobile-menu">
                        <li class="menu-item menu-item-has-children"><a href="#home">Home</a>
                            <ul class="submenu_1">
                                <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#about">About</a></li>
                        <li class="menu-item"><a href="#services">Our services</a></li>
                        <li class="menu-item"><a href="#portfolio">Portfolio</a></li>
                        <li class="menu-item"><a href="#experience">Experience</a></li>
                        <li class="menu-item"><a href="#blog">Blog</a></li>
                        <li class="menu-item"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="container-wrapper home-container">
                <div id="container">
                    <!-- start container -->
                    <section class="onepager_section_class first-onepage-section first-page-item">
                        <div class="inside-section">
                            <div class="inner-container">
                                <!-- start inner container -->
                            </div>
                            <!-- end inner container -->
                        </div>
                    </section>
                    <section id="about" class="other-page-item onepager_section_class">
                        <div id="post-9" class="post-9 page type-page status-publish hentry">
                            <div class="center">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-8">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_content_element vc_hireme_about">
                                                    <div class="about-sh-left">
                                                        <div class="about-sh-title">{{ $profileEnglishTable->name }}
                                                        </div>
                                                        <div class="about-sh-subtitle">
                                                            {{ $profileEnglishTable->workPakage }}
                                                        </div>
                                                        <div class="about-sh-border"></div>
                                                        <div class="about-sh-content">
                                                            {{ $profileEnglishTable->biography }}
                                                        </div>
                                                        {{-- <div class="about-sh-button-wrapper"><a
                                                                class="about-sh-button" target="_self"
                                                                href="home-2.html" title="ENES">Read More</a></div> --}}
                                                    </div>
                                                    <div class="about-sh-right about-sh-image"><img
                                                            src="{{ $profileEnglishTable->profileImage }}"
                                                            alt="John Smith" />
                                                        <div class="about-sh-line-start"></div>
                                                        <div class="about-sh-line-end"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper d-flex flex-column">
                                                <div class="vc_empty_space" id="div_8e37_0"><span
                                                        class="vc_empty_space_inner"></span></div>
                                                <div
                                                    class="vc_progress_bar wpb_content_element  vc_progress-bar-color-bar_grey">
                                                    <div class="about-right-persian">
                                                        <div class="about-sh-title-persian">
                                                            {{ $profilePersianhTable->name }}
                                                        </div>
                                                        <div class="about-sh-subtitle-persian">
                                                            {{ $profilePersianhTable->workPakage }}
                                                        </div>
                                                        <div class="about-sh-border"></div>
                                                        <div class="about-sh-content">
                                                            {{ $profilePersianhTable->biography }}
                                                        </div>
                                                        {{-- <div class="about-sh-button-wrapper"><a
                                                                class="about-sh-button" target="_self"
                                                                href="home-2.html" title="ENES">Read More</a></div> --}}
                                                    </div>
                                                </div>
                                                <div class="wpb_content_element vc_socials">
                                                    <ul class="socials-sh">

                                                        @foreach ($socialMedia as $media)
                                                            <li>
                                                                <a class="fa  sh-socials-url {{ $media->icon }}"
                                                                    href="{{ $media->url }}"
                                                                    title="{{ $media->name }}" target="_blank"
                                                                    id="a_8e37_3"></a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid widther-box">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_content_element vc_hireme_columnwithicon">
                                                    <div class="cwi-wrapper">
                                                        <div class="cwi-single">
                                                            <div class="cwi-icon-wrapper"><span
                                                                    class="cwi-icon flaticon-smartphone"></span>
                                                            </div>
                                                            <div class="cwi-details">
                                                                <div class="cwi-title">Phone number</div>
                                                                <div class="cwi-content">
                                                                    {{ $callsTable->phonenumber }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cwi-single odd-cwi-item">
                                                            <div class="cwi-icon-wrapper"><span
                                                                    class="cwi-icon flaticon-placeholder-3"></span>
                                                            </div>
                                                            <div class="cwi-details">
                                                                <div class="cwi-title">User address</div>
                                                                <div class="cwi-content"> {{ $callsTable->addres }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cwi-single">
                                                            <div class="cwi-icon-wrapper"><span
                                                                    class="cwi-icon flaticon-paper-plane-1"></span>
                                                            </div>
                                                            <div class="cwi-details">
                                                                <div class="cwi-title">Email Address</div>
                                                                <div class="cwi-content"> {{ $callsTable->email }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </section>
                    @if ($ServicesTable !== null)
                        <section id="services" class="other-page-item onepager_section_class">
                            <div id="post-11" class="post-11 page type-page status-publish hentry">
                                <div class="center">
                                    <div class="onepage-title-wrapper">
                                        <div class="title-icon">
                                            <div class="title-icon-line"></div>
                                            <div class="title-icon-line line-short"></div>
                                            <div class="title-icon-line line-short"></div>
                                            <div class="title-icon-line"></div>
                                        </div>
                                        <h1 class="onepage-title">Our services</h1>
                                        <div class="clear"></div>
                                        <div class="onepage-subtitle">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div id="service-items-4421"
                                                        class="wpb_content_element vc_hireme_services wpb_appear">
                                                        <div class="all-service-items">
                                                            <div class="all-service-items-inside">
                                                                @foreach ($ServicesTable as $ServiceTable)
                                                                    @if ($ServiceTable->status == 1)
                                                                        <div
                                                                            class="single-service-item service-column4 service-item-graphics-design">
                                                                            <div class="single-service-item-inside ">
                                                                                <img src="{{ asset($ServiceTable->icon) }}"
                                                                                    alt=""
                                                                                    style="width: 50px; height: 50px;"
                                                                                    class="m-2"></span>
                                                                                <div class="service-title pt-4">
                                                                                    {{ $ServiceTable->title }}
                                                                                </div>
                                                                                <div class="service-overlay">
                                                                                    <div
                                                                                        class="title-icon-type2 main-color">
                                                                                        <div class="title-icon-line2">
                                                                                        </div>
                                                                                        <div
                                                                                            class="title-icon-line2 line-short-left">
                                                                                        </div>
                                                                                        <div
                                                                                            class="title-icon-line2 line-short-right">
                                                                                        </div>
                                                                                        <div class="clear"></div>
                                                                                        <div class="title-icon-line2">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="service-excerpt">
                                                                                        {{ $ServiceTable->discription }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="title-icon-type2 dark">
                                                                                    <div class="title-icon-line2">
                                                                                    </div>
                                                                                    <div
                                                                                        class="title-icon-line2 line-short-left">
                                                                                    </div>
                                                                                    <div
                                                                                        class="title-icon-line2 line-short-right">
                                                                                    </div>
                                                                                    <div class="clear"></div>
                                                                                    <div class="title-icon-line2">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach


                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="testimonials-row1" data-vc-parallax="1.5"
                                        data-vc-parallax-image="upload/img-parallax.jpg"
                                        class="vc_row wpb_row vc_row-fluid fullwidth-bg vc_custom_1470821240606 vc_row-has-fill vc_row-o-content-middle vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                        {{-- <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="onepage-title-wrapper wpb_appear">
                                                        <div class="title-icon">
                                                            <div class="title-icon-line"></div>
                                                            <div class="title-icon-line line-short"></div>
                                                            <div class="title-icon-line line-short"></div>
                                                            <div class="title-icon-line"></div>
                                                        </div>
                                                        <h1 class="onepage-title" id="h1_8e37_0">Interested users</h1>
                                                        <div class="clear"></div>
                                                    </div>
                                                    {{-- <div class="vc_testimonials wpb_content_element">
                                                        <div class="owl-carousel owl-theme testimonials-wrapper">
                                                            <div class="item">
                                                                <div class="testimonial-content">Excepteur sint
                                                                    occaecat
                                                                    cupidatat non proident, sunt in culpa qui officia
                                                                    deserunt mollit anim id est dolor sit amet,
                                                                    consectetur
                                                                    adipisicing elit sed do eiusmod tempor incididunt ut
                                                                    labore..</div>
                                                                <div class="testimonial-thumb"><img
                                                                        src="upload/testimonials.jpg" width="140"
                                                                        height="140" alt="testimonials" /></div>
                                                                <div class="testimonial-author-details">
                                                                    <div class="testimonial-author-quote-sign"></div>
                                                                    <div class="testimonial-author-position">Graphic
                                                                        Designer</div>
                                                                    <div class="testimonial-author-name">Lisa Porter
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="testimonial-content">Excepteur sint
                                                                    occaecat
                                                                    cupidatat non proident, sunt in culpa qui officia
                                                                    deserunt mollit anim id est dolor sit amet,
                                                                    consectetur
                                                                    adipisicing elit sed do eiusmod tempor incididunt ut
                                                                    labore..</div>
                                                                <div class="testimonial-thumb"><img
                                                                        src="upload/testimonialss.jpg" width="140"
                                                                        height="140" alt="testimonialss" /></div>
                                                                <div class="testimonial-author-details">
                                                                    <div class="testimonial-author-quote-sign"></div>
                                                                    <div class="testimonial-author-position">Marketing
                                                                        Expert</div>
                                                                    <div class="testimonial-author-name">John Smith
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="testimonial-content">Excepteur sint
                                                                    occaecat
                                                                    cupidatat non proident, sunt in culpa qui officia
                                                                    deserunt mollit anim id est dolor sit amet,
                                                                    consectetur
                                                                    adipisicing elit sed do eiusmod tempor incididunt ut
                                                                    labore..</div>
                                                                <div class="testimonial-thumb"><img
                                                                        src="upload/testimonialsss.jpg" width="140"
                                                                        height="140" alt="testimonialsss" /></div>
                                                                <div class="testimonial-author-details">
                                                                    <div class="testimonial-author-quote-sign"></div>
                                                                    <div class="testimonial-author-position">HTML
                                                                        Designer
                                                                    </div>
                                                                    <div class="testimonial-author-name">Joan Parker
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="testimonial-content">Excepteur sint
                                                                    occaecat
                                                                    cupidatat non proident, sunt in culpa qui officia
                                                                    deserunt mollit anim id est dolor sit amet,
                                                                    consectetur
                                                                    adipisicing elit sed do eiusmod tempor incididunt ut
                                                                    labore..</div>
                                                                <div class="testimonial-thumb"><img
                                                                        src="upload/testimonial-img-140x140.jpg"
                                                                        width="140" height="140"
                                                                        alt="testimonial-img" /></div>
                                                                <div class="testimonial-author-details">
                                                                    <div class="testimonial-author-quote-sign"></div>
                                                                    <div class="testimonial-author-position">Designer
                                                                    </div>
                                                                    <div class="testimonial-author-name">Michael Smith
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                            <div class="clear"></div>
                </div>
            </div>
            </section>
            @endif

            <section id="portfolio" class="other-page-item onepager_section_class">
                <div id="post-13" class="post-13 page type-page status-publish hentry">
                    <div class="center">
                        <div class="onepage-title-wrapper">
                            <div class="title-icon">
                                <div class="title-icon-line"></div>
                                <div class="title-icon-line line-short"></div>
                                <div class="title-icon-line line-short"></div>
                                <div class="title-icon-line"></div>
                            </div>
                            <h1 class="onepage-title">Portfolio</h1>
                            <div class="clear"></div>
                            <div class="onepage-subtitle">This is my work for special clients</div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>

                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_content_element vc_portfolio_items">
                                            <div class="portfolio-items-filter-wrapper">
                                                <ul id="filters" class="option-set" data-option-key="filter">
                                                    <li class="filter-cat"><a href="#filter" data-option-value="*"
                                                            class="selected">All</a>
                                                    </li>
                                                    @foreach ($categoryPortfolios as $categoryPortfolio)
                                                        <li class="filter-cat"><a href="#filter"
                                                                data-option-value=".{{ $categoryPortfolio->name }}">{{ $categoryPortfolio->name }}</a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <div class="clear"></div>
                                            </div>
                                            <div
                                                class="pego-isotope-wrapper portfolio-items-wrapper portfolio-items-379">

                                                @forelse ($Portfolios as $Portfolio)
                                                    @if ($Portfolio->status == 1)
                                                        <div
                                                            class="portfolio-items-single isotope-item  presentation {{ $Portfolio->category->name }}">
                                                            <div class="portfolio-items-thumbnail-wrapper"><img
                                                                    src="{{ asset($Portfolio->image) }}"
                                                                    width="430" height="500">
                                                                <a href="{{ $Portfolio->url }}"
                                                                    class="portfolio-items-overlay">
                                                                    <div class="table_view">
                                                                        <div class="table_cell"><span
                                                                                class="fa portfolio-items-icons fa-link"></span>
                                                                            <div class="portfolio-items-date">
                                                                                @if ($Portfolio->created_at->diffInMonths() === 0)
                                                                                    Less than a month
                                                                                @else
                                                                                    {{ $Portfolio->created_at->diffInMonths() }}
                                                                                    months ago
                                                                                @endif
                                                                            </div>
                                                                            <div class="portfolio-items-title">
                                                                                {{ $Portfolio->title }}</div>
                                                                            <div class="title-icon-type2 light">
                                                                                <div class="title-icon-line2">
                                                                                </div>
                                                                                <div
                                                                                    class="title-icon-line2 line-short-left">
                                                                                </div>
                                                                                <div
                                                                                    class="title-icon-line2 line-short-right">
                                                                                </div>
                                                                                <div class="clear"></div>
                                                                                <div class="title-icon-line2">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="portfolio-hover-line-start"></div>
                                                                    <div class="portfolio-hover-line-end"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div
                                                            class="portfolio-items-single isotope-item  presentation text-center">
                                                            <div class="portfolio-items-thumbnail-wrapper text-center">
                                                                <h3 class="text-center">notting Portfolio</h3>
                                                            </div>
                                                        </div>
                                                    @endif

                                                @empty
                                                    <div
                                                        class="portfolio-items-single isotope-item  presentation text-center">
                                                        <div class="portfolio-items-thumbnail-wrapper text-center">
                                                            <h3 class="text-center">notting Portfolio</h3>
                                                        </div>
                                                    </div>
                                                @endforelse

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>

            @if ($SkillsTable->where('status', 1)->count() > 0)
                <div class="wpb_column vc_column_container p-5">
                    <div class="vc_column-inner ">
                        <div class="onepage-title-wrapper">
                            <div class="title-icon">
                                <div class="title-icon-line"></div>
                                <div class="title-icon-line line-short"></div>
                                <div class="title-icon-line line-short"></div>
                                <div class="title-icon-line"></div>
                            </div>
                            <h1 class="onepage-title">Skills</h1>
                            <div class="clear"></div>
                            <div class="onepage-subtitle">This is my Skills</div>
                            <div class="clear"></div>
                        </div>
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space" id="div_8e37_0"><span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="vc_progress_bar wpb_content_element  vc_progress-bar-color-bar_grey">
                                @foreach ($SkillsTable as $skill)
                                    @if ($skill->status == 1)
                                        <div class="vc_general vc_single_bar"><small
                                                class="vc_label">{{ $skill->name }}
                                                <span
                                                    class="vc_label_units">{{ $skill->masteryPercentage }}%</span></small><span
                                                class="vc_bar "
                                                data-percentage-value="{{ $skill->masteryPercentage }}"
                                                data-value=""
                                                style="width: {{ $skill->masteryPercentage }}%;"></span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            @endif
            <section class="other-page-item onepager_section_class">
                <div id="post-19" class="post-19 page type-page status-publish hentry">
                    <div class="center">
                        <div class="vc_row wpb_row vc_row-fluid fullwidth">


                            <div class="vc_row wpb_row vc_row-fluid ml0 mr0 d-flex justify-content-center">
                                {{-- <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">

                                            <div
                                                class="wpb_content_element vc_hireme_counter animate-hover-border counter-specific-wrapper-724">
                                                <div class="counter_single">
                                                    <div class="title-icon-type2 main-color">
                                                        <div class="title-icon-line2"></div>
                                                        <div class="title-icon-line2 line-short-left">
                                                        </div>
                                                        <div class="title-icon-line2 line-short-right">
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="title-icon-line2"></div>
                                                    </div><b class="counter_execute" id="counter_724" data-from="0"
                                                        data-to="3100" data-speed="2000"></b>
                                                    <div class="counter_title">Theme Design</div><span
                                                        class="counter_icon flaticon-edit-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">

                                            <div
                                                class="wpb_content_element vc_hireme_counter animate-hover-border counter-specific-wrapper-4267">
                                                <div class="counter_single">
                                                    <div class="title-icon-type2 main-color">
                                                        <div class="title-icon-line2"></div>
                                                        <div class="title-icon-line2 line-short-left">
                                                        </div>
                                                        <div class="title-icon-line2 line-short-right">
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="title-icon-line2"></div>
                                                    </div><b class="counter_execute" id="counter_4267" data-from="0"
                                                        data-to="15130" data-speed="2000"></b>
                                                    <div class="counter_title">Happy Customers</div><span
                                                        class="counter_icon flaticon-users-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">

                                            <div
                                                class="wpb_content_element vc_hireme_counter animate-hover-border counter-specific-wrapper-8542">
                                                <div class="counter_single">
                                                    <div class="title-icon-type2 main-color">
                                                        <div class="title-icon-line2"></div>
                                                        <div class="title-icon-line2 line-short-left">
                                                        </div>
                                                        <div class="title-icon-line2 line-short-right">
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="title-icon-line2"></div>
                                                    </div><b class="counter_execute" id="counter_8542" data-from="0"
                                                        data-to="9134" data-speed="2000"></b>
                                                    <div class="counter_title">Coffee Cups</div><span
                                                        class="counter_icon flaticon-alarm-clock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">

                                            <div
                                                class="wpb_content_element vc_hireme_counter animate-hover-border counter-specific-wrapper-2883">
                                                <div class="counter_single">
                                                    <div class="title-icon-type2 main-color">
                                                        <div class="title-icon-line2"></div>
                                                        <div class="title-icon-line2 line-short-left">
                                                        </div>
                                                        <div class="title-icon-line2 line-short-right">
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="title-icon-line2"></div>
                                                    </div><b class="counter_execute" id="counter_2883" data-from="0"
                                                        data-to="70000" data-speed="2000"></b>
                                                    <div class="counter_title">Total Projects</div><span
                                                        class="counter_icon flaticon-street-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end container -->
        <div class="clear"></div>
    </div>
    <!-- end container-wrapper -->
    <div class="footer">
        <div class="center">
            ENES - Copyright 2021. Developed by <a href="http://themeforest.net/user/max-themes/portfolio"
                title="Pego HTML Themes">Max Themes</a>. Made by <a href="#" title="HTML Themes">HTML</a>.
        </div>
    </div>
    </div>
    </div>


    <script type='text/javascript' src='{{ asset('Application/js/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/modernizr.custom.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/jquery.localscroll.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/toScroll.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/jquery.animsition.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/superfish.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/waypoints.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/jquery.mobilemenu.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/custom.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/snap.svg-min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/classie.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/composer_front.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/skrollr.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/owl.carousel.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/jquery.isotope.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/jquery.countTo.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/contact-form.js') }}'></script>

    <script type='text/javascript' src='{{ asset('Application/js/jquery.themepunch.tools.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Application/js/jquery.themepunch.revolution.min.js') }}'></script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('Application/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('Application/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    <script src="{{ asset('Application/js/application.js') }}"></script>


</body>

</html>
