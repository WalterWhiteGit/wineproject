<?php

namespace AppBundle\Repository;

/**
 * productsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductsRepository extends \Doctrine\ORM\EntityRepository
{



    public function selectAll()
    {

        // Build Query
        $results = $this->createQueryBuilder('products')
                        ->select('products.productName','products.productLine','products.salePrice')
                        ->getQuery()
                        ->getResult();



        // Return Query Results
        return $results;

    }


}
