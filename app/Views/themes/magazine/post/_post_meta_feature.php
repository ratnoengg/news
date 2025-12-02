<?php if ($generalSettings->show_post_author == 1): ?>

	<?php if($postItem->posted_by_alt): ?>
		<a href="<?= generateSearchURL($postItem->posted_by_alt); ?>" class="a-username">
    	<?= esc(characterLimiter($postItem->posted_by_alt, 150, '...')); ?></a>
	<?php else: ?>  
		<a href="<?= generateProfileURL($postItem->author_slug); ?>" class="a-username">
    	<?= esc(characterLimiter($postItem->author_username, 150, '...')); ?></a>
	 
	<?php endif; ?>   	   
<?php endif;

 //echo'<pre>';
 //print_r($postItem);
 //echo'</pre>';


?>

<?php 
if ($generalSettings->comment_system == 1): ?>
    <span><i class="icon-comment"></i>&nbsp;<?= $postItem->comment_count; ?></span>
<?php endif;
if ($generalSettings->show_hits): ?>
    <span class="m-r-0"><i class="icon-eye"></i>&nbsp;<?= isset($postItem->pageviews_count) ? numberFormatShort($postItem->pageviews_count) : numberFormatShort($postItem->pageviews); ?></span>
<?php endif; ?>