<?php
namespace application\controllers;
use application\libs\application;

class BoardController extends Controller{
    public function create() {
        $json = getJson();
        print_r($json);
        return [_RESULT => $this->model->boardInsert($json)];
    }
}