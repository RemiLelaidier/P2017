<?php
namespace App\Action;

use Illuminate\Database\Query\Builder;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use App\Model\Article;
use App\Model\Theme;

final class HomeController
{
    private $view;
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger){
        $this->view = $view;
        $this->logger = $logger;
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
        $themes_json = html_entity_decode(json_encode(Theme::all()->toArray()));

        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'public_home.twig', array(
            'themes'  => $themes_json
        ));
        return $response;
    }
}
