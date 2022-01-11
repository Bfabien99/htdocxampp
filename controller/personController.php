<?php
    require 'model/personModel.php';
    class personController extends personModel{
    
        public function personShow($lm)
        {
            $personModel = new personModel();
            $personCall = $personModel->getPerson($lm);
            return $personCall;
        }

        public function personShowAll()
        {
            $personModel = new personModel();
            $personCall = $personModel->getAllPersons();
            return $personCall;
        }

        public function personSave($nom, $pseudo)
        {
            $personModel = new personModel();
            $personCall = $personModel->setPerson($nom, $pseudo);
            return $personCall;
        }

        public function personDelete($id)
        {
            $personModel = new personModel();
            $personCall = $personModel->unsetPerson($id);
            return $personCall;
        }

        public function cibleId($id)
        {
            $personModel = new personModel();
            $personCall = $personModel->ciblePerson($id);
            return $personCall;
        }

        public function personUpdate($id,$nom,$pseudo)
        {
            $personModel = new personModel();
            $personCall = $personModel->updatePerson($id,$nom,$pseudo);
            return $personCall;
        }
    }