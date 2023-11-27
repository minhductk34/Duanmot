<?php 

class Bill_Details {
    private $id_bill;
    private $id_product;
    private $name_product;
    private $bill_detail_quantity;
    private $bill_detail_price;
    private $number_phone;
    private $address;
    private $email;
    private $full_name;
    private $type_payment;
    private $create_at;


    public function __construct($id_bill, $id_product, $name_product, $bill_detail_quantity, $bill_detail_price,
                                $number_phone, $address, $email, $full_name, $type_payment, $create_at) {
        $this->id_bill = $id_bill;
        $this->id_product = $id_product;
        $this->name_product = $name_product;
        $this->bill_detail_quantity = $bill_detail_quantity;
        $this->bill_detail_price = $bill_detail_price;
        $this->number_phone = $number_phone;
        $this->address = $address;
        $this->email = $email;
        $this->full_name = $full_name;
        $this->type_payment = $type_payment;
        $this->create_at = $create_at;

    }

    // Getter methods
    public function get_id_bill() {
        return $this->id_bill;
    }

    public function get_id_product() {
        return $this->id_product;
    }

    public function get_name_product() {
        return $this->name_product;
    }

    public function get_bill_detail_quantity() {
        return $this->bill_detail_quantity;
    }

    public function get_bill_detail_price() {
        return $this->bill_detail_price;
    }

    public function get_number_phone() {
        return $this->number_phone;
    }

    public function get_address() {
        return $this->address;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_full_name() {
        return $this->full_name;
    }

    public function get_type_payment() {
        return $this->type_payment;
    }

    public function get_create_at() {
        return $this->create_at;
    }


}

?>