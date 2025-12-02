<?php 
//echo'<pre>';
//print_r($widget);

if (!empty($widget) && $widget->visibility == 1):
    if ($widget->type == 'follow-us'): ?>
        <?php $socialLinks = getSocialLinksArray($baseSettings);
        if (!empty($socialLinks)):?>
            <div class="sidebar-widget">
                <div class="widget-head"><h4 class="title"><?= esc($widget->title); ?></h4></div>
                <div class="widget-body">
                    <div class="row gx-3 widget-follow">
                        <?php foreach ($socialLinks as $socialLink):
                            if (!empty($socialLink['value'])):?>
                                <div class="col-sm-3 col-md-4 item"><a class="color-<?= esc($socialLink['name']); ?>" href="<?= $socialLink['value']; ?>" target="_blank"><i class="icon-<?= esc($socialLink['name']); ?>"></i><span><?= esc($socialLink['text']); ?></span></a></div>
                            <?php endif;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif;
    elseif ($widget->type == 'popular-posts'): ?>

        <div class="sidebar-widget">

            <ul class="nav nav-tabs nav-category-block gap-3" role="tablist">
          
                <li class="nav-item category-block-links " style="display: block !important;"><a href="javascript:void(0)" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabCategory_1"><h4 class="title"><?= "জনপ্রিয় খবর"; ?></h4></a></li>

                <li class="nav-item category-block-links" style="display: block !important;"><a href="javascript:void(0)" class="nav-link" data-bs-toggle="tab" data-bs-target="#tabCategory_2"><h4 class="title"><?='বাছাইকৃত খবর' ?></h4></a></li>

            </ul>
            <p class="widget-head"></p>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="tabCategory_1" role="tabpanel">
                    <div class="row">
                        <?php $popularPosts = getPopularPosts($activeLang->id, $baseLatestCategoryPosts);
                        if (!empty($popularPosts)):
                            foreach ($popularPosts as $item): ?>
                                <div class="col-12">
                                    <?= loadView('post/_post_item_small', ['postItem' => $item, 'showLabel' => false]); ?>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
                </div>

                 <div class="tab-pane fade" id="tabCategory_2" role="tabpanel">
                    <div class="row">
                        <?php $recommendedPosts = getRecommendedPosts();
                        if (!empty($recommendedPosts)):
                            foreach ($recommendedPosts as $item): ?>
                                <div class="col-12">
                                    <?= loadView('post/_post_item_small', ['postItem' => $item, 'showLabel' => false]); ?>
                                </div>
                            <?php endforeach;
                        endif; ?>
                    </div>
                </div>    
                
            </div>   
            

        </div>

        <!-- <div class="sidebar-widget">
            <div class="widget-head"><h4 class="title"><?= esc($widget->title); ?></h4></div>
            <div class="widget-body">
                <div class="row">
                    <?php $popularPosts = getPopularPosts($activeLang->id, $baseLatestCategoryPosts);
                    if (!empty($popularPosts)):
                        foreach ($popularPosts as $item): ?>
                            <div class="col-12">
                                <?= loadView('post/_post_item_small', ['postItem' => $item, 'showLabel' => false]); ?>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div> -->

    <?php elseif ($widget->type == 'recommended-posts'): ?>
       <!--  <div class="sidebar-widget">
            <div class="widget-head"><h4 class="title"><?= esc($widget->title); ?></h4></div>
            <div class="widget-body">
                <div class="row">
                    <?php $recommendedPosts = getRecommendedPosts();
                    if (!empty($recommendedPosts)):
                        foreach ($recommendedPosts as $item): ?>
                            <div class="col-12">
                                <?= loadView('post/_post_item_small', ['postItem' => $item, 'showLabel' => false]); ?>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div> -->
    <?php elseif ($widget->type == 'tags'): ?>
        <div class="sidebar-widget">
            <div class="widget-head"><h4 class="title"><?= esc($widget->title); ?></h4></div>
            <div class="widget-body">
                <ul class="tag-list">
                    <?php $tags = getPopularTags();
                    if (!empty($tags)):
                        foreach ($tags as $item): ?>
                            <li><a href="<?= generateTagURL($item->tag_slug); ?>"><?= esc($item->tag); ?></a></li>
                        <?php endforeach;
                    endif; ?>
                </ul>
            </div>
        </div>
    <?php 
    
    elseif ($widget->type == 'poll'):
        echo view('common/_polls', ['widget' => $widget, 'isBs5' => 1]);

    elseif ($widget->type == 'custom' && !empty($widget->source_category_id)):

      if($widget->source_category_id ==86 ){
          $customPosts = getRecommendedAddPosts();  
      }else{
         $customPosts = getCustomPosts($widget->source_category_id);
      }
        

       // print_r($customPosts);
        ?>
        <div class="sidebar-widget">
            <?php if($widget->source_category_id ==86): ?>
            <div class="widget-head"><h4 class="title"> <a href="<?php echo langBaseUrl() . '/advertisement/';?>"><?= esc($widget->title); ?></a></h4></div>
            <?php elseif($widget->source_category_id ==70): ?>
            <div class="widget-head"><h4 class="title"> <a href="<?php echo langBaseUrl() . '/কমিউনিটি/tech-thought/';?>"><?= esc($widget->title); ?></a></h4></div>
            <?php else: ?>
            <div class="widget-head"><h4 class="title"><?= esc($widget->title); ?></h4></div>    
            <?php endif; ?>
            <div class="widget-body">
                <div class="row">
                    <?php 

                    if (!empty($customPosts) && $widget->source_category_id ==86): ?>

                    <?php 
                        foreach ($customPosts as $item): ?>
                            <div class="col-12">
                                <?= loadView('post/_post_item_small_add', ['postItem' => $item, 'showLabel' => false]); ?>
                            </div>
                        <?php endforeach; ?>
                    <?php
                    elseif(!empty($customPosts) && $widget->source_category_id !=86):  ?>  

                        <?php 
                        foreach ($customPosts as $item): ?>
                            <div class="col-12">
                                <?= loadView('post/_post_item_small', ['postItem' => $item, 'showLabel' => false]); ?>
                            </div>
                        <?php endforeach; ?>
                 <?php  endif; ?>
                </div>
                <div class="row personal_opinions">
                  <span>  <?= $widget->content; ?> </span> 
                </div>
            </div>
        </div>
    <?php 
     elseif ($widget->type == 'custom' && empty($widget->source_category_id)):?>
        <div class="sidebar-widget">
            <div class="widget-head"><h4 class="title"><?= esc($widget->title); ?></h4></div>
            <div class="widget-body">
                <?= $widget->content; ?>
            </div>
        </div>
    <?php endif;
endif; ?>