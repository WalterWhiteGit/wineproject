<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\productsRepository")
 */
class Products
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="productCode", type="integer", unique=true)
     */
    private $productCode;

    /**
     * @var string
     *
     * @ORM\Column(name="productName", type="string", length=100, unique=true)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="productLine", type="string", length=50)
     */
    private $productLine;

    /**
     * @var string
     *
     * @ORM\Column(name="productVendor", type="string", length=100)
     */
    private $productVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="productDescription", type="text")
     */
    private $productDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="quantityInStock", type="integer")
     */
    private $quantityInStock;

    /**
     * @var int
     *
     * @ORM\Column(name="buyPrice", type="integer")
     */
    private $buyPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="salePrice", type="integer")
     */
    private $salePrice;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productCode
     *
     * @param integer $productCode
     *
     * @return products
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Get productCode
     *
     * @return int
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return products
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productLine
     *
     * @param string $productLine
     *
     * @return products
     */
    public function setProductLine($productLine)
    {
        $this->productLine = $productLine;

        return $this;
    }

    /**
     * Get productLine
     *
     * @return string
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * Set productVendor
     *
     * @param string $productVendor
     *
     * @return products
     */
    public function setProductVendor($productVendor)
    {
        $this->productVendor = $productVendor;

        return $this;
    }

    /**
     * Get productVendor
     *
     * @return string
     */
    public function getProductVendor()
    {
        return $this->productVendor;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     *
     * @return products
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set quantityInStock
     *
     * @param integer $quantityInStock
     *
     * @return products
     */
    public function setQuantityInStock($quantityInStock)
    {
        $this->quantityInStock = $quantityInStock;

        return $this;
    }

    /**
     * Get quantityInStock
     *
     * @return int
     */
    public function getQuantityInStock()
    {
        return $this->quantityInStock;
    }

    /**
     * Set buyPrice
     *
     * @param integer $buyPrice
     *
     * @return products
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;

        return $this;
    }

    /**
     * Get buyPrice
     *
     * @return int
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     *
     * @return products
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return int
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }
}
