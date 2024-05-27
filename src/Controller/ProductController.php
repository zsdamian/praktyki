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

        $product = $productModel->getProduct($productSlug);
        $comments = $commentsModel->getComments($product['id']);

        return $this->view('Product', ['product' => $product, 'comments' => $comments, 'productSlug' => $productSlug]);
    }
}
?>
