<?php
namespace LeNgocAnh\MyModule\Model;

use LeNgocAnh\MyModule\Api\Data\PostInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements
    \Magento\Framework\DataObject\IdentityInterface,
    PostInterface
{
	const CACHE_TAG = 'lenawesome_newfrontpage_post';

	protected $_cacheTag = 'lenawesome_newfrontpage_post';

	protected $_eventPrefix = 'lenawesome_newfrontpage_post';

	protected function _construct()
	{
		$this->_init('LeNgocAnh\MyModule\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
