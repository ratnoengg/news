<style>
    .ratio.custom-height {
        height: 140px !important;
    }

    .image.ratio .custom-img-height {
        height: 140px !important;
        object-fit: fill !important;
        border: 1px solid #ccc;
    }

     .blur-bg p {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 6px;
        z-index: 1;
        display: inline-flex;
        margin-bottom: 0px !important;
        }

    .blur-bg p span {
        background: #c22026 !important;
        padding: 0 6px;
        color: #fff !important;
    }
</style>

<div class="post-item<?= checkPostImg($postItem, 'class'); ?>">
    <?php if (!empty($showLabel)): ?>
        <a href="<?= generateCategoryURLById($postItem->category_id, $baseCategories); ?>">
            <span class="badge badge-category" style="background-color: <?= esc($postItem->category_color); ?>"><?= esc($postItem->category_name); ?></span>
        </a>
    <?php endif;
    if (checkPostImg($postItem)): ?>

        <div class="image ratio custom-height">
            <a href="<?= generatePostURL($postItem); ?>"<?php postURLNewTab($postItem); ?>>
                <div class="position-relative">
                    <img src="<?= IMG_BASE64_450x280; ?>" data-src="<?= getPostImage($postItem, 'mid'); ?>" alt="<?= esc($postItem->title); ?>" class="img-fluid custom-img-height lazyload" width="306" height="182"/>
                <?php getMediaIcon($postItem, 'media-icon'); ?>
                <span class="blur-bg"><?= characterLimiter($postItem->sub_title, 255, '...'); ?></span>
                </div>
               
            </a>
           
        </div>
         
        
    <?php endif; ?>
    <h3 class="title"><a href="<?= generatePostURL($postItem); ?>"<?php postURLNewTab($postItem); ?>><?= characterLimiter($postItem->title, 255, '...'); ?></a></h3>
   
   
</div>