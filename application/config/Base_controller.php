<?php
abstract class BaseController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        echo "base";
    }
}
