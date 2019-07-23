<?php
namespace LeNgocAnh\MyModule\Block;

class Edit extends \Magento\Framework\View\Element\Template
{
	private $postRepository;
	private $_coreRegistry;

	public function __construct(\Magento\Framework\View\Element\Template\Context $context,\LeNgocAnh\MyModule\Model\PostRepository $postRepository, 
		\Magento\Framework\Registry $coreRegistry)

	{
		parent::__construct($context);
		$this->postRepository = $postRepository;
		$this->_coreRegistry = $coreRegistry;
	}

	public function getPost()
	{
        $post_id = $this->_coreRegistry->registry('post_id');
		$post = $this->postRepository->getById($post_id);
		return $post;
	}
}
