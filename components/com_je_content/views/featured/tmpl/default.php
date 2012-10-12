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

<ul class="items">
	<?php foreach($this->items as $item): ?>	
		
			<li>
			<?php echo '<label>title</label>: '. $this->escape($item->title); ?>
			</li>
			<li>
			<?php echo '<label>alias</label>: '. $this->escape($item->alias); ?>
			</li>
			<li>
			<?php echo '<label>featured</label>: '. $this->escape($item->featured); ?>
			</li>
	<?php endforeach; ?>
</ul>

<div class="pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>