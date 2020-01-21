<?php
/**
 * Attribute add/edit form options tab
 *
 */

namespace Moonlay\CustomerAttribute\Block\Adminhtml\Attribute\Edit\Options;

class Labels extends \Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Labels
{
    /**
     * @var string
     */
    protected $_template = 'Moonlay_CustomerAttribute::customer/attribute/labels.phtml';

    /**
     * Retrieve attribute object from registry
     *
     * @return \Magento\Eav\Model\Entity\Attribute\AbstractAttribute
     * @codeCoverageIgnore
     */
    private function getAttributeObject()
    {
        return $this->_registry->registry('entity_attribute');
    }
}
