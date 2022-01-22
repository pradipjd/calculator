<?php

namespace App\Controller;

use App\Entity\Calculator;
use App\Form\CalculationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends AbstractController
{
    #[Route('/calculator', name: 'calculator')]
    public function index(Request $request): Response
    {
        $calculator = new Calculator();
        $form = $this->createForm(CalculationType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculator = $form->getData();

            $result = $calculator->performCalculation();

            return $this->render('calculator/index.html.twig', array(
                'form' => $form->createView(),
                'result' => $result
                )
            );
        }

        return $this->render('calculator/index.html.twig', array('form' => $form->createView()));
    }
}
