<?php 
    $site_basic_info = $obj->FlyQuery("SELECT * FROM site_basic_info");
?>
<h2 class="accessibility"></h2>
                <div class="footer__container">
                    <div class="footer__content  footer__content--left  cf">
                        <div class="nav  footer-social-icons  flush--bottom">
                            <ul id="menu-social-menu" class="social-menu  nav  flush--bottom  border-menu">
                                <li id="menu-item-673" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-673"><a href="<?php echo $site_basic_info[0]->facebook_link; ?>">facebook</a></li>
                                <li id="menu-item-676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-676"><a href="<?php echo $site_basic_info[0]-> twitter_link; ?>">twitter</a></li>
                                <li id="menu-item-677" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-677"><a href="<?php echo $site_basic_info[0]->youtube_link; ?>">youtube</a></li>
                                <li id="menu-item-678" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-678"><a href="<?php echo $site_basic_info[0]->flickr; ?>">flickr</a></li>
                            </ul>
                        </div> <span class="copyright-info">Copyright ©  2016. All Rights Reserved.</span>
                        <ul id="menu-footer-menu" class="footer-menu djax-updatable  nav  flush--bottom  border-menu">
                            <li id="menu-item-375" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-375"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="up-link"> <a href="#ns__wrapper"><i class="icon-arrow-up"></i></a></div> <span class="bg--tiled hidden"></span> <span class="bg--text hidden"></span> 