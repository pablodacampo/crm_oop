<?php
class User {
  private $_id;
  private $_username;
  private $_email;
  private $_password;
  private $_tel;
  private $_role;
  private $_salary;
  private $_login;

  public function __construct(array $data) {
    $this->hydrate($data);
  }

  private function setId(int $id) {
    $this->_id = $id;
  }

  private function setUsername(string $username) {
    $this->_username = $username;
  }

  private function setEmail(string $email) {
    $this->_email = $email;
  }

  private function setPassword(string $password) {
    $this->_password = $password;
  }

  private function setTel(string $tel) {
    $this->_tel = $tel;
  }

  private function setRole(string $role) {
    $this->_role = $role;
  }

  private function setSalary(string $salary) {
    $this->_salary = $salary;
  }

  private function setlogin(string $login) {
    $this->_login = $login;
  }

  public function getId(): string {
    return $this->_id;
  }

  public function getUsername(): string {
    return $this->_username;
  }

  public function getEmail(): string {
    return $this->_email;
  }

  public function getPassword(): string {
    return $this->_password;
  }

  public function getTel(): string {
    return $this->_tel;
  }

  public function getRole(): string {
    return $this->_role;
  }

  public function getSalary(): string {
    return $this->_salary;
  }

  public function getLogin(): string {
    return $this->_login;
  }

  private function hydrate(array $data) {
    foreach($data as $prop=>$value) {
      $setter = 'set' . ucfirst($prop);
      if(method_exists($this, $setter)) {
        $this->$setter($value);
      }
    }
  }

  public function showTable() {
    echo '
        <tr>
          <td>' . $this->getUsername() . '</td>
          <td>' . $this->getEmail() . '</td>
          <td>' . $this->getLogin() . '</td>
          <td><a href="viewUsers.php?conv=' . $this->getId() . '" title="">Voir les messages</a></td>
        </tr>';
  }
  
}