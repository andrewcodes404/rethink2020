<?php

$the_query = new WP_Query(array(
    'post_type' => $args['data']['post_type'],
    'posts_per_page' => -1,
    'meta_key' => $args['data']['meta-key'] ?? null,
    'meta_value' => $args['data']['meta_value'],
    'orderby' => 'post_title',
    'order' => 'ASC',
));

if ($the_query->have_posts()): ?>




<div class="s-cards-wrapper  s-cards-wrapper--<?php echo $args['data']['meta_value'] ?>">

    <?php if (is_admin()) {
    echo '<p class="s-cards-wrapper__hint"> <code >hint: this is the ' . $args["data"]["meta_value"] . ' block</code></p>';
}
?>

    <div
        class="s-cards s-cards--<?php echo $args['data']['meta_value'] ?> s-cards--<?php the_field('pick_a_size_for_the_logos')?>">

        <?php while ($the_query->have_posts()): $the_query->the_post();?>
        <?php $post_id = get_the_ID();?>
        <?php $title = get_the_title($post_id)?>
        <?php $position = get_field("position", $post_id)?>
        <?php $company = get_field("company", $post_id)?>
        <?php $booth = get_field('booth', $post_id)?>

        <div class="s-card  s-card--<?php the_field('pick_a_size_for_the_logos')?>">

            <div class="s-card-logo s-card__logo">

                <?php
    $image = get_field('image', $post_id);
    $size = 'full'; // (thumbnail, medium, large, full or custom size)

    if ($image) {
        echo wp_get_attachment_image($image, $size);
    }?>
            </div>

            <div class="s-modal-wrapper">
                <div class="s-modal">

                    <div class="s-modal__close-btn">
                        <div class="s-modal__close-btn__svg">
                            <?php echo file_get_contents(get_template_directory() . '/images/svg/close2.svg'); ?>
                        </div>
                    </div>

                    <div class="s-modal__logo">
                        <?php
    $image = get_field('image', $post_id);
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if ($image) {
        echo wp_get_attachment_image($image, $size);
    }?>
                    </div>

                    <div>
                        <p class="s-modal__title"><?php echo $title ?> <?php if ($booth): ?> - Booth
                            <?php echo $booth ?>
                            <?php endif?> </p>
                        <?php if ($position): ?> <p class="s-modal__position"> <?php echo $position ?> </p>
                        <?php endif?>
                        <?php if ($company): ?> <p class="s-modal__company"> <?php echo $company ?> </p> <?php endif?>
                    </div>
                    <div class="s-modal__socials">
                        <?php if (get_field('website', $post_id)): ?>
                        <div class="s-modal__social s-modal__social--linkedin">
                            <a href="<?php the_field('website', $post_id);?>" target="_blank" rel="noopener noreferrer">
                                WWW
                            </a>
                        </div>
                        <?php endif;?>

                        <?php if (get_field('linkedin', $post_id)): ?>
                        <div class="s-modal__social">
                            <a href="<?php the_field('linkedin', $post_id);?>" target="_blank"
                                rel="noopener noreferrer">
                                <?php echo file_get_contents(get_template_directory() . '/images/svg/linkedin.svg'); ?>
                            </a>
                        </div>
                        <?php endif;?>

                        <?php if (get_field('facebook', $post_id)): ?>
                        <div class="s-modal__social">
                            <a href="<?php the_field('facebook', $post_id);?>" target="_blank"
                                rel="noopener noreferrer">
                                <?php echo file_get_contents(get_template_directory() . '/images/svg/facebook.svg'); ?>
                            </a>
                        </div>
                        <?php endif;?>

                        <?php if (get_field('twitter', $post_id)): ?>
                        <div class="s-modal__social">
                            <a href="<?php the_field('twitter', $post_id);?>" target="_blank" rel="noopener noreferrer">
                                <?php echo file_get_contents(get_template_directory() . '/images/svg/twitter.svg'); ?>
                            </a>
                        </div>
                        <?php endif;?>

                        <?php if (get_field('instagram', $post_id)): ?>
                        <div class="s-modal__social">
                            <a href="<?php the_field('instagram', $post_id);?>" target="_blank"
                                rel="noopener noreferrer">
                                <?php echo file_get_contents(get_template_directory() . '/images/svg/insta.svg'); ?>
                            </a>
                        </div>
                        <?php endif;?>
                    </div>

                    <div class="s-modal__desc">
                        <?php the_field("description", $post_id)?>
                    </div>
                </div>
            </div>


        </div>


        <?php endwhile;?>

        <?php wp_reset_postdata();?>
    </div>

</div>
<?php endif;?>