<?php
namespace LeNgocAnh\MyModule\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_postFactory;

	protected $_postRepository;

	protected $_coreRegistry;

	protected $resultRedirect;


	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\LeNgocAnh\MyModule\Model\PostFactory $postFactory,
		\LeNgocAnh\MyModule\Model\PostRepository $postRepository, 
		\Magento\Framework\Registry $coreRegistry,
		\Magento\Framework\Controller\ResultFactory $result
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		$this->_postRepository = $postRepository;
		$this->_coreRegistry = $coreRegistry;
		$this->resultRedirect = $result; 
		return parent::__construct($context);
	}

	public function execute()
	{
		$post = $this->_postFactory->create();
		if (isset($_POST['editbtn'])) {
			$post->setId($_POST['editbtn']);
			$post->setName($_POST['name']);
			$post->setUrlKey($_POST['url']);
			$post->setContent($_POST['content']);
			$post->setStatus($_POST['status']);
			$post->setUpdatedAt(date('Y-m-d H:i:s'));
		}
		elseif (isset($_POST['createbtn'])) {
			$post->setName($_POST['name']);
			$post->setUrlKey($_POST['url']);
			$post->setContent($_POST['content']);
			$post->setStatus($_POST['status']);
			$post->setCreatedAt(date('Y-m-d H:i:s'));
			$post->setUpdatedAt(date('Y-m-d H:i:s'));
		}
        
        $this->_postRepository->save($post);
        
       

		$resultRedirect = $this->resultRedirectFactory->create();
		$resultRedirect->setPath('mymodule/index/index');
		return $resultRedirect; 
	}
}
