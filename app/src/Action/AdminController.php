<?php

namespace App\Action;

use App\Model\Article;
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

    // Content
    /**
     * List les contenus editables
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function listContent(Request $request, Response $response, $args){
        $this->logger->info("Private listContent dispatched");

        $listContent = Article::all();

        $this->view->render($response, 'adm_listContent.twig', array(
            'articles' => $listContent
        ));
        return $response;
    }

    /**
     * Affiche le formulaire permettant d'ajouter un contenu
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function contentAddForm(Request $request, Response $response, $args){
        $this->logger->info("Private formContent dispatched");
        $this->view->render($response, 'adm_contentForm.twig');
        return $response;
    }

    /**
     * Rajoute les infos du formulaire dans la BDD
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function postContent(Request $request, Response $response, $args){
        return $response;
    }

    // Themes TODO
}