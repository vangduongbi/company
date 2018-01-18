<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: LB
 * Date: 1/16/2018
 * Time: 9:39 PM
 */

class News extends MY_Controller
{
    public function index()
    {
        $data = [];
        $this->render('site/new', $data);
    }
}