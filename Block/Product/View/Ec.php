<?php

namespace Saderra\EnhancedContent\Block\Product\View;

use Magento\Catalog\Block\Product\AbstractProduct;

class Ec extends AbstractProduct
{
    public function getIframeURL()
        {
	    $product = $this->getProduct();	
            return $product->getData('ecurl');
        }
}
