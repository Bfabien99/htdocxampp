<?php

class Task{

    public $tasks = [
        ["title" => "Faire la vaisselle", "completed" => false],
        ["title" => "Faire à manger", "completed" => false],
        ["title" => "Faire les courses", "completed" => true],
        ["title" => "Promener le chien", "completed" => false],
        ["title" => "Faire mes devoirs", "completed" => true],
        ["title" => "Regarder la TV", "completed" => true],
        ["title" => "Faire une vidéo", "completed" => true],
        ["title" => "Faire dodo", "completed" => false],
    ];

    public function completed(){
        $completed = [];
        foreach ($this->tasks as $key => $value) {
            if($value["completed"] == true){
                $completed[] = $value;
            }
        }
        return $completed;
    }

    public function notCompleted(){
        $notCompleted = [];
        foreach ($this->tasks as $key => $value) {
            if($value["completed"] == false){
                $notCompleted[] = $value;
            }
        }
        return $notCompleted;
    }

    public function addTask($title){
        $this->tasks[] = ["title" => $title, "completed" => false];
    }

    public function removeTask($title){
        foreach ($this->tasks as $key => $value) {
            if($value["title"] == $title){
                unset($this->tasks[$key]);
            }
        }
    }

}