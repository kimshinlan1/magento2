<?php


namespace SmartOSC\Article\Block;

use  Magento\Framework\App\Request\Http;
use Magento\Framework\View\Element\Template\Context;
use SmartOSC\Article\Model\ResourceModel\Article\CollectionFactory;

class ArticleDetail extends \Magento\Framework\View\Element\Template
{
    protected $_collectFactory;
    protected $_articleFactory;

    public function __construct(Context $context, CollectionFactory $articleFactory, Http $request
    )
    {

        $this->_articleFactory = $articleFactory;
        $this->request = $request;
        parent::__construct($context);
    }

    public function getDetailById()
    {
//        $id = $this->getParam('id');
        $id = $this->_request->getParam('article_id');
        $collector = $this->_articleFactory->create();
        $collector->addFieldToFilter('article_id', $id);

        $object = $collector->getData();
        return $object;
    }

    public function Hello()
    {
        echo 'Hello World';
    }
}
