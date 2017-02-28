<?php
namespace App\Action;

use Illuminate\Database\Query\Builder;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Model\Article;

final class HomeController
{
    private $view;
    private $logger;
    private $table;

    public function __construct(Twig $view, LoggerInterface $logger, Builder $table)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->table = $table;
    }

    public function home(Request $request, Response $response, $args)
    {
        var_dump($this->table->get());

        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'public_home.twig', array(
            //'articles'  => $articles
        ));
        return $response;
    }
}
