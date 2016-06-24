<?php

namespace AppBundle\Controller;

use AppBundle\Entity\LogDocument;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Document;
use AppBundle\Form\DocumentType;

/**
 * Document controller.
 *
 * @Route("/admin/document")
 */
class DocumentController extends Controller
{
    /**
     * Lists all Document entities.
     *
     * @Route("/", name="admin_document_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        if($this->getUser()->getRole() == 'ROLE_ADMIN')
          $documents = $em->getRepository('AppBundle:Document')->findAll();
        else  $documents = $em->getRepository('AppBundle:Document')->findBy(array('createdBy' => $this->getUser()->getId() ));

        return $this->render('document/index.html.twig', array(
            'documents' => $documents,
        ));
    }


    /**
     * Lists all Document entities.
     *
     * @Route("/log", name="admin_document_logs")
     * @Method("GET")
     */
    public function journalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $documents = $em->getRepository('AppBundle:Document')->findAll();

        return $this->render('document/journal.html.twig', array(
            'documents' => $documents,
        ));
    }

    /**
     * Creates a new Document entity.
     *
     * @Route("/new", name="admin_document_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $document = new Document();
        $form = $this->createForm('AppBundle\Form\DocumentType', $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $document->setCreatedBy($this->getUser());
            $logDocument = new LogDocument($document,$this->getUser(),"created");
            $em->persist($document);
            $em->persist($logDocument);
            $em->flush();

            return $this->redirectToRoute('admin_document_index');
        }

        return $this->render('document/new.html.twig', array(
            'document' => $document,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Document entity.
     *
     * @Route("/{id}", name="admin_document_show")
     * @Method("GET")
     */
    public function showAction(Document $document)
    {
        $deleteForm = $this->createDeleteForm($document);

        return $this->render('document/show.html.twig', array(
            'document' => $document,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Document entity.
     *
     * @Route("/{id}/edit", name="admin_document_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Document $document)
    {
        $deleteForm = $this->createDeleteForm($document);
        $editForm = $this->createForm('AppBundle\Form\DocumentType', $document);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $logDocument = new LogDocument($document,$this->getUser(),"edit");
            $em->persist($document);
            $em->persist($logDocument);
            $em->flush();

            return $this->redirectToRoute('admin_document_edit', array('id' => $document->getId()));
        }

        return $this->render('document/edit.html.twig', array(
            'document' => $document,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Document entity.
     *
     * @Route("/delete/{id}", name="admin_document_delete")
     *
     */
    public function deleteAction(Request $request, Document $document)
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($document);
            $em->flush();


        return $this->redirectToRoute('admin_document_index');
    }

    /**
     * Creates a form to delete a Document entity.
     *
     * @param Document $document The Document entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Document $document)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_document_delete', array('id' => $document->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }



    /**
     * Finds and displays a User entity.
     *
     * @Route("/ispublic/{id}", name="is_public")
     *
     */
    public function enabledAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $enabled = $entity->getIsPublic();

        if($enabled == true){
            $entity->setIsPublic(false);
            $logDocument = new LogDocument($entity,$this->getUser(),"deactivation");
        }

        else if ($enabled == false){
            $entity->setIsPublic(true);
            $logDocument = new LogDocument($entity,$this->getUser(),"activation");
        }

        $em->persist($entity);
        $em->persist($logDocument);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_document_index' ));
    }


    /**
     * Lists all Confidentiality entities.
     *
     * @Route("/log/{id}", name="log_document")
     * @Method("GET")
     */
    public function logDocumentAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $document = $em->getRepository('AppBundle:Document')->find($id);
        $logs = $document->getLogs();

        return $this->render('document/log.html.twig', array(
            'logs' => $logs,
            'document' => $document
        ));
    }
}
