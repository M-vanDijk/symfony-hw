<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TasksController extends AbstractController
{
    #[Route('/tasks', name: 'app_tasks')]
    public function index(): Response
    {
        return $this->render('tasks/index.html.twig', [
            'controller_name' => 'TasksController',
        ]);
    }

    #[Route('/addtask', name: 'app_add_task')]
    public function addTask(): Response
    {
        $tasks = new Tasks();

        $form = $this->createForm(TaskType::class, $tasks);


        return $this->renderForm('bezoeker/addtasks.html.twig', ['form' => $form]);
    }
}
