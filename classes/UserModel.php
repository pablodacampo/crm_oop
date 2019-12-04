<?php
require_once('CoreModel.php');
class UserModel extends CoreModel {
  public function readAll() {
    try {
      if(($req = $this->getDb()->query('SELECT
                          `U_ID` AS `id`,
                          `U_USERNAME` AS `username`,
                          `U_EMAIL` AS `email`,
                          `U_PASSWORD` AS `password`,
                          `U_TEL` AS `tel`,
                          `U_ROLE` AS `role`,
                          `U_SALARY` AS `salary`,
                          `U_LOGIN` AS `login`
                          FROM `users`
                          GROUP BY `U_LOGIN`'))!==false)  {
        $users = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        return $users;
      }

      return false;
    } catch(PDOException $e) {
      throw new Exception($e->getMessage(), 99, $e);
    }
  }
}