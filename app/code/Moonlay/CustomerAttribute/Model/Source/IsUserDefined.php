<?php

namespace Moonlay\CustomerAttribute\Model\Source;

class IsUserDefined implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
         return [
            ['value' => 0, 'label'=>'Yes'],
            ['value' => 1, 'label'=>'No'],
         ];
    }
}
