<?php
class Admin_Parent extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function test() {
        var_dump("from Admin_Parent");
    }
}
