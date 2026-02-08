<section class="capture">
    <h2 class="topic topic--capture">Capture</h2>
    <div class="capture__img">
        <?php
        $others = get_field('capture_others');
        ?>

        <?php if ($others): ?>
        <div class="capture__others">
            <img src="<?php echo esc_url($others['url']); ?>"
                alt="<?php echo esc_attr($others['alt']); ?>">
        </div>
        <?php endif; ?>
    </div>
</section>
