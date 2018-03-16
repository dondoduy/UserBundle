<?php

namespace Xtraball\UserBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function showAction(Request $request)
    {
        $characters = [
          'Daenerys Targaryen' => 'Emilia Clarke',
          'Jon Snow' => 'Kit Harington',
          'Arya Stark' => 'Maisie Williams',
          'Melisandre' => 'Carice van Houten',
          'Khal Drogo' => 'Jason Momoa',
          'Tyrion Lannister' => 'Peter Dinklage',
          'Ramsay Bolton' => 'Iwan Rheon',
          'Petyr Baelish' => 'Aidan Gillen',
          'Brienne of Tarth' => 'Gwendoline Christie',
          'Lord Varys' => 'Conleth Hill'
        ];

        return $this->render('@XtraballUserBundle/default/index.html.twig', [
            'character' => $characters
        ]);
    }
}
