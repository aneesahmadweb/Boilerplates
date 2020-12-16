<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Anees\Apiboilerplate\Api;

interface GetProductNameManagementInterface
{

    /**
     * GET for GetProductName api
     * @param string $param
     * @return string
     */
    public function getGetProductName($sku);

    /**
     * GET for produt price api
     * @param string $param
     * @return string
     */
    public function getGetProductPrice($price);
}

