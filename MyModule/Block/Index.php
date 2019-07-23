<?php
namespace LeNgocAnh\MyModule\Block;
class Index extends \Magento\Framework\View\Element\Template
{

	private $_collectionFactory;
	// private $_productRepository;
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,
	  \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory
	  )
	{
		parent::__construct($context);
		$this->_collectionFactory = $collectionFactory;
	}

	
	public function getPosts()
	{
		// $collection = $this->postRepository->getList();
		// $collection = $post->getCollection();
		$collection = $this->_collectionFactory->create();
		$collection->addAttributeToSelect('*');
		$collection->setPageSize(15);
		// $collection = $this->_productRepository->getList()
		return $collection;
	}

}
