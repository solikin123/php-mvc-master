<?php

namespace Solikin\PHP\MVC\Controller;

class ProductController
{

    function categories(string $productId, string $categoryId): void
    {
        echo "PRODUCT : $productId, CATGORY : $categoryId";
    }

}