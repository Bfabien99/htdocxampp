<?php
    $initController = new personController();
    $reqs = $initController->personDelete((int)$params['id']);
    header('location:/');