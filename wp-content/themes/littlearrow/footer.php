    <footer>
        <div class="container py-2 text-center">
            <small style="color:#000 !important;">&copy; Copyright <?php echo Date('Y'); ?>, <?php bloginfo('name'); ?>. by <a href="azmolmiah.com" style="color:#10a2c7b0;"><b>www.azmolmiah.com</b></a></small><br>
        </div>
    </footer>
        
        <?php if(is_front_page()): ?>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkenQZH8awmRhI0Y6_V9o6c0_8IsQ_5_Y&callback=initMap" async defer></script>
        <?php endif; ?>
        <?php wp_footer(); ?>
    </body>
</html>