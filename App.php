<?php
  require_once __DIR__ . "/Entity/Todolist.php";
  require_once __DIR__ . "/Repository/TodolistRepository.php";
  require_once __DIR__ . "/Service/TodolistService.php";

  use Entity\Todolist;
  use Repository\TodolistRepositoryImpl;
  use Service\TodolistServiceImpl;

  echo "Aplikasi Todolist" . PHP_EOL;
