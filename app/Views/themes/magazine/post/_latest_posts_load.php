<?php $i = 1;
if (!empty($latestPosts)):
    foreach ($latestPosts as $key=>$item):
        if ($i <= $limitLoadMorePosts && $key>5 ):?>
            <div class="col-sm-12<?= $hasWidgets ? ' col-md-6' : ' col-md-4'; ?>">
             <?= loadView("post/_post_item", ['postItem' => $item, 'showLabel' => true]); ?>
            </div>
        <?php endif;
        $i++;
    endforeach;
endif; ?>
<span id="limit_load_more_posts" class="visually-hidden"><?= $limitLoadMorePosts; ?></span>