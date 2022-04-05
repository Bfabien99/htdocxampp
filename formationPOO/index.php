<?php

require "Person.php";
require "Task.php";

$task = new Task();
$completed = $task->completed();
$notcompleted = $task->notCompleted();

// echo "Liste des tâches".PHP_EOL;
// echo "".PHP_EOL;
// foreach ($task->tasks as $key => $value) {
//     echo $value['title'] . PHP_EOL;
// }
// echo "\n";

// echo "Liste des tâches non terminées".PHP_EOL;
// echo "".PHP_EOL;
// foreach ($notcompleted as $key => $value) {
//     echo $value['title'] . PHP_EOL;
// }
// echo "\n";

// echo "Liste des tâches terminées".PHP_EOL;
// echo "".PHP_EOL;
// foreach ($completed as $key => $value) {
//     echo $value['title'] . PHP_EOL;
// }
// echo "\n";

$penuel = new Person();
$penuel->setName("Penuel");
echo $penuel->setAge(21);
echo "".PHP_EOL;