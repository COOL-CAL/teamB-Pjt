<?php
namespace application\models;
use PDO;

class BoardModel extends Model {
    public function boardInsert(&$param) {
        $sql = "INSERT INTO t_board
                SET iuser = :iuser
                  , title = :title
                  , ctnt = :ctnt
                  , area = :area
                  , main_img = :main_img
                  , s_date = :s_date
                  , e_date = :e_date";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":iuser", $param["iuser"]);
        $stmt->bindValue(":title", $param["title"]);
        $stmt->bindValue(":ctnt", $param["ctnt"]);
        $stmt->bindValue(":area", $param["area"]);
        $stmt->bindValue(":main_img", $param["main_img"]);
        $stmt->bindValue(":s_date", $param["s_date"]);
        $stmt->bindValue(":e_date", $param["e_date"]);
        $stmt->execute();
        return intval($this->pdo->lastInsertId());
    }
}