<?php
  require_once __DIR__ . "/../Entity/Todolist.php";
  require_once __DIR__ . "/../Repository/TodolistRepository.php";
  require_once __DIR__ . "/../Service/TodolistService.php";
  require_once __DIR__ . "/../View/TodolistView.php";
  require_once __DIR__ . "/../Helper/InputHelper.php";

  use Entity\Todolist;
  use Repository\TodolistRepositoryImpl;
  use Service\TodolistServiceImpl;
  use View\TodolistView;

  function testViewShowTodolist(): void
  {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP Dasar");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistView->showTodolist();
  }

  function testViewAddTodolist(): void
  {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();
    $todolistView->addTodolist();
    $todolistService->showTodolist();
  }

  function testViewRemoveTodolist(): void
  {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
    $todolistView->removeTodolist();
    $todolistService->showTodolist();
  }

  testViewRemoveTodolist();
