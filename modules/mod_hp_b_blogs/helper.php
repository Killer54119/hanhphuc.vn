<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_banners
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class modBusinessBlogHelper {
	static function &getListBlogs(&$params) {
        $limit = $params->get('limit');
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('p.*')
            ->from('#__hp_business_profile p')
            ->innerJoin('#__users u ON p.user_id = u.id')
            ->where('u.user_type = 1')
            ->order('u.registerDate desc');
        //var_dump(str_replace('#__', 'hp_', $query->__toString()));
        $db->setQuery($query, 0, $limit);
        $return = $db->loadObjectList();
		return $return;
	}
}
