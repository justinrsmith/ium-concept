<!-- https://v4-alpha.getbootstrap.com/examples/dashboard/ -->
<div id="sidebar" class="px-1 col-md-2 d-none d-md-block">
    <h4 class="mt-2" id="sidebar-header">Quick Links</h4>
    <? /* Primary navigation */
        wp_nav_menu( array(
            'menu' => 'quick_links',
            'menu_class' => 'nav flex-column',
            'walker' => new wp_bootstrap_navwalker())
        );
    ?>
</div>
