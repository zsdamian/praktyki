<?php

namespace App\Controller;

use App\Core\Request;

class CommentsController extends BaseController
{
    public function index(Request $request): string
    {
        $commentsModel = $this->container->get('CommentsModel');
        $comments = $commentsModel->getComments();
        return $this->view('Comments', ['comments' => $comments]);
    }

    public function loadMore(Request $request): string
    {
        $offset = isset($_GET['offset']) ? $_GET['offset'] : 0;

        $commentsModel = $this->container->get('CommentsModel');
        $comments = $commentsModel->getNextComments($offset);
        return json_encode($comments);
    }
}