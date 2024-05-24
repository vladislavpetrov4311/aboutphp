<?php

require_once "connect.php";


class cart
{
    private PDO $obj;
    public function __construct()
    {
        $con = new connectPDO();
        $this->obj = $con->get_obj();
    }


    //метод для получения id продукта и суммы из корзины
    public function get_id_product(): array
    {
        $sql = $this->obj->prepare("SELECT * FROM test;");
        $sql->execute();

        $res = $sql->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

}


$main = new cart();

$res = $main->get_id_product();

print_r($res);

?>