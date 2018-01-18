<?php
/**
 * Created by PhpStorm.
 * User: LB
 * Date: 1/16/2018
 * Time: 9:34 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MY_Controller
{

    public function index()
    {
        $data = [];
        $this->render('site/service', $data);
    }

    public function detail()
    {
        $data = [];
        $id = $this->uri->segment(3);
        $this->render($id, $data);
    }
}