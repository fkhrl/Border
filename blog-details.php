<?php 
    include './include/config.php';
    $detail_id = $_GET['details'];
    $blog_data = $obj->FlyQuery("SELECT * FROM blog where id='".$detail_id."' ");
  
    
//    print_r($blog_data); 
    //exit();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="en-US" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" lang="en-US" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if IE 9]>
<html class="ie9" lang="en-US" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Article"> <!--<![endif]-->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="True">
        <meta name="apple-touch-fullscreen" content="yes"/>
        <meta name="MobileOptimized" content="320">
        <script type="text/javascript">
            addthis_config = {
                ui_click: false,
                ui_use_css: true,
                data_track_addressbar: false,
                data_track_clickback: false
            };

            addthis_share = {
                url: "",
                title: "",
                description: ""
            };
        </script><script type="text/template" id="tmpl-variation-template">
            <div class="woocommerce-variation-description">
            {{{ data.variation.variation_description }}}
            </div>

            <div class="woocommerce-variation-price">
            {{{ data.variation.price_html }}}
            </div>

            <div class="woocommerce-variation-availability">
            {{{ data.variation.availability_html }}}
            </div>
        </script>
        <script type="text/template" id="tmpl-unavailable-variation-template">
            <p>Sorry, this product is unavailable. Please choose a different combination.</p>
        </script>

        <!-- This site is optimized with the Yoast SEO plugin v4.0 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>Our Blog</title>
        <link rel='dns-prefetch' href='//s7.addthis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        <link rel='dns-prefetch' href='//ajax.googleapis.com' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/", "svgExt": ".svg", "source": {"concatemoji": "https:\/\/pixelgrade.com\/demos\/border\/wp-includes\/js\/wp-emoji-release.min.js"}};
            !function (a, b, c) {
                function d(a) {
                    var b, c, d, e, f = String.fromCharCode;
                    if (!k || !k.fillText)
                        return!1;
                    switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                        case"flag":
                            return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), !(j.toDataURL().length < 3e3) && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 55356, 57096), 0, 0), c = j.toDataURL(), b !== c);
                        case"emoji4":
                            return k.fillText(f(55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55357, 56425, 55356, 57341, 55357, 56507), 0, 0), e = j.toDataURL(), d !== e
                    }
                    return!1
                }
                function e(a) {
                    var c = b.createElement("script");
                    c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
                }
                var f, g, h, i, j = b.createElement("canvas"), k = j.getContext && j.getContext("2d");
                for (i = Array("flag", "emoji4"), c.supports = {everything:!0, everythingExceptFlag:!0}, h = 0; h < i.length; h++)
                    c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
                c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                    c.DOMReady = !0
                }, c.supports.everything || (g = function () {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                    "complete" === b.readyState && c.readyCallback()
                })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
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
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='yarppWidgetCss-css'  href='css/widget.css' type='text/css' media='all' />
        <link rel='stylesheet' id='wpgrade-main-style-css'  href='css/style.css?ver=201612161527' type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'  href='css/contact-styles.css' type='text/css' media='all' />
        <link rel='stylesheet' id='pixlikes-plugin-styles-css'  href='css/public.css?ver=1.0.0' type='text/css' media='all' />
        <style id='pixlikes-plugin-styles-inline-css' type='text/css'>
            .animate i:after {-webkit-transition: all 1000ms;-moz-transition: all 1000ms;-o-transition: all 1000ms;transition: all 1000ms; }
        </style>
        <link rel='stylesheet' id='wpgrade-woocommerce-css'  href='css/woocommerce.css?ver=201612161527' type='text/css' media='all' />
        <script type='text/javascript' src='js/jquery.js?ver=1.12.4'></script>
        <script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.4.1'></script>
        <script type='text/javascript' src='js/modernizr.min.js?ver=3.3.1'></script>
        <script type="text/javascript">
            if (typeof WebFont !== 'undefined') {
                WebFont.load({
                    google: {families: ['Montserrat:700:latin', 'Open Sans:400:latin', 'Oswald:400:latin', 'Gentium Book Basic:400:latin', 'Playfair Display:900italic:latin-ext', 'Open Sans:300:latin']},
                    classes: false,
                    events: false
                });
            } else {
                var tk = document.createElement('script');
                tk.src = '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                tk.type = 'text/javascript';

                tk.onload = tk.onreadystatechange = function () {
                    WebFont.load({
                        google: {families: ['Montserrat:700:latin', 'Open Sans:400:latin', 'Oswald:400:latin', 'Gentium Book Basic:400:latin', 'Playfair Display:900italic:latin-ext', 'Open Sans:300:latin']},
                        classes: false,
                        events: false
                    });
                };

                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(tk, s);
            }
        </script>
        <style id="customify_typography_output_style">
            html .cover--style1 .cover__title {
                font-family: Montserrat;
                font-weight: 700;
            }
            html .cover--style1 .cover__sub-title {
                font-family: Open Sans;
                font-weight: 400;
            }
            html .cover--style2 .cover__title {
                font-family: Oswald;
                font-weight: 400;
            }
            html .cover--style2 .cover__sub-title {
                font-family: Gentium Book Basic;
                font-weight: 400;
            }
            html .cover--style3 .cover__title {
                font-family: Playfair Display;
                font-weight: 900;
                font-style: italic;
            }
            html .cover--style3 .cover__sub-title {
                font-family: Open Sans;
                font-weight: 300;
            }
        </style>
        <script type="text/javascript">
            ;
            (function ($) {

            })(jQuery);
        </script>
        <style id="customify_output_style">

            .site-logo img { height: 21px; } 
            html, .wp-caption-text, .small-link, .post-nav-link__label,
            .author__social-link, .comment__links, .score__desc  { font-size: 16px; } 
            html, .wp-caption-text, .small-link, .post-nav-link__label,
            .author__social-link, .comment__links, .score__desc  { line-height: 1.7; } 
            html .cover--style1 .cover__title { font-size: 3em; } 
            html .cover--style1 .cover__title { line-height: 1; } 
            html .cover--style1 .cover__title { letter-spacing: 1px; } 
            html .cover--style1 .cover__sub-title { font-size: 1.12em; } 
            html .cover--style1 .cover__sub-title { line-height: 1; } 
            html .cover--style1 .cover__sub-title { letter-spacing: 1px; } 
            html .cover--style2 .cover__title { font-size: 3.5em; } 
            html .cover--style2 .cover__title { line-height: 1; } 
            html .cover--style2 .cover__title { letter-spacing: 1px; } 
            html .cover--style2 .cover__sub-title { font-size: 2.25em; } 
            html .cover--style2 .cover__sub-title { line-height: 1; } 
            html .cover--style2 .cover__sub-title { letter-spacing: 1px; } 
            html .cover--style3 .cover__title { font-size: 4.5em; } 
            html .cover--style3 .cover__title { line-height: 1.12; } 
            html .cover--style3 .cover__title { letter-spacing: 1px; } 
            html .cover--style3 .cover__sub-title { font-size: 1.2em; } 
            html .cover--style3 .cover__sub-title { line-height: 1; } 
            html .cover--style3 .cover__sub-title { letter-spacing: 5px; } 
            a:hover, .small-link, .tabs__nav a.current,
            .tabs__nav a:hover, .widget--footer__title em,
            .small-link, a:hover > .pixcode--icon,
            .nav--main > li a:hover, .nav--main > li a:hover:after,
            .pagination--archive ol li:first-child a:hover,
            .pagination--archive ol li:last-child a:hover,
            .meta-box--portfolio a:hover,
            .site-navigation__trigger:hover .nav-text,
            .social-menu a:hover:before, .widget_nav_menu > div[class*="social"] a:hover:before { color: #2ecc71; } 
            select:focus, textarea:focus, input[type="text"]:focus,
            input[type="password"]:focus, input[type="datetime"]:focus,
            input[type="datetime-local"]:focus, input[type="date"]:focus,
            input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus,
            input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus,
            input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus,
            .form-control:focus{
                outline: 1px solid #2ecc71;
            }.pagination .pagination-item--current span,
            .pagination li a:hover, .pagination li span:hover,
            .rsNavSelected, .progressbar__progress, .btn:hover, .comments_add-comment:hover,
            .form-submit #comment-submit:hover, .widget_tag_cloud a:hover, .btn--primary,
            .comments_add-comment, .form-submit #comment-submit,
            a:hover > .pixcode--icon.circle, a:hover > .pixcode--icon.square,
            .btn--add-to-cart, .wpcf7-form-control.wpcf7-submit, .pagination--archive ol li a:hover,
            .pixproof-border-gallery .proof-photo.selected .background-container { background: #2ecc71; } 
            a:hover { border-color: #2ecc71; } 
            blockquote, h3.emphasize{
                border-left: 12px solid #2ecc71;
            }ol{
                border-left: 0 solid #2ecc71;
            }.fixed-bar, .site-logo--text { background: #ffffff; } 
            .fixed-bar, .fixed-bar a, .site-navigation__trigger .nav-text,
            .slider-controls__arrows, .social-menu a:before { color: #1a1717; } 
            .site-header .site-navigation__trigger .nav-icon.icon--lines,
            .site-header .site-navigation__trigger .nav-icon.icon--lines:after,
            .site-header .site-navigation__trigger .nav-icon.icon--lines:before,
            .site-header .site-navigation__trigger .nav-icon.icon--plus:after,
            .site-header .site-navigation__trigger .nav-icon.icon--plus:before,
            .slider-controls__bullets .rsNavSelected { background-color: #1a1717; } 
            .site-navigation__trigger .nav-icon.icon--dots:after,
            .site-navigation__trigger .nav-icon.icon--dots:before,
            .site-navigation__trigger .nav-icon.icon--dots{
                background-color: transparent;
                background-image:linear-gradient(to right, #1a1717 0%, #1a1717 15%,
                    rgba(0, 0, 0, 0) 15%, rgba(0, 0, 0, 0) 26%, #1a1717 26%, #1a1717 100%);
            }.site-navigation__trigger.is-active .nav-icon.icon--dots:before,
            .site-navigation__trigger.is-active .nav-icon.icon--dots:after{
                background-image: linear-gradient(to right, #1a1717 0%, #1a1717 100%);
            }.article-navigation .navigation-item--previous .arrow:before { border-color: #1a1717; } 
            .bg--tiled { background-color: #1a1717; } 
            .bg--text { background-color: #f5f5f5; } 
            @media  screen and (min-width: 900px) {
                .wrapper, .content--gallery-slider, .content--client-area { padding: 42px; } 
                .nav--main li:hover, .nav--main li.current-menu-item { border-bottom-color: #2ecc71; } 

            }
            @media screen and (min-width: 900px)  {
                .horizontal-bar, .site-header, .site-footer, .archive-categories-wrapper,
                .site-home-title, .footer__container { height: 42px; } 

            }
            @media  screen and (min-width: 900px)  {
                .vertical-bar, .slider-arrow, .slider-controls__bullets,
                .slider-controls__arrows .slider-arrow,
                .article-navigation .navigation-item .arrow { width: 42px; } 

            }
            @media screen  and (min-width: 900px) {
                .site-header, .site-footer { padding-left: 42px; } 
                .back-to-top a:hover:after, .back-to-top a:hover:before { border-color: #2ecc71; } 

            }
            @media screen and  (min-width: 900px) {
                .site-header, .site-footer { padding-right: 42px; } 

            }
            @media screen  and  (min-width: 900px) {
                .navigation-container, .article--split__left { top: 42px; } 

            }
            @media  screen  and (min-width: 900px) {
                .navigation-container, .article--split__left { bottom: 42px; } 

            }
            @media  screen and  (min-width: 900px) {
                .navigation-container, .archive-categories-wrapper { right: 42px; } 

            }
            @media screen  and (min-width: 900px)  {
                .article--split__left { left: 42px; } 

            }
            @media screen and  (min-width: 900px)  {
                html body.admin-bar .article--split__left,
                html body.admin-bar .navigation-container{ top: 74px;
                }

            }
            @media screen and (min-width: 1201px)  {
                .team-member__profile{
                    background: rgba(46,204,113, 0.5);
                }

            }
            @media screen and  (min-width: 1201px) {
                body .btn:hover, body #review_form_wrapper #submit:hover,
                body.woocommerce .button:hover, body .onsale:hover{
                    background: #2ecc71;
                    background: -moz-linear-gradient(#58d68d, #2ecc71);
                    background: -o-linear-gradient(#58d68d, #2ecc71);
                    background: -webkit-linear-gradient(#58d68d, #2ecc71);
                    background: linear-gradient(#58d68d, #2ecc71);
                }
            }
            @media screen and (max-width: 899px) {
                .site-footer { background: #ffffff; } 

            }

        </style>
    </head>

    <body class="post-template-default single single-post postid-30 single-format-standard  is--copyright-protected animations" data-ajaxloading data-smoothscrolling ondragstart="return false;" >
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
                your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
                improve your experience.</p>
        <![endif]-->
        <div class="pace-activity"></div>
        <div class="copyright-overlay">
            <div class="copyright-overlay__container">
                <div class="copyright-overlay__content">
                    Hey, this photo is under © copyright				</div>
            </div>
        </div>
        <div class="wrapper  js-wrapper">
            <?php include './include/header.php';?>
            <div class="fixed-bar  vertical-bar  left-bar"></div>
            <div class="fixed-bar  vertical-bar  right-bar"></div>

            <div id="main" class="content js-content djax-updatable">    <div class="content--article-split">
                    <article class="article--split">
                        
                        <div class="article--split-grid">
                            
                            <div class="article--split__left--container">
                                <?php
                               if(!empty($blog_data)){
                                   foreach ($blog_data as $blog):
                                ?>
                                <div class="article--split__left"  style="background-image: url(cms-admin/upload/<?php echo $blog->photo; ?>); ">
                                    <div class="article__featured-image">
                                        &nbsp;
                                    </div>
                                    <div class="article__meta">
                                        <h1 class="article__title"><?php echo $blog->title; ?></h1>
                                        <div class="grid  article__meta-footer">
                                            <div class="grid__item  one-whole  lap-and-up-one-half">
                                                <span class="article__timestamp"><?php echo $blog->date; ?></span>
                                            </div><!--
                                            --><div class="grid__item  one-whole  lap-and-up-one-half">
                                                <ul class="nav  article__categories">
                                                    <li class="article__category">
                                                        <a href="" title=""><?php echo $blog->blog_type; ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                endforeach;
                               }?>
                                <!-- .article--split__left -->
                            </div><!--
                        
                            --><div class="article--split__right--container">
                                <div class="article--split__right">
                                    <?php
                               if(!empty($blog_data)){
                                   foreach ($blog_data as $blog):
                                ?>
                                    <div class="article__content  js-post-gallery  cf">
                                        <div class="first-letter"><?php echo substr($blog->title,0,1);?></div>
                                        <p><?php echo html_entity_decode($blog->long_details); ?></p>
                                    </div>
                                    <?php 
                                endforeach;
                               }?>
                                </div>
                                
                                <footer class="entry__meta  entry__meta--single">
                                    <div class="entry__meta-box meta-box--tags">
                                        <span class="meta-box__title">Tagged</span>
                                        <ul class="nav nav--keywords inline">
                                            <li><a href="" title="View all posts tagged Design">Design</a></li><li><a href="" title="View all posts tagged Photography">Photography</a></li><li><a href="" title="View all posts tagged Typography">Typography</a></li>                                    </ul>
                                    </div>

                                    <div class="social-links  social-links--inverse">
                                        <div class="share-logo">
                                            <i class="icon-e-share"></i>
                                        </div><!--
                                        --><div class="addthis_toolbox addthis_default_style addthis_32x32_style  social-links-list"
                                                addthis:url=""
                                                addthis:title="The Only Thing That Matters To Us - Border"
                                                addthis:description="Egraphy is the process of creating still or moving pictures by recording radiation on a sensitive medium like film or an electronic sensor. The products of photography are called negatives and photographs, the latter being developed from the negatives. Artists are crafters of human thought and emotion. Think about that .. its massive. It is for us to inspire and motivate. To merely duplicate is to devastate. True innovation is born on the wings of reality, but will always fly one mile higher. Don’t ever think for a moment we are merely couriers of imitation to some sort of “reality”. Give the idea a shower The seed needs to be soaked in an inspiration shower (patent pending). I hunt the interwebs for cool UI patterns and archive them in a massive Photoshop file. For example, when working on YouTube TV I grabbed hundreds of examples of future UI from futurists..">
                                            <a class="addthis_button_compact"></a><a class="addthis_button_facebook"></a><a class="addthis_button_twitter"></a><a class="addthis_button_pinterest_share"></a><a class="addthis_button_google_plusone_share"></a>                                    </div>
                                    </div>

                                    <div class="article-navigation">
                                        <div class="navigation-item  navigation-item--previous"><a href="" rel="prev"><span class="arrow"></span>
                                                <div class="navigation-item__content">
                                                    <div class="navigation-item__wrapper">
                                                        <span class="button-title">Previous Article</span>
                                                        <h3 class="post-title">How photography connects us</h3>
                                                    </div>
                                                </div></a></div>                                            
                                    </div>
                                    <hr class="separator  separator--dark" />
                                </footer>

                                <div class='yarpp-related'>
                                    <h3 class="emphasize">You may also like</h3>
                                    <div class="related-posts-container">
                                        <ul class="related-projects__list  grid"><!--
                                            --><li class="related-projects__item  grid__item  one-whole  lap-and-up-one-third">
                                                <a href="">
                                                    <div class="project-thumb">
                                                        <img width="400" height="400" src="image/galaxy-soho-beijing-400x400.jpg" class="attachment-square size-square wp-post-image" alt="" srcset="image/galaxy-soho-beijing-400x400.jpg 400w, image/galaxy-soho-beijing-150x150.jpg 150w" sizes="(max-width: 400px) 100vw, 400px" />                                </div>
                                                    <div class="project-content">
                                                        <h4 class="project-title">
                                                            <a href="">Design: Seeing Without Thinking</a>
                                                        </h4>
                                                        <div class="entry__meta">
                                                            <div class="entry__meta-box">
                                                                <a class="project-category" href="" title="View all posts in Work &amp; Travel">
                                                                    Work &amp; Travel                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!--
                                            --></ul>
                                    </div>
                                </div>


                                <div id="comments" class="comments-area">
                                    <div class="comments-area-title">
                                        <h3 class="emphasize">
                                            There are <span class="muted">4</span> comments            </h3>
                                    </div>




                                    <ol class="commentlist">
                                        <li class="comment even thread-even depth-1">
                                            <article id="comment-6" class="comment-article  media">

                                                <aside class="comment__avatar  media__img">
                                                    <img alt='' src='' height='96' width='96' />			</aside>


                                                <div class="media__body">
                                                    <header class="comment__meta comment-author">
                                                        <span class="comment__author-name">Vlad</span>				<time class="comment__time" datetime="2014-02-17T14:41:15+00:00"><a href="" class="comment__timestamp">on February 17, 2014 at 2:41 pm </a></time>
                                                        <div class="comment__links">
                                                            <a rel='nofollow' class='comment-reply-link' href='' onclick='return addComment.moveForm("comment-6", "6", "respond", "30")' aria-label='Reply to Vlad'>Reply</a>				</div>
                                                    </header><!-- .comment-meta -->
                                                    <section class="comment__content comment">
                                                        <p>This is the way I want to work with clients. No surprises, no squirreling away to design land, and actionable feedback. Fantastic article, George.</p>
                                                    </section>
                                                </div>
                                            </article>
                                            <!-- </li> is added by WordPress automatically -->
                                            <ul class="children">
                                                <li class="comment odd alt depth-2">
                                                    <article id="comment-7" class="comment-article  media">

                                                        <aside class="comment__avatar  media__img">
                                                            <img alt='' src='' srcset='' class='avatar avatar-96 photo' height='96' width='96' />			</aside>


                                                        <div class="media__body">
                                                            <header class="comment__meta comment-author">
                                                                <span class="comment__author-name"><a href='' rel='external nofollow' class='url'>George</a></span>				<time class="comment__time" datetime="2014-02-17T14:41:50+00:00"><a href="" class="comment__timestamp">on February 17, 2014 at 2:41 pm </a></time>
                                                                <div class="comment__links">
                                                                    <a rel='nofollow' class='comment-reply-link' href='' onclick='return addComment.moveForm("comment-7", "7", "respond", "30")' aria-label='Reply to George'>Reply</a>				</div>
                                                            </header><!-- .comment-meta -->
                                                            <section class="comment__content comment">
                                                                <p>Thanks, Vlad! It took a while to come to these conclusions, but it definitely feels right now that we’re in it. Glad you agree!</p>
                                                            </section>
                                                        </div>
                                                    </article>
                                                    <!-- </li> is added by WordPress automatically -->
                                                </li><!-- #comment-## -->
                                            </ul><!-- .children -->
                                        </li><!-- #comment-## -->
                                        <li class="comment even thread-odd thread-alt depth-1">
                                            <article id="comment-8" class="comment-article  media">

                                                <aside class="comment__avatar  media__img">
                                                    <img alt='' src='' srcset='' class='avatar avatar-96 photo' height='96' width='96' />			</aside>


                                                <div class="media__body">
                                                    <header class="comment__meta comment-author">
                                                        <span class="comment__author-name"><a href='' rel='external nofollow' class='url'>Cristi</a></span>				<time class="comment__time" datetime="2014-02-17T14:43:54+00:00"><a href="" class="comment__timestamp">on February 17, 2014 at 2:43 pm </a></time>
                                                        <div class="comment__links">
                                                            <a rel='nofollow' class='comment-reply-link' href='' onclick='return addComment.moveForm("comment-8", "8", "respond", "30")' aria-label='Reply to Cristi'>Reply</a>				</div>
                                                    </header><!-- .comment-meta -->
                                                    <section class="comment__content comment">
                                                        <p>Enlightening post. One of the realities we’re finding with so many different desktop display settings out there is that some of what we used to be able to address with static comps is being further fleshed out in development we’ve handed the site over to the client for QA.</p>
                                                    </section>
                                                </div>
                                            </article>
                                            <!-- </li> is added by WordPress automatically -->
                                        </li><!-- #comment-## -->
                                        <li class="comment odd alt thread-even depth-1">
                                            <article id="comment-9" class="comment-article  media">

                                                <aside class="comment__avatar  media__img">
                                                    <img alt='' src='' srcset='' class='avatar avatar-96 photo' height='96' width='96' />			</aside>


                                                <div class="media__body">
                                                    <header class="comment__meta comment-author">
                                                        <span class="comment__author-name">Andrei</span>				<time class="comment__time" datetime="2014-02-17T14:44:12+00:00"><a href="" class="comment__timestamp">on February 17, 2014 at 2:44 pm </a></time>
                                                        <div class="comment__links">
                                                            <a rel='nofollow' class='comment-reply-link' href='' onclick='return addComment.moveForm("comment-9", "9", "respond", "30")' aria-label='Reply to Andrei'>Reply</a>				</div>
                                                    </header><!-- .comment-meta -->
                                                    <section class="comment__content comment">
                                                        <p>I have found that simplifying terminology and dumbing things down for clients whilst judging their level of awareness works then educating them in the explaining each aspect in the correct terminology afterwards works well and helps it stick.</p>
                                                    </section>
                                                </div>
                                            </article>
                                            <!-- </li> is added by WordPress automatically -->
                                        </li><!-- #comment-## -->
                                    </ol><!-- .commentlist -->


                                    <hr class="separator separator--subsection" />


                                </div><!-- #comments .comments-area -->
                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">Post a new comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a></small></h3>			<form action="" method="post" id="commentform" class="comment-form">
                                        <p class="comment-form-comment"><label for="comment" class="show-on-ie8">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Message"></textarea></p><p class="comment-form-author"><label for="author" class="show-on-ie8">Name</label><input id="author" name="author" value="" type="text" placeholder="Name..." size="30"  aria-required='true' /></p><!--
                                        --><p class="comment-form-email"><label for="name" class="show-on-ie8">Email</label><input id="email" name="email" value="" size="30" type="text" placeholder="Email..."  aria-required='true' /></p><!--
                                        --><p class="comment-form-url"><label for="url" class="show-on-ie8">Url</label><input id="url" name="url" value="" size="30" placeholder="Website..." type="text"></p>
                                        <p class="form-submit"><input name="submit" type="submit" id="comment-submit" class="submit" value="Send" /> <input type='hidden' name='comment_post_ID' value='30' id='comment_post_ID' />
                                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                        </p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="1ac4cd5844" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="49"/></p>			</form>
                                </div><!-- #respond -->
                            </div>
                        </div><!-- .grid -->
                        
                    </article>
                </div><!-- .content -->
            </div><!-- close div #main -->

            <div class="fixed-bar  horizontal-bar  bottom-bar">
                <footer class="site-footer">
                   <?php include './include/footer.php';?>
                </footer>
                <!-- .site__footer -->

            </div>
        </div><!-- #wrapper-->
        <script type='text/javascript' src='js/form.js?ver=3.2'></script>
        <link rel='stylesheet' id='yarppRelatedCss-css'  href='css/related.css' type='text/css' media='all' />
        <script type='text/javascript' src='js/index.js'></script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js'></script>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TimelineLite.min.js'></script>
        <script type='text/javascript' src='js/plugins.js?ver=201612161527'></script>
        <script type='text/javascript'>
                    /* <![CDATA[ */
                    var ajaxurl = "https:\/\/pixelgrade.com\/demos\/border\/wp-admin\/admin-ajax.php";
                    var objectl10n = {"tPrev": "Previous (Left arrow key)", "tNext": "Next (Right arrow key)", "tCounter": "of", "infscrLoadingText": "<em>Loading more...<\/em>", "infscrReachedEnd": "<em>Nothing left to load.<\/em>"};
                    var theme_name = "border";
                    var djax_ignored_links = ["https:\/\/pixelgrade.com\/demos\/border\/checkout\/", "https:\/\/pixelgrade.com\/demos\/border\/cart\/"];
                    var border_static_resources = {"scripts": {"wpgrade-main-scripts": "js\/main.js", "contact-form-7": "js\/contact-scripts.js", "pixlikes-plugin-script": "js\/public.js", "pixproof-plugin-script": "js\/public.js", "wc-add-to-cart": "js\/add-to-cart.min.js", "woocommerce": "js\woocommerce.min.js", "wc-cart-fragments": "js\/cart-fragments.min.js", "addthis-api": "js\addthis_widget.js#async=1", "comment-reply": "js\/comment-reply.min.js", "wpgrade-woocommerce": "js\/woocommerce.js", "wp-embed": "js\/wp-embed.min.js"}, "styles": {"yarppWidgetCss": "css\/widget.css", "wpgrade-main-style": "css\/style.css", "contact-form-7": "css\/contact-styles.css", "pixlikes-plugin-styles": "css\/public.css", "wpgrade-woocommerce": "css\/woocommerce.css"}};
                                                                /* ]]> */
        </script>
        <script type='text/javascript' src='js/main.js?ver=201612161527'></script>
        <script type='text/javascript' src='js/contact-jquery.form.min.js'></script>
        <script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}, "cached": "1"};
/* ]]> */
        </script>
        <script type='text/javascript' src='js/scripts.js?ver=4.6'></script>
        <script type='text/javascript'>
/* <![CDATA[ */
var locals = {"ajax_url": "https:\/\/pixelgrade.com\/demos\/border\/wp-admin\/admin-ajax.php", "ajax_nounce": "5c653b280a", "load_likes_with_ajax": "", "already_voted_msg": "You already voted!", "like_on_action": "click", "hover_time": "1000", "free_votes": ""};
/* ]]> */
        </script>
        <script type='text/javascript' src='js/public.js?ver=1.0.0'></script>
        <script type='text/javascript'>
/* <![CDATA[ */
var pixproof = {"ajaxurl": "https:\/\/pixelgrade.com\/demos\/border\/wp-admin\/admin-ajax.php", "pixproof_settings": {"zip_archive_generation": "automatic"}, "l10n": {"select": "Select", "deselect": "Deselect", "ofCounter": "of", "next": "Next", "previous": "Previous"}};
/* ]]> */
        </script>
        <script type='text/javascript' src='js/public.js?ver=1.2.4'></script>
        <script type='text/javascript'>
                                                                /* <![CDATA[ */
                                                                var wc_add_to_cart_params = {"ajax_url": "\/demos\/border\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/demos\/border\/work-travel\/the-only-thing-that-matters-to-us\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View Cart", "cart_url": "https:\/\/pixelgrade.com\/demos\/border\/cart\/", "is_cart": "", "cart_redirect_after_add": "no"};
                                                                /* ]]> */
        </script>
        <script type='text/javascript' src='js/add-to-cart.min.js?ver=2.6.9'></script>
        <script type='text/javascript' src='js/jquery.blockUI.min.js?ver=2.70'></script>
        <script type='text/javascript'>
                                                                /* <![CDATA[ */
                                                                var woocommerce_params = {"ajax_url": "\/demos\/border\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/demos\/border\/work-travel\/the-only-thing-that-matters-to-us\/?wc-ajax=%%endpoint%%"};
                                                                /* ]]> */
        </script>
        <script type='text/javascript' src='js/woocommerce.min.js?ver=2.6.9'></script>
        <script type='text/javascript' src='js/jquery.cookie.min.js?ver=1.4.1'></script>
        <script type='text/javascript'>
                                                                /* <![CDATA[ */
                                                                var wc_cart_fragments_params = {"ajax_url": "\/demos\/border\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/demos\/border\/work-travel\/the-only-thing-that-matters-to-us\/?wc-ajax=%%endpoint%%", "fragment_name": "wc_fragments"};
                                                                /* ]]> */
        </script>
        <script type='text/javascript' src='js/cart-fragments.min.js?ver=2.6.9'></script>
        <script type='text/javascript' src='js/addthis_widget.js?#async=1'></script>
        <script type='text/javascript' src='js/comment-reply.min.js'></script>
        <script type='text/javascript' src='js/underscore.min.js?ver=1.8.3'></script>
        <script type='text/javascript'>
                                                                /* <![CDATA[ */
                                                                var _wpUtilSettings = {"ajax": {"url": "\/demos\/border\/wp-admin\/admin-ajax.php"}};
                                                                /* ]]> */
        </script>
        <script type='text/javascript' src='js/wp-util.min.js'></script>
        <script type='text/javascript'>
                                                                /* <![CDATA[ */
                                                                var woocommerce_params = {"ajax_url": "\/demos\/border\/wp-admin\/admin-ajax.php", "ajax_loader_url": "\/\/pixelgrade.com\/demos\/border\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif"};
                                                                var wc_single_product_params = {"i18n_required_rating_text": "Please select a rating", "review_rating_required": "yes"};
                                                                var wc_add_to_cart_params = {"ajax_url": "\/demos\/border\/wp-admin\/admin-ajax.php", "ajax_loader_url": "\/\/pixelgrade.com\/demos\/border\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif", "i18n_view_cart": "View Cart", "cart_url": "https:\/\/pixelgrade.com\/demos\/border\/cart\/", "is_cart": "", "cart_redirect_after_add": "no"};
                                                                var wc_add_to_cart_variation_params = {"i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.", "i18n_make_a_selection_text": "Select product options before adding this product to your cart.", "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."};
                                                                /* ]]> */
        </script>
        <script type='text/javascript' src='js/woocommerce.js?ver=201601250846'></script>
        <script type='text/javascript' src='js/wp-embed.min.js'></script>
        <script type="text/javascript">
                                                                ;
                                                                (function ($) {

                                                                })(jQuery);
        </script>
        <script>
            window.ga = window.ga || function () {
                (ga.q = ga.q || []).push(arguments)
            };
            ga.l = +new Date;
            ga('create', 'UA-6079543-36', 'auto');

            // Replace the following lines with the plugins you want to use.
            ga('require', 'eventTracker');
            ga('require', 'outboundLinkTracker');
            ga('require', 'mediaQueryTracker');
            ga('require', 'pageVisibilityTracker');
            ga('require', 'urlChangeTracker');

            ga('send', 'pageview');
        </script>
        <div id="djax_list_scripts_and_styles">
            <script id="border_list_scripts_and_styles"  class="djax-updatable">
            (function ($) {
                // wait for all dom elements
                $(document).ready(function () {
                    // run this only if we have resources
                    if (!window.hasOwnProperty('border_static_resources'))
                        return;
                    window.border_dynamic_loaded_scripts = {"wpgrade-main-scripts": "js\/main.js", "contact-form-7": "js\/contact-scripts.js", "pixlikes-plugin-script": "js\/public.js", "pixproof-plugin-script": "js\/public.js", "wc-add-to-cart": "js\add-to-cart.min.js", "woocommerce": "js\woocommerce.min.js", "wc-cart-fragments": "js\/cart-fragments.min.js", "addthis-api": "js\addthis_widget.js#async=1", "comment-reply": "js\/comment-reply.min.js", "wpgrade-woocommerce": "js\/woocommerce.js", "wp-embed": "js\/wp-embed.min.js"};
                    window.border_dynamic_loaded_styles = {"yarppWidgetCss": "css\/widget.css", "wpgrade-main-style": "css\/style.css", "contact-form-7": "css\/contact-styles.css", "pixlikes-plugin-styles": "css\/public.css", "wpgrade-woocommerce": "css\/woocommerce.css", "yarppRelatedCss": "css\/related.css"};

                    // run this only if we have resources
                    if (!window.hasOwnProperty('border_static_resources'))
                        return;

                    // border_dynamic_loaded_scripts is generated in footer when all the scripts should be already enqueued
                    $.each(window.border_dynamic_loaded_scripts, function (key, url) {

                        if (key in border_static_resources.scripts)
                            return;

                        if (globalDebug) {
                            console.dir("Scripts loaded dynamic");
                        }
                        if (globalDebug) {
                            console.dir(key);
                        }
                        if (globalDebug) {
                            console.log(url);
                        }

                        // add this script to our global stack so we don't enqueue it again
                        border_static_resources.scripts[key] = url;

                        $.getScript(url)
                                .done(function (script, textStatus) {
                                    $(document).trigger('border:script:' + key + ':loaded');
                                })
                                .fail(function (jqxhr, settings, exception) {
                                    if (globalDebug) {
                                        console.log('I failed');
                                    }
                                });

                        if (globalDebug) {
                            console.groupEnd();
                        }

                    });
                    $(document).trigger('border:page_scripts:loaded');

                    $.each(window.border_dynamic_loaded_styles, function (key, url) {

                        if (key in border_static_resources.styles)
                            return;

                        if (globalDebug) {
                            console.dir("Styles loaded dynamic");
                        }
                        if (globalDebug) {
                            console.dir(key);
                        }
                        if (globalDebug) {
                            console.log(url);
                        }

                        // add this style to our global stack so we don't enqueue it again
                        border_static_resources.styles[key] = url;

                        // sorry no cache this time
                        $.ajax({
                            url: url,
                            dataType: 'html',
                            success: function (data) {
                                $('<style type="text/css">\n' + data + '</style>').appendTo("head");

                                $(document).trigger('border:style:' + key + ':loaded');
                            }
                        });

                        if (globalDebug) {
                            console.groupEnd();
                        }
                    });
                    $(document).trigger('border:page_styles:loaded');
                });
            })(jQuery);
            </script>
        </div>
    </body>
</html>