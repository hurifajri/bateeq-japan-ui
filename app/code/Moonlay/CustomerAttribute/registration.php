<?php

use Magento\Framework\Component\ComponentRegistrar;

$registrar = new ComponentRegistrar();

if ($registrar->getPath(ComponentRegistrar::MODULE, 'Moonlay_CustomerAttribute') === null) {
    ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Moonlay_CustomerAttribute', __DIR__);
}
