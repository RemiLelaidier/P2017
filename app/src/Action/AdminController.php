<?php
/**
 * Created by PhpStorm.
 * User: leetspeakv2
 * Date: 06/04/17
 * Time: 08:49
 */

namespace App\Action;

use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

final class AdminController
{
    private $logger;
    private $view;

    public function __construct(Twig $view, LoggerInterface $logger){
        $this->view = $view;
        $this->logger = $logger;
    }

    /**
     * Page d'acceuil de la partie Admin
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function home(Request $request, Response $response, $args){
        $this->logger->info("Private home dispatched");
        $this->view->render($response, 'adm_home.twig');
        return $response;
    }

    /**
     * Affiche le formulaire permettant d'ajouter un contenu
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function contentForm(Request $request, Response $response, $args){
        return $response;
    }

    /**
     * Rajoute les infos du contenu dans la BDD
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function postContent(Request $request, Response $response, $args){
        return $response;
    }
}