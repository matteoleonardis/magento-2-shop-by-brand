<?php
/**
 * Magiccart 
 * @category    Magiccart 
 * @copyright   Copyright (c) 2014 Magiccart (http://www.magiccart.net/) 
 * @license     http://www.magiccart.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-11 23:15:05
 * @@Modify Date: 2026-03-19 16:20:06
 * @@Function:Sort brands
 */

namespace Magiccart\Shopbrand\Model\ResourceModel\Shopbrand;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Magiccart\Shopbrand\Model\Shopbrand',
            'Magiccart\Shopbrand\Model\ResourceModel\Shopbrand'
        );
    }

    /**
     * Sort brands alphabetically by name (A→Z)
     */
    protected function _initSelect()
    {
        parent::_initSelect();

        // If the name field is called "name", leave it as it is;
        // if it has a different name (e.g. "title"), change it here.
        $this->setOrder('name', 'ASC');

        return $this;
    }
}
