<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Anees\Apiboilerplate\Api;


use Magento\Tests\NamingConvention\true\numeric;


interface GetProductPriceInterface
{

    /**
     * GET for GetProductPrice api
     * @param string $param
     * @return numeric
     */

    public function getGetProductPrice($sku);
}
