<?php
namespace SmartOSC\Article\Model\ResourceModel\Article;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'article_id';
    protected $_eventPrefix = 'smartosc_article_article_collection';
    protected $_eventObject = 'article_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
//        $this->_init('SmartOSC\Article\Model\Article', 'SmartOSC\Article\Model\ResourceModel\Article');
        $this->_init(\SmartOSC\Article\Model\Article::class, \SmartOSC\Article\Model\ResourceModel\Article::class);
    }

}

