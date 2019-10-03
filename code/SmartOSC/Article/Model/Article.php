<?php

namespace SmartOSC\Article\Model;
class Article extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'sm_article';

    protected $_cacheTag = 'sm_article';

    protected $_eventPrefix = 'sm_article';

    protected function _construct()
    {
//        $this->_init('SmartOSC\Article\Model\ResourceModel\Article');
        $this->_init(\SmartOSC\Article\Model\ResourceModel\Article::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
