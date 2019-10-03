<?php


namespace SmartOSC\Article\Block;

class Display extends \Magento\Framework\View\Element\Template
{
    protected $_articleFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \SmartOSC\Article\Model\ArticleFactory $articleFactory
    )
    {
        $this->_articleFactory = $articleFactory;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    public function getPostCollection(){
        $post = $this->_articleFactory->create();
        return $post->getCollection();
    }
}
