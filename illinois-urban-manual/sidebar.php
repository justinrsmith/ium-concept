<div id="sidebar" class="col-lg-2 offset-lg-1 d-none d-sm-block">
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
    <nav class="nav flex-column">
        <a class="nav-link active" href="#">Active</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="#">Link</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="#">Link</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="#">Link</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="#">Link</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="#">Link</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="#">Link</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link" href="#">Link</a>
        <div class="dropdown-divider"></div>
        <a class="nav-link disabled" href="#">Disabled</a>
    </nav><br>
    <div class="row">
        <div class="col">
            <div class="form-group">
               <label for="exampleInputEmail1">Subscribe To Our Email List</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
           </div>
        </div>
    </div>
</div>
