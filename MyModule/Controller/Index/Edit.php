<?php
namespace LeNgocAnh\MyModule\Controller\Index;

class Edit extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;


	protected $_coreRegistry;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Magento\Framework\Registry $coreRegistry
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_coreRegistry = $coreRegistry;

		return parent::__construct($context);
	}

	public function execute()
	{
		$post_id = $this->getRequest()->getParam('post_id');
		$this->_coreRegistry->register('post_id', $post_id);
		return $this->_pageFactory->create();
	}
}
