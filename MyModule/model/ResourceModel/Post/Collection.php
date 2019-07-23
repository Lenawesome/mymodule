<?php
namespace LeNgocAnh\MyModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'lenawesome_newfrontpage_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('LeNgocAnh\MyModule\Model\Post', 'LeNgocAnh\MyModule\Model\ResourceModel\Post');
	}
}
