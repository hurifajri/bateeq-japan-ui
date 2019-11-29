<?php

namespace Moonlay\CustomHome\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class RunningText extends Template implements BlockInterface
{
  protected $_template = "widget/running_text.phtml";
}
