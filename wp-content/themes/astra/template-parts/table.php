<?php
function acftable()
{
    $args = array(
        'post_type' => 'floor',
        'numberposts' => -1,
        'order' => 'ASC'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
?>
            <div class="table">
                <a class="reset" href="<?php the_permalink() ?>">
                    <div class="single-item">
                        <div class="title">Residence <strong><?php the_field('serial') ?></strong></div>
                        <div class="info">
                            <p><strong><?php the_field('bedroom_listing') ?> Bedroom</strong><span style="padding-right: 17px; padding-left:17px">|</span><strong><?php the_field('bathroom_listing') ?> Bathroom</strong><span style="padding-right: 17px; padding-left:17px">|</span>Interior <?php the_field('interior_size') ?> SF<span style="padding-left: 17px;padding-right: 17px;"> | </span>Balconies <?php the_field('belconies_size') ?> SF<span style="padding-left: 17px;padding-right: 17px;"> | </span>Total <?php the_field('total_size') ?> SF</p>
                        </div>
                        <div class="info-mobiles">
                            <p> <strong style="padding-right: 17px;"><?php the_field('bedroom_listing') ?> Bedroom</strong> | <strong style="padding-left: 17px;padding-right: 17px;"><?php the_field('bathroom_listing') ?> Bathroom</strong> | <span style="padding-left: 17px;padding-right: 17px;">Interior <?php the_field('interior_size') ?> SF</span> | <span style="padding-left: 17px;padding-right: 17px;">Balconies <?php the_field('belconies_size') ?> SF</span> | <span style="padding-left: 17px;padding-right: 17px;">Total <?php the_field('total_size') ?> SF</span></p>
                        </div>
                        <div class="info-mobilesx">
                            <p> <strong><?php the_field('bedroom_listing') ?> Bedroom</strong> | <strong><?php the_field('bathroom_listing') ?> Bathroom</strong> | <span >Interior <?php the_field('interior_size') ?> SF</span> | <span >Balconies <?php the_field('belconies_size') ?> SF</span> | <span >Total <?php the_field('total_size') ?> SF</span></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    else :
        ?>
        <div class="single-item">No Record Found!!</div>
    <?php
    endif;
    ?>
<?php
}
add_shortcode("acftable_shortcode", "acftable");

?>
