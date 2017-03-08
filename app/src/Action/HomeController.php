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
    private $articles;
    private $themes;

    public function __construct(Twig $view, LoggerInterface $logger, Builder $articles, Builder $themes)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->articles = $articles;
        $this->themes = $themes;
    }

    /**
     * Page d'acceuil
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function home(Request $request, Response $response, $args)
    {
        $themes_json = json_encode($this->themes->get());

        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'public_home.twig', array(
            'themes'  => $themes_json
        ));
        return $response;
    }
}
