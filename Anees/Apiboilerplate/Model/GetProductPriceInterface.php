<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Anees\Apiboilerplate\Model;


use Magento\Tests\NamingConvention\true\numeric;


class GetProductPriceInterface implements \Anees\Apiboilerplate\Api\GetProductPriceInterface
{


     protected $_product;

    /**
     * GetProductPriceInterface constructor.
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     */

    public function __construct(

    \Magento\Catalog\Model\ProductFactory $productFactory

    ) {
    $this->productFactory = $productFactory;
    }

    /**
     * GET for GetProductPrice api
     * @param string $param
     * @return numeric
     */

    public function getGetProductPrice($sku)
    {


        //$sku = 'testing'; //Product sku
        $product = $this->productFactory->create();
        $productPriceBySku = $product->loadByAttribute('sku', $sku)->getPrice();
        return $productPriceBySku;



    }

}
