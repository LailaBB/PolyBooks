<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="index_admin_page")
     */
    public function indexAction(Request $request)
    {
        return $this->render('admin/index.html.twig', array(
            'name' => 'salem !!'
        ));
    }
}
