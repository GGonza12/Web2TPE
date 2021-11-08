<?php

include './Model/ComentsController.php';
include './View/ApiView.php';

class ApiController {
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ComentModel();
        $this->view = new APIView();

    }



}