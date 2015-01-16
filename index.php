<?php
/**
 * 这是 3dobe.com 网站的一套默认皮肤
 * 
 * @package 3dobe
 * @author Mr.Raindrop
 * @version 1.0
 * @link http://www.mrraindrop.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-9" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('更多>>'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
