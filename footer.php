
        <footer>
            <div class="row">
                <div class="col-sm-12 text-center small">
                    <p>&copy;<?php echo date("Y"); ?> Company Name. All Rights Reserved</p>
                    <p><?php $args = array( 'theme_location' => 'secondary-menu', 'container' => false, 'menu_id' => false, 'menu_class' => 'footer-nav'); wp_nav_menu($args); ?></p>
                </div>
            </div>
        </footer>

<?php wp_footer(); ?>

<!--  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo bloginfo('template_directory'); ?>/assets/scripts/bootstrap.js"></script>

<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>

    </body>
</html>
