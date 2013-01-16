<?php
/**
 * @version		$Id: default.php $
 * @package		Joomla.Site
 * @subpackage	com_je_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		muinx
 * This component was generated by http://joomlavietnam.net/ - 2012
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

?>

<script type="text/javascript" src="<?php echo JURI::base(); ?>media/jquery.bxslider/jquery.bxslider.min.js"></script>

<script type="text/javascript">
jQuery().ready(function($){
	$('#featured-slideshow').bxSlider({
		mode: 'fade',
		pager: false,
		auto: false,
		controls: false
	});
})
</script>

<div class="icons news-featured">
	<div class="left-panel float-left padding-5">
		<div>
			<ul class="items" id="featured-slideshow">
				<?php foreach($this->items as $item): ?>
					<li>
						<h1><?php echo $this->escape($item->title); ?>
						<?php if ($item->featured_images): ?>
						<img src="<?php echo JURI::base() . $item->featured_images; ?>" />
						<?php endif; ?>
						<div class="absolute featured-desc">
							<?php echo JHtml::_('string.truncate', strip_tags($item->introtext), 100); ?>
						</div>					
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	
	<div class="right-panel float-right padding-5">
	    <?php 
	    $modules = JModuleHelper::getModules('blogger');
	    foreach($modules as $module)
	    {
		echo JModuleHelper::renderModule($module);
	    }
	    ?>
	</div>
</div>

<div class="clr"></div>

<div class="container">
    <div class="float-left left-side">
		<div>
		    <?php 
		    $modules = JModuleHelper::getModules('center');
		    foreach($modules as $module)
		    {
			echo JModuleHelper::renderModule($module);
		    }
		    ?>
		</div>

		<div class="sub-container">
			<p>TÌM KIẾM DỊCH VỤ CƯỚI</p>

			<div class="line-break-search"><span></span></div>

			<form id="frm-search-service">
			<p>Chú ý: <span>Chọn một trong các lựa chọn bên dưới rồi nhấn vào Tìm kiếm để tìm kiếm dịch vụ.</span></p>
			<div>
				<select>
					<option>Chọn dịch vụ</option>
				</select>

				<select>
					<option>Tỉnh / Thành</option>
				</select>

				<select>
					<option>Quận / Huyện</option>
				</select>
			</div>

			<div>
				<input type="text" placeholder="Gõ tên nhà cung cấp dịch vụ">
				<button type="button">Tìm kiếm dịch vụ</button>
			</div>

			</form>
		</div>
		
		<div class="sub-container">
			<div class="left float-left">
			    <?php 
			    $articles = $this->articles;
			    
			    foreach ($articles as $item):
				if (isset($item['sub'])):
			    ?>
				<div class="items-category">
					<h1>
					    <?php
					    $firstCategory = array_shift($item['sub']);
					    echo $firstCategory->title;

					    $tmp = array_reverse($item['sub']);
					    array_pop($tmp);
					    $categories = array_reverse($tmp);

					    $check = 0;
					    ?>
					    <span>
						    <?php foreach ($categories as $cat): ?>
						    <a href="#"><?php echo $cat->title; ?></a>

						    <?php 
						    $check ++;

						    if ($check > 1)
							break;

						    endforeach; 
						    ?>
					    </span>
					</h1>

					<?php $listArticles = $item['articles'][$firstCategory->id]; ?>
					<div>
						<h2><?php echo $listArticles[0]->title; ?></h2>
						<?php echo $listArticles[0]->introtext; ?>
						
						<ul>
						    <?php 
						    foreach ($listArticles as $key => $article):
							if ($key == 0) continue;
							
							$article->slug = $article->alias ? ($article->id . ':' . $article->alias) : $article->id;
						    ?>
						    <li>
							<a href="<?php echo JRoute::_(JE_ContentHelperRoute::getArticleRoute($article->slug, $article->catid)); ?>">
							    <?php echo $article->title; ?>
							</a>
						    </li>
						    <?php endforeach; ?>
						</ul>
					</div>
				</div>
			    <div class="clr"></div>
			    <?php endif; endforeach; ?>
			</div>
			
			<div class="right float-right">
			    <?php 
			    $modules = JModuleHelper::getModules('right-sub');
			    foreach($modules as $module)
			    {
				if ($module->showtitle)
				    echo '<div class="module-title">' . $module->title . '</div>';
				
				echo JModuleHelper::renderModule($module);
			    }
			    ?>
			</div>
		</div>
    </div>
    
    <div class="float-right right-side">
	<?php
	$modules = JModuleHelper::getModules('right');
	foreach( $modules As $mod ){
	    echo JModuleHelper::renderModule($mod);
	}
	?>
    </div>
</div>

<div class="clr "></div>

<div class="hr margin-top-bottom-10"></div>

<div>
	<div class="left-side float-left">
        <?php
        $modules = JModuleHelper::getModules('business_blog');
        foreach( $modules As $mod ){
            echo JModuleHelper::renderModule($mod);
        }
        ?>
	</div>
	
	<div class="right-side float-right">
		<h2>TIN CŨ</h2>
		<div class="content">
			<div class="">
				<img src="" />
				<p>Đám cưới tập thể</p>
			</div>
		</div>
	</div>
</div>

<div class="clr"></div> 