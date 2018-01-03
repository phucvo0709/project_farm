<?php
require_once("database.php");
include("thu_vien.php");
class M_detail_product extends database
{
    function product($id){
        $sql="select * from products WHERE id =?";
        $this->setQuery($sql);
        $param=array($id);
        return $this->loadRow($param);
    }
    public function related_product( $id)
    {
        $sql = "select * from products where id != ? limit 0,8";
        $this->SetQuery($sql);
        return $this->loadAllRows(array($id));
    }
    function contact(){
        $sql = "select * from contact";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function brands(){
        $sql = "select * from brands ORDER BY date DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function add_bill(){
        if(isset($_POST['btn_add'])){
            $full_name = $_POST['full_name'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];        
            $email = $_POST['email'];
            $product_id = $_POST['id_product'];
            $product_quantity = $_POST['product_quantity'];
            $product_price = $_POST['product_price'];
            $total_price = $product_price*$product_quantity;
            $sql = "INSERT INTO bills(`full_name`, `address`, `phone_number`, `email`, `product_id`, `product_quantity`, `total_price`, `date`) VALUES ('$full_name', '$address', '$phone_number', '$email', '$product_id', '$product_quantity', '$total_price', now())";
            $this->setQuery($sql);
            $this->execute();
            if($this)
            {	
                $_SESSION['phoneNumber'] = $phone_number;
                $_SESSION['orderSuccess']="You placed an order, please wait for us to check and call back to confirm the order"; 
            }
        }
    }
    function titles($id){
        $sql = "SELECT * from titles WHERE id=?";          
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}
?>
