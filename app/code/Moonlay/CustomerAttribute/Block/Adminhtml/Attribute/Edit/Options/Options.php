<?php
/**
 * Attribute add/edit form options tab
 *
 */

namespace Moonlay\CustomerAttribute\Block\Adminhtml\Attribute\Edit\Options;

use Magento\Store\Model\ResourceModel\Store\Collection;

class Options extends \Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Options
{
    /**
     * @var string
     */
    protected $_template = 'Moonlay_CustomerAttribute::customer/attribute/options.phtml';
}
