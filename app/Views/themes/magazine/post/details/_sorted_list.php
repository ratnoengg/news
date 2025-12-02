<style>
    
    .ordered-list-item::after {
  content: "" !important;
  display: table !important;
  clear: both !important;
}

.ordered-list-item,
.ordered-list-item .post-text {
  overflow: visible !important;
  clear: none !important;
  float: none !important;
  contain: none !important;
  display: block !important; 
}

.ordered-list-item .post-image {
  float: right !important;
  width: 40% !important;             
  max-width: 40% !important;
  margin: 0 0 1rem 1rem !important;   
  display: block !important;
}

.ordered-list-item .post-image-inner,
.ordered-list-item .post-image img {
  width: 100% !important;
  height: auto !important;
  object-fit: contain !important;
  display: block !important;
}

.ordered-list-item .img-description {
  font-size: 0.875rem !important;
  opacity: 0.85 !important;
  margin-top: 0.5rem !important;
}

@media (max-width: 768px) {
  .ordered-list-item .post-image {
    float: none !important;
    width: 100% !important;    
    max-width: 100% !important;
    margin: 0 0 1rem 0 !important;
}
}
    
</style>


<div class="post-image">
    <div class="post-image-inner">
        <?php if (!empty($postImages) && countItems($postImages) > 0) : ?>
            <div class="show-on-page-load">
                <div id="post-detail-slider" class="post-detail-slider">
                    <div class="post-detail-slider-item">
                        <img src="<?= getPostImage($post, 'default'); ?>" class="img-fluid center-image" alt="<?= esc($post->title); ?>"  width="856" height="570"/>
                        <figcaption class="img-description"><?= esc($post->image_description); ?></figcaption>
                    </div>
                    <?php foreach ($postImages as $image):
                        $imgBaseURL = getBaseURLByStorage($image->storage); ?>
                        <div class="post-detail-slider-item">
                            <img src="<?= $imgBaseURL . esc($image->image_default); ?>" class="img-fluid center-image" alt="<?= esc($post->title); ?>" width="856" height="570"/>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="post-detail-slider-nav" class="post-detail-slider-nav">
                    <button class="prev"><i class="icon-arrow-left"></i></button>
                    <button class="next"><i class="icon-arrow-right"></i></button>
                </div>
            </div>
        <?php else:
            if (!empty($post->image_default) || !empty($post->image_url)):?>
                <img src="<?= getPostImage($post, 'default'); ?>" class="img-fluid center-image" alt="<?= esc($post->title); ?>" width="856" height="570"/>
                <?php if (!empty($post->image_description)): ?>
                    <figcaption class="img-description"><?= esc($post->image_description); ?></figcaption>
                <?php endif; ?>
            <?php endif;
        endif; ?>
    </div>
</div>



<?php $itemCount = 1;
if (!empty($sortedListItems)):
    foreach ($sortedListItems as $listItem): ?>
        <div class="ordered-list-item">
           
            <?php if (!empty($listItem->image)):
                $imgBaseURL = getBaseURLByStorage($listItem->storage); ?>
                <div class="post-image">
                    <div class="post-image-inner">
                        <img src="<?= $imgBaseURL . $listItem->image_large; ?>" alt="<?= esc($listItem->title); ?>" class="img-fluid" width="856" height="570"/>
                        <figcaption class="img-description"><?= esc($listItem->image_description); ?></figcaption>
                    </div>
                </div>
            <?php endif; ?>
            <div class="post-text">
                <?= $listItem->content; ?>
            </div>
        </div>
        <?php $itemCount++;
    endforeach;
endif; ?>