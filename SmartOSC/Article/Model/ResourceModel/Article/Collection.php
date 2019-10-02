<?php


namespace SmartOSC\Article\Model\ResourceModel\Article;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'article_id';
    protected $_eventPrefix = 'SmartOSC_Article_Article_Collection';
    protected $_eventObject = 'Article_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('SmartOSC\Article\Model\Post', 'SmartOSC\Article\Model\ResourceModel\Article');
    }
}
