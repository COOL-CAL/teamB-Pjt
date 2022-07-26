<?php
namespace application\controllers;
use application\libs\application;

class BoardController extends Controller{
    // 리스트
    public function boardList() {
        return $this->model->boardList();
    }

}