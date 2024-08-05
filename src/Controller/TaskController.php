<?php

namespace App\Controller;

use App\Entity\Task;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TaskController extends AbstractController
{
    #[Route('/', name: 'tasks_list')]
    public function index(): Response
    {
        $tasks = [
            new Task("Faire le ménage", new DateTime('2024-08-24')),
            new Task("Ranger sa chambre", new DateTime('2024-10-01')),
            new Task("Nourrir le chat", new DateTime('2024-09-01'))
        ];

        return $this->render('task/index.html.twig', [
            'tasks' => $tasks,
        ]);
    }
}