<?php if( have_rows('socials', 'option') ): ?>
    <div class="st-socials">
        <?php while( have_rows('socials','option') ) : the_row();
            $social_url = get_sub_field('social_url');
            $icon = get_sub_field('social_icon');
            ?>
            <a aria-label="Visit us" class="st_icon" target="_blank" href="<?php echo $social_url; ?>"> <?php echo $icon ?></a>
        <?php endwhile ?>
    </div>
<?php endif ?>