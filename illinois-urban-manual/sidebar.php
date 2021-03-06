<!-- https://v4-alpha.getbootstrap.com/examples/dashboard/ -->
<div id="sidebar" class="col-md-2 d-none d-md-block">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="d-flex flex-column">
                    <a class="text-center" href="/">
                        <img height="139" width="137" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt="Illinois Urban Manual Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col px-1">
            <h4 class="mt-2 ml-3" id="sidebar-header">Quick Links</h4>
            <? /* Primary navigation */
                wp_nav_menu( array(
                    'menu' => 'quick links',
                    'menu_class' => 'nav nav-pills flex-column',
                    'walker' => new wp_bootstrap_navwalker())
                );
            ?>
        </div>
    </div>
</div>
