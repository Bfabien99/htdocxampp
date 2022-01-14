<?php
    $initController = new immovableController;
    $getValue = $initController->unset((int)$params['id']);
    header('location:/view/admin/');
?>