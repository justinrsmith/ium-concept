<div id="sidebar" class="col-lg-2 d-none d-sm-block">
    <h5>Quick Links</h5>
    <? /* Primary navigation */
        wp_nav_menu( array(
            'menu' => 'quick_links',
            'container' => false,
            'menu_class' => 'nav',
            'after' => '<div class="dropdown-divider"></div>',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
        );
    ?>
    <br>
    <h5>Resources</h5>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <div class="dropdown-divider"></div>
    </ul><br>
</div>
