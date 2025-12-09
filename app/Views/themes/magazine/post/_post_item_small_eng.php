<div class="tbl-container tbl-update post-item-small<?= checkPostImg($postItem, 'class'); ?>">
    <?php if (checkPostImg($postItem)): ?>
        <div class="tbl-cell left d-block w-100">
            <?php if (checkPostImg($postItem)): ?>
                <div class="image custom-height h-auto w-100 mb-2">
                    <a href="<?= generatePostURL($postItem); ?>"<?php postURLNewTab($postItem); ?>>
                        <img src="<?= IMG_BASE64_1x1; ?>" data-src="<?= getPostImage($postItem, 'small'); ?>" alt="<?= esc($postItem->title); ?>" class="img-fluid w-100 lazyload" width="130" height="91"/>
                        <?php getMediaIcon($postItem, 'media-icon'); ?>
                    </a>
                </div>
            <?php endif; ?>

            <h3 class="title"><a href="<?= generatePostURL($postItem); ?>"<?php postURLNewTab($postItem); ?>><?= esc(characterLimiter($postItem->title, 250, '...')); ?></a></h3>
        <p class="small-post-meta"><?= loadView('post/_post_meta', ['postItem' => $postItem]); ?></p>


        </div>
    <?php endif; ?>
    <!-- <div class="tbl-cell right">
        <h3 class="title"><a href="<?= generatePostURL($postItem); ?>"<?php postURLNewTab($postItem); ?>><?= esc(characterLimiter($postItem->title, 250, '...')); ?></a></h3>
        <p class="small-post-meta"><?= loadView('post/_post_meta', ['postItem' => $postItem]); ?></p>
    </div> -->
</div>

<style>
    .tbl-container.tbl-update {
        display: block !important;
    }

    @media (max-width: 768px) {
    .post-item-small .left .image.custom-height {
        height: auto !important; 
    }
}

</style>