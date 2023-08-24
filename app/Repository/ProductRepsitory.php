<?php 
namespace App\Repository;
use App\Models\Product;

class ProductRepsitory implements IProductRepository{
    public function getAllProducts()
    {
        return Product::all();
    }
}