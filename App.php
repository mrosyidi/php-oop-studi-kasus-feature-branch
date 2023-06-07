<?php
  require_once __DIR__ . "/Entity/Todolist.php";
  require_once __DIR__ . "/Repository/TodolistRepository.php";
  require_once __DIR__ . "/Service/TodolistService.php";
  require_once __DIR__ . "/Helper/InputHelper.php";

  use Entity\Todolist;
  use Repository\TodolistRepositoryImpl;
  use Service\TodolistServiceImpl;
  use Helper\InputHelper;

  echo "Aplikasi Todolist" . PHP_EOL;
