<?php

namespace App\Controller;

use App\Core\Request;

class ProductController extends BaseController
{
    public function index(Request $request): string
    {
        $productSlug = $request->getArgument('product');
        $productModel = $this->container->get('ProductModel');

        $commentsModel = $this->container->get('CommentsModel');

        $comments = $commentsModel->getComments();
        $product = $productModel->getProduct($productSlug);
        

        return $this->view('Product', ['product' => $product, 'productSlug' => $productSlug, 'comments' => $comments]);
    }
}
?>