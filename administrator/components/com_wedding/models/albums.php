<?php
// no direct access 
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.modellist'); 
 
class WeddingModelAlbums extends JModelList
{
	var $_data = null;
//	var $_pagination = null;
//	var $_total = null;
	
//	function getItems()
//	{
//		if( empty( $this->_data ) )
//		{
//			$limit = 20;
//			$limitstart = JRequest::getInt('limitstart');
//			$query = $this->_buildQuery();
//            $this->_data = $this->_getList($query, $limitstart, $limit); 
//		}
//		return $this->_data;
//	}	
//	
//	function getTotal()
//	{
//		if(empty($this->_total))
//		{
//			require_once(JPATH_COMPONENT.DS.'helpers'.DS.'general.php');
//			$this->_total = generalHelpers::getTotal('#__wedding_albums');
//		}
//	}
//	
//	function getPagination()
//	{
//        if( empty( $this->_pagination ) )
//        {
//            jimport( 'joomla.html.pagination' );
//            $this->_pagination = new JPagination($this->getTotal(), $limitstart, $limit );
//        }
//        return $this->_pagination;
//	}
	
	function getListQuery() 
	{
		$query = "SELECT a.id, a.title, a.thumbnail, a.featured, u.username 
					FROM #__wedding_albums a 
					LEFT JOIN #__users u ON a.user_id = u.id 
					ORDER BY created_date DESC";
		
		return $query;
	}
	
	function publish()
	{
		$cid = JRequest::getVar('cid', array(), '', 'array');
		JArrayHelper::toInteger($cid);
		$cids = implode(',', $cid);
		
		$db = & JFactory::getDbo();
		$query = "UPDATE #__wedding_albums SET featured = 1 WHERE id IN ({$cids})";
		$db->setQuery($query);
		$result = $db->query();
		if(!$result)
		{
			$this->setError($db->getErrorMsg());
			return false;
		}
		return true;
	}
	
	function unpublish()
	{
		$cid = JRequest::getVar('cid', array(), '', 'array');
		JArrayHelper::toInteger($cid);
		$cids = implode(',', $cid);
		
		$db = & JFactory::getDbo();
		$query = "UPDATE #__wedding_albums SET featured = 0 WHERE id IN ({$cids})";
		$db->setQuery($query);
		$result = $db->query();
		if(!$result)
		{
			$this->setError($db->getErrorMsg());
			return false;
		}
		return true;
	}
}