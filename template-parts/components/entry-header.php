<?php 
/**
 * Tempalte for post entryheader
 * 
 * @pakage mytheme2
 * 
 */
$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail();

?>
<header class="entry-header">

<!-- Feature image -->
 <?php
if ( $has_post_thumbnail ) {
?>
<div class="entry-image" mb-3>
    <a href="<?php echo esc_url( get_permalink() ); ?>">
    <?php
    the_post_custom_thumbnail(
        $the_post_id,
        'featured-thumbnail',
        [
            'sizes' => '(max-width: 350px) 350px, 233px',
            'class' => 'attachment-featured-large size-featured-image'
        ]
    )
    ?>
</a>
</div>
<?php
}
?>

</header>