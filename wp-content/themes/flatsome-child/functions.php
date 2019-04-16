<?php
// Add custom Theme Functions here

function new_excerpt_more( $more ) {
    return '<br><br>'.'<button style="background:#ee6262;color:#fff;border-radius:20px;">Đọc tiếp</button>';
}
add_filter('excerpt_more', 'new_excerpt_more');