<?php

namespace SmartOSC\Article\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_articleFactory;

    protected $collectionFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \SmartOSC\Article\Model\ArticleFactory $articleFactory


    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_articleFactory = $articleFactory;
//        $this->collectionFactory = $collectionFactory;
        return parent::__construct($context);
    }

    public function execute()
    {

        $article = $this->_articleFactory->create();
        $collection = $article->getCollection();
        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();
        return $this->_pageFactory->create();
    }
}

