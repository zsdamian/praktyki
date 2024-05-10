<?php
namespace App\Controller;

use App\Core\Container;
use App\Core\Request;

class OpinionsController extends BaseController
{
    public function index(Request $request): string
    {
        $comments = $this->container->getService('database')->getComments();

        $nick = $request->getQueryParam('nick');
        $comment = $request->getQueryParam('comment');
        if (!empty($nick) && !empty($comment)) {
            $databaseService = $this->container->getService('database');
            $putcomments = $databaseService->putComments($nick, $comment);
            echo '<script>window.location.href = "/opinie";</script>';
        }

        return $this->view('Comments', ['Comments' => $comments]);
        
    }

}