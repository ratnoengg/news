<h1 class="title-index"><?= esc($homeTitle); ?></h1>


<?php if ($generalSettings->show_newsticker == 1 && countItems($breakingNews) > 0): ?>
    <section class="section section-newsticker">
        <div class="container-xl">
            <div class="row">
                <div class="d-flex newsticker-container" style="background-color: #c22026 !important">
                    <div class="newsticker-title" style="background-color: #c22026 !important">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                            <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z"/>
                        </svg>
                        <span>&nbsp;&nbsp;<?= trans("breaking_news"); ?></span>
                    </div>
                    <ul class="newsticker">
                        <?php foreach ($breakingNews as $item): ?>
                            <li><a href="<?= generatePostURL($item); ?>"<?php postURLNewTab($item); ?>> <span style="color: #fff !important;"> <?= esc($item->title); ?></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="ms-auto">
                        <div id="nav_newsticker" class="nav-sm-buttons">
                            <button class="prev" aria-label="prev"><i class="icon-arrow-left"></i></button>
                            <button class="next" aria-label="next"><i class="icon-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($generalSettings->show_newsticker == 1 && countItems($breakingNews)==0 && countItems($latestPosts) > 0): ?>
    <section class="section section-newsticker">
        <div class="container-xl">
            <div class="row">
                <div class="d-flex newsticker-container">
                    <div class="newsticker-title" style="background-color: #004214 !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                        </svg>
                        <span>&nbsp;&nbsp;<?= trans("latest_posts"); ?></span>
                    </div>
                    <ul class="newsticker">
                        <?php foreach ($latestPosts as $item): ?>
                            <li><a href="<?= generatePostURL($item); ?>"<?php postURLNewTab($item); ?>><?= esc($item->title); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="ms-auto">
                        <div id="nav_newsticker" class="nav-sm-buttons">
                            <button class="prev" aria-label="prev"><i class="icon-arrow-left"></i></button>
                            <button class="next" aria-label="next"><i class="icon-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;



if ($generalSettings->show_featured_section == 1):
    if ($activeTheme->theme == 'news'):
        echo view('themes/news/partials/_main_slider');
    else:
        echo loadView('partials/_main_slider');
    endif;
endif;
?>

<?php if ($generalSettings->show_newsticker == 1 && countItems($englishNews) > 0): ?>
    <section class="section section-newsticker">
        <div class="container-xl">
            <div class="row">
                <div class="d-flex newsticker-container">
                    <div class="newsticker-title" style="background-color: #004214 !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"/>
</svg>
                        <span> &nbsp;&nbsp;<?= trans("english_24×X"); ?> </span>
                    </div>
                    <ul class="newsticker">
                        <?php foreach ($englishNews as $item): ?>
                            <li><a href="<?= generatePostURL($item); ?>"<?php postURLNewTab($item); ?>><?= esc($item->title); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="ms-auto">
                        <div id="nav_newsticker" class="nav-sm-buttons">
                            <button class="prev" aria-label="prev"><i class="icon-arrow-left"></i></button>
                            <button class="next" aria-label="next"><i class="icon-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>



<?php

$catSliderIds = array();
$i = 0;
if (!empty($baseCategories)):
    foreach ($baseCategories as $category):
        if ($category->show_on_homepage == 1 && $category->lang_id == $activeLang->id):

           // echo $category->block_type ; 

            // if ($category->block_type == 'block-1') {
            //     echo loadView('partials/_category_block_type_1', ['category' => $category]);
            // }

            if ($category->block_type == 'block-1' && $category->id == 87) {
                echo loadView('partials/_category_block_type_sara_1', ['category' => $category]);
            }

            if ($category->block_type == 'block-1' && $category->id <> 87) {
                echo loadView('partials/_category_block_type_1', ['category' => $category]);
            }





            if ($category->block_type == 'block-2' && $category->id == 39) {
                echo loadView('partials/_category_block_type_eng_2', ['category' => $category]);
            }

            if ($category->block_type == 'block-2' && $category->id <> 39) {
                echo loadView('partials/_category_block_type_2', ['category' => $category]);
            }

            if ($category->block_type == 'block-3') {
                echo loadView('partials/_category_block_type_3', ['category' => $category]);
            }
            if ($category->block_type == 'block-4') {
                echo loadView('partials/_category_block_type_4', ['category' => $category]);
            }
            if ($category->block_type == 'block-5') {
                echo loadView('partials/_category_block_type_5', ['category' => $category]);
                array_push($catSliderIds, $category->id);
            }
            if ($category->block_type == 'block-6') {
                echo loadView('partials/_category_block_type_6', ['category' => $category]);
            }
            if ($i == 0) {
                echo loadView('partials/_ad_spaces', ['adSpace' => 'index_top', 'class' => 'mb-4']);
            }

            if ($category->id == 39) {
               echo loadView('post/_latest_posts', ['latestPosts' => $latestPosts]);    
            }

            $i++;
        endif;
    endforeach;
endif;



if (!empty($catSliderIds)):?>
    <script>VrConfig.categorySliderIds = <?= json_encode($catSliderIds); ?>;</script>

<?php endif; ?>




<?php
echo loadView('partials/_ad_spaces', ['adSpace' => 'index_bottom', 'class' => 'mb-4']);
//echo loadView('post/_latest_posts', ['latestPosts' => $latestPosts]);
?>


