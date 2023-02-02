
 <footer class="bg-light">
    
 <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
     <?php 
        $args = array(
            'theme_location'  => 'secondary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => 'navbarSupportedContent1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        );
        wp_nav_menu($args);?>
  </div>
</nav>
    <!-- Copyright -->
    <div class="footer-copyright border-top text-center py-3">© 2022 Copyright:
        <a href="#"> Wilson</a>
    </div>
    <!-- Copyright -->
 </footer>
 <?php wp_footer();?>   
</body>
</html>