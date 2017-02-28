<?php
namespace App\Action;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Model\Article;

final class HomeController
{
    private $view;
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function home(Request $request, Response $response, $args)
    {
        //$articles = Article::all();

        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'public_home.twig', array(
            //'articles'  => $articles
        ));
        return $response;
    }
}
