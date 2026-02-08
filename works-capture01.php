<section class="capture">
    <h2 class="topic topic--capture">Site Capture</h2>
    <div class="buttons">
        <button class="button" id="pc_btn">パソコン</button>
        <button class="button" id="sp_btn">スマホ</button>     
    </div>
    <?php
    // PC画像配列
    $pc_images = [
        get_field('capture_pc_01'),
        get_field('capture_pc_02'),
        get_field('capture_pc_03'),
    ];
    
    // SP画像配列
    $sp_images = [
        get_field('capture_sp_01'),
        get_field('capture_sp_02'),
        get_field('capture_sp_03'),
    ];
    ?>
    
    <div class="capture__img">
    
      <!-- PC画像 -->
      <div class="capture__pc">
        <?php foreach ($pc_images as $img): ?>
          <?php if ($img): ?>
            <img src="<?php echo esc_url($img['url']); ?>"
                 alt="<?php echo esc_attr($img['alt']); ?>">
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    
      <!-- SP画像 -->
      <div class="capture__sp">
        <?php foreach ($sp_images as $img): ?>
          <?php if ($img): ?>
            <img src="<?php echo esc_url($img['url']); ?>"
                 alt="<?php echo esc_attr($img['alt']); ?>">
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    
    </div>
</section>
