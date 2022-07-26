<?php
namespace application\controllers;
use application\libs\application;

class BoardController extends Controller{
<<<<<<< HEAD
    public function areaList() {
        return $this->model->getCategoryList();
    }

    public function create() {
        $json = getJson();
        print_r($json);
        return [_RESULT => $this->model->boardInsert($json)];
    }
=======

>>>>>>> a7207435bf0ae46f1a0943d59e8094dd378f40e6
}