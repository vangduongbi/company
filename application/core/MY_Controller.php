<?php
/**
 * Created by PhpStorm.
 * User: ly_bi
 * Date: 12/29/2017
 * Time: 1:13 PM
 */
Class MY_Controller extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
       
        date_default_timezone_set('Asia/Ho_Chi_Minh');

    }

    function render($view, $data)
    {
//
//        $this->load->model('category_model', 'cate');
//        $this->load->model('department_model', 'dep');
//
//        $data['dep'] = $this->dep->get_department();
//        $data['cat'] = $this->cate->get_category();
//
//        $this->load->library('cart');
//        $carts['carts'] = $this->cart->contents();
//        $carts['total_items'] = $this->cart->total_items();
//        if ($this->session->user) {
//            $id_user = $this->session->user;
//            $this->load->model('user_model');
//            $user_data = $this->user_model->get_user(['id' => $id_user]);
//            $data['user'] = $user_data;
//        }
        $segment = $this->uri->segment(1);
        $rs['segment'] = $segment;
        $this->load->view('site/header', $rs);
        $this->load->view($view, $data);
        $this->load->view('site/footer');
    }

}