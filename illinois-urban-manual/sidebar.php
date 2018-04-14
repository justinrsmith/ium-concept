<!-- https://v4-alpha.getbootstrap.com/examples/dashboard/ -->
<div id="sidebar" class="col-md-2 d-none d-md-block">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="d-flex flex-column">
                    <a class="text-center" href="#">
                        <img height="139" width="137" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col pr-1">
            <h4 class="mt-2" id="sidebar-header">Quick Links</h4>
            <? /* Primary navigation */
                wp_nav_menu( array(
                    'menu' => 'quick_links',
                    'menu_class' => 'nav flex-column',
                    'walker' => new wp_bootstrap_navwalker())
                );
            ?>
        </div>
        <!-- <div class="col pr-1">
            <h4 class="mt-2" id="sidebar-header">Quick Links</h4>
            <div class="menu-quick-links-container">
                <ul id="menu-quick-links" class="nav flex-column"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11 nav-item"><a title="Practice Standards" href="#" class="nav-link">Practice Standards</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12 nav-item"><a title="Construction Specifications" href="#" class="nav-link">Construction Specifications</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26 nav-item"><a title="Material Specifications" href="#" class="nav-link">Material Specifications</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25 nav-item"><a title="Standard Drawings" href="#" class="nav-link">Standard Drawings</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item"><a title="IUM Gallery" href="#" class="nav-link">IUM Gallery</a></li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 nav-item"><a title="Field Manual" href="#" class="nav-link">Field Manual</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</div>
