<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Anees\Apiboilerplate\Model;

class GetProductNameManagement implements \Anees\Apiboilerplate\Api\GetProductNameManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getGetProductName()
    {
        return 'hello api GET return ' ;
    }
}

