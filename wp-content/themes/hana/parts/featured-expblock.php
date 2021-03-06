<?php
/**
 * The template to display featured contents in content blocks
 * 
 * @package	hana
 * @since   1.0
 * @author  RewindCreation
 * @license GPL v3 or later
 * @link    http://rewindcreation.com/
 */
    global $hana_featured_posts;
    $count = count( $hana_featured_posts ); ?>
<div class="row expanded collapse">
    <?php hana_layout()->display( 'block-' . esc_attr( $count ) , $hana_featured_posts, 'parts/content-block' ); ?>
</div>
