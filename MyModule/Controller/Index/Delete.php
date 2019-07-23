<?php
namespace LeNgocAnh\MyModule\Controller\Index;
class Delete extends Magento\Framework\App\Action\Action{
    protected $_postRepository;
    protected $_pageFactory;
    protected $resultRedirect;
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\Controller\ResultFactory $result,
        \LeNgocAnh\MyModule\Model\PostRepository $postRepository
    ){
        $this->_postRepository = $postRepository;
        $this->_pageFactory = $pageFactory;
        $this->resultRedirect = $result;
        return parent::__construct($context);
    }
    public function execute(){
        $post_id = $this->getRequest()->getParam('post_id');
        $this->_postRepository->deleteById($post_id);
        $this->resultRedirect = $resultRedirectFactory->create();
        $this->resultRedirect->setPath('mymodule/index/index');
        return $resultRedirect;
    }
}
