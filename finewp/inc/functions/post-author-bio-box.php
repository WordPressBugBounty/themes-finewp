<?php
/**
* Author bio box
*
* @package FineWP WordPress Theme
* @copyright Copyright (C) 2025 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function finewp_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="finewp-author-bio">
            <div class="finewp-author-bio-top">
            <div class="finewp-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </div>
            <div class="finewp-author-bio-text">
                <h2>'.esc_html__( 'Author: ', 'finewp' ).'<span>'. get_the_author_link() .'</span></h2>'. get_the_author_meta('description',get_query_var('author') ) .'
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}