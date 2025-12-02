<div class="post-item<?= checkPostImg($postItem, 'class'); ?>">
    <?php if (!empty($showLabel)): ?>
        <a href="<?= generateCategoryURLById($postItem->category_id, $baseCategories); ?>">
            <span class="badge badge-category" style="background-color: <?= esc($postItem->category_color); ?>"><?= esc($postItem->category_name); ?></span>
        </a>
    <?php endif; ?>

    <h3 class="title"><a href="<?= generatePostURL($postItem); ?>"<?php postURLNewTab($postItem); ?>><?= characterLimiter($postItem->title, 255, '...'); ?></a></h3>
     <p class="post-meta"><?= loadView('post/_post_meta_feature', ['postItem' => $postItem]); ?></p>
    <?php
    if (checkPostImg($postItem)): ?>
        <div class="image ratio">
            <a href="<?= generatePostURL($postItem); ?>"<?php postURLNewTab($postItem); ?>>
                <img src="<?= IMG_BASE64_450x280; ?>" data-src="<?= getPostImage($postItem, 'mid'); ?>" alt="<?= esc($postItem->title); ?>" class="img-fluid lazyload" width="416" height="247.417"/>
                <?php getMediaIcon($postItem, 'media-icon'); ?>
            </a>
        </div>
    <?php endif; ?>
    
   
   
</div>