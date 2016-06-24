<?php

namespace AppBundle\Controller\Api;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation as Doc;
use FOS\RestBundle\View\View AS FOSView;
use AppBundle\Entity\Document;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;

use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;

use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 *  @Route("/api/documents")
 */
class DocumentController extends FOSRestController
{

    /**
     * @Get("/", name="get_documents", options={ "method_prefix" = false })
     * @ApiDoc(
     *  section="Documents",
     *  description="get documents",
     *  requirements={{"name"="_format","dataType"="","requirement"="json","description"=""}},
     * )
     *
     */
    public function getDocumentsAction(Request $request)
    {

        $code=200;
        $em = $this->getDoctrine()->getManager();
        $view = FOSView::create();
        $moduleId = $request->query->get('module');

        if(isset($moduleId) && $moduleId != 'all')
            $documents = $em->getRepository('AppBundle:Document')->findBy(array( 'module' => $moduleId));
        else $documents = $em->getRepository('AppBundle:Document')->findAll();


        if ($documents):
            foreach($documents as $key => $value){
                if($value->getIsPublic()){
                    $result['data'][$key]['title'] = $value->getTitle();
                    $result['data'][$key]['cover'] = 'http://' . $request->getHost() . ':' .$request->getPort() . '/uploads/files/' .$value->getImage()->getFileName();
                    $result['data'][$key]['document'] = 'http://' . $request->getHost() . ':' .$request->getPort() . '/uploads/files/' .$value->getDocument()->getFileName();
                    $result['data'][$key]['description'] = $value->getDescription();
                    $result['data'][$key]['createdBy'] = $value->getCreatedBy()->getFullName();
                }
            }
            $result['success'] = true;
        else:
            $result['success'] = false;
            $result['errors'][] = 'Token invalide ou inéxistant';
            $code=401;
        endif;

        $view->setStatusCode($code)->setData($result);
        return $view;
    }
}