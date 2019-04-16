<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */
global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
<style>
.mobile-hotline{display:none}
 
.hotline {
    position: fixed;
    left: 10px;
    bottom: 10px;
    z-index: 9000;
    display: block;
    background: #dd3333;
    color: #fff;
    padding-top: 5px;padding-bottom:5px; padding-left:12px; padding-right: 12px;
    border-radius: 99px;
}
.hotline .hotline-number{font-size:20px; color: #fff; font-weight: bold}
 
@media  (max-width: 767px) {
    .hotline{ 
        display :none;
    }
    .mobile-hotline{display: block; bottom: 0; width: 100%; background:rgba(0,0,0,0.5); height: 60px; position: fixed; z-index:9999999}
    .mobile-hotline .mobile-hotline-left{width: 45%; float: left; text-align: center; background: #0075ff; margin-left: 10px; margin-right:5px; margin-top: 7px; height: 45px; border-radius: 4px}
    .mobile-hotline .mobile-hotline-left a{color: white; line-height: 46px; font-size:16px; font-weight: bold}
     
    .mobile-hotline .mobile-hotline-right{width: 45%; float: right; text-align: center; background: #fac100; margin-left: 5px; margin-right: 10px; margin-top: 7px; height: 45px; border-radius: 4px}
    .mobile-hotline .mobile-hotline-right a{color: red; line-height: 46px; font-size: 16px; font-weight: bold}
}
</style>
<a href="tel:+84905122767">
    <div class="hotline">
        <span class="before-hotline">Hotline:</span>
        <span class="hotline-number">0905.12.27.67</span>
    </div>
</a>
<div class="mobile-hotline">
    <div class="mobile-hotline-left">
        <a href="https://zalo.me/0905122767" target="blank">Chat Zalo</a>
    </div>
    <div class="mobile-hotline-right">
        <a href="tel:+84905122767" target="blank">Gọi điện ngay</a>
    </div>
</div>
</html>