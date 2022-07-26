<?php
namespace application\models;
use PDO;

class BoardModel extends Model {
    // 리스트 
    public function boardList() {
        $sql="SELECT * 
        FROM t_board A
        INNER JOIN t_user B
        ON A.iuser = B.iuser";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}