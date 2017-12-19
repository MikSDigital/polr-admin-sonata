<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PolrController extends Controller
{
    private $jaxon;
    private $polr;

    protected function jaxon()
    {
        $this->jaxon = $this->get('jaxon.ajax');
        $this->polr = $this->jaxon->package('polr.admin');
        $this->polr->config($this->get('kernel')->getProjectDir() . '/app/config/polradmin.yml');
    }

    /**
     * Show the Polr Admin page.
     *
     * @return void
     */
    public function indexAction()
    {
        $this->jaxon();
        $this->jaxon->register();
        return $this->render('polr.html.twig', [
            'jaxon' => $this->jaxon,
            'polr' => $this->polr,
            'pageTitle' => "Polr Admin Dashboard",
        ]);
    }

    /**
     * Process a Jaxon request.
     *
     * @return void
     */
    public function jaxonAction()
    {
        $this->jaxon();
        // Process the Jaxon request
        if($this->jaxon->canProcessRequest())
        {
            $this->jaxon->processRequest();
        }
    }
}

