<?php

try {
  $conn = new \PDO("mysql:host=localhost;dbname=test_00","root","123mudar");

  $query = "select * from products";
  // $query = "insert into products (name,descri) values('JS','JS in SON')";
  $stmt = $conn->query($query);
  // $list = $stmt->fetchAll(PDO::FETCH_OBJ);
  $list = $stmt->fetch(PDO::FETCH_OBJ);
  echo $list->descri;
  // print_r($list);

} catch (\PDOException $e) {
  echo "Erro! Message: ".$e->getMessage()." Code: ".$e->getCode();
}
