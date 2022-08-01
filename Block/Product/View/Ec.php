<?php

namespace Saderra\EnhancedContent\Block\Product\View;

use Magento\Catalog\Block\Product\AbstractProduct;

class Ec extends AbstractProduct
{
    public function getIframeURL()
        {
            // $ec should be a URL stored in the product attribute 'ecurl' for each product. If that attribute isn't populated, it returns null. 

	        $ec = 'https://s3.us-west-1.amazonaws.com/saderra.public/classic-enhanced-content/40-030-015501-00.html';
            return $ec;
        }
}