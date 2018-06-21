<?php 
    $site_basic_info = $obj->FlyQuery("SELECT * FROM site_basic_info");
?>
<div class="navigation-container" id="push-menu">
            <div class="navigation  navigation--main" id="js-navigation--main">
                <h2 class="accessibility">Primary Navigation</h2>
                <ul id="menu-main-push-menu" class="nav  nav--main  sub-menu">
                    <li id="menu-item-166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-11 current_page_item menu-item-166"><a href="index.php">Home</a></li>
                    <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a href="about_us.php">About us</a></li>
                        <?php
                $sqlcategory = $obj->FlyQuery("SELECT * FROM category limit 12");

                if (!empty($sqlcategory)) {
                    foreach ($sqlcategory as $category):
                        $page_id = $category->id;
                        $sqlsubcategory = $obj->FlyQuery("SELECT * FROM sub_category WHERE category_id='$page_id'");
                       
                        
                        ?>
                    <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-153"><a href="#"><?php echo $category->name; ?></a>
                        <ul class="sub-menu">
                            <li><a href="#" class="menu-back">Back</a></li>
                            <?php
                                 if(!empty($sqlsubcategory)){
                                     foreach ($sqlsubcategory as $subcategory):
                                ?>
                            <li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-221"><a href="masonry-gallery.php?view=<?php echo $subcategory->id;?>"><?php echo $subcategory->name; ?></a></li>
<!--                            <li id="menu-item-538" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-538"><a href="galleries-archive.php">Masonry Archive</a></li>
                            <li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-169"><a href="corvette-stringray.php">Slideshow</a></li>
                            <li id="menu-item-167" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-167"><a href="masonry-gallery.php">Masonry</a></li>
                            <li id="menu-item-168" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-168"><a href="masonry-gallery.php">Grid</a></li>-->
                <!--             <li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-has-children menu-parent-item menu-item-171"><a href="galleries-archive.php">Gallery Covers</a>
                               <ul class="sub-menu">
                                    <li><a href="#" class="menu-back">Back</a></li>
                                    <li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-172"><a href="gallery/homepage-slider/">Cover Style 1</a></li>
                                    <li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-173"><a href="gallery/slider-gallery-cover-2/">Cover Style 2</a></li>
                                    <li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-170"><a href="gallery/slider-gallery/">Cover Style 3</a></li>
                                </ul>-->
                            </li>
                            <?php
                            
                        endforeach;
                                 }
                            ?>
                </ul>
                    </li>
                     <?php
                        endforeach;
                        }
                ?>
<!--                    <li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item menu-item-265"><a href="galleries-archive.php">Portfolio</a>
                        <ul class="sub-menu">
                            <li><a href="#" class="menu-back">Back</a></li>
                            <li id="menu-item-220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-220"><a href="galleries-archive.php">Archive</a></li>
                            <li id="menu-item-537" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-537"><a href="galleries-archive.php">Masonry Archive</a></li>
                            <li id="menu-item-180" class="menu-item menu-item-type-post_type menu-item-object-border_portfolio menu-item-180"><a href="masonry-gallery.php">Slideshow</a></li>
                        </ul>
                    </li>-->
                    
<!--                    <li id="menu-item-259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-259"><a href="#">Features</a>
                        <ul class="sub-menu">
                            <li><a href="#" class="menu-back">Back</a></li>
                            <li id="menu-item-343" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-343"><a href="#">Multi-Level Menu</a>
                                <ul class="sub-menu">
                                    <li><a href="#" class="menu-back">Back</a></li>
                                    <li id="menu-item-344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-344"><a href="#">Level 3</a>
                                        <ul class="sub-menu">
                                            <li><a href="#" class="menu-back">Back</a></li>
                                            <li id="menu-item-345" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-parent-item menu-item-345"><a href="#">Level 4</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#" class="menu-back">Back</a></li>
                                                    <li id="menu-item-350" class="menu-item menu-item-type-post_type menu-item-object-border_gallery menu-item-350"><a href="gallery/slider-gallery-cover-2/">Level 5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-379" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-379"><a href="">Menu Icon Styles   <i class="icon-external-link-square"></i></a></li>
                            <li id="menu-item-178" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-178"><a href="features/shortcodes/">Shortcodes</a></li>
                            <li id="menu-item-179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-179"><a href="features/typography/">Typography</a></li>
                            <li id="menu-item-177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-177"><a href="features/grid-system/">Grid System</a></li>
                            
                        </ul>
                    </li>-->
<li id="menu-item-507" class="menu-item menu-item-type-post_type menu-item-object-proof_gallery menu-item-507"><a href="blog.php">Blog</a></li>
                    <li id="menu-item-507" class="menu-item menu-item-type-post_type menu-item-object-proof_gallery menu-item-507"><a href="corvette-stringray.php">Lock</a></li>
                    
<!--                    <li id="menu-item-450" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item menu-item-450"><a href="shop.php">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="#" class="menu-back">Back</a></li>
                            <li id="menu-item-451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-451"><a href="shop.php">Products</a></li>
                            <li id="menu-item-448" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-448"><a href="checkout/">Checkout</a></li>
                            <li id="menu-item-449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-449"><a href="cart/">Cart</a></li>
                        </ul>
                    </li>-->
<li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a href="contact.php">Contact</a></li>
                </ul>
                <div class="sidebar--menu">
                    <div id="text-4" class="widget widget--menu widget_text">
                        <div class="textwidget">A Text Widget
                            <br /> 40-7801-415-481
                            <br /> contact@me.com <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <div class="fixed-bar  horizontal-bar  top-bar">
            <header class="site-header  flexbox">
                <div class="flexbox__item">
                    <h1 class="site-home-title"><div class="flexbox"><div class="flexbox__item"> <a class="site-logo  site-logo--image" href="index.php" title="Border"> <img src="cms-admin/upload/<?php echo $site_basic_info[0]->site_logo;?>" rel="logo" alt="Border"/> </a></div></div></h1>
                    <div class="grid">
                        <div class="grid__item  menu-top--left__container"></div>
                        <div class="grid__item  menu-top--right__container"></div>
                    </div>
                    <div class="sidebar--menu  nav-top--mobile"></div>
                </div>
                <div class="site-navigation__trigger js-nav-trigger"> <span class="nav-icon icon--lines"></span></div>
            </header>
        </div>