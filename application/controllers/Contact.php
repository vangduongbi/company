<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: LB
 * Date: 1/16/2018
 * Time: 9:44 PM
 */
class Contact extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $data = [];
        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Tên', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('message', 'Tin nhắn', 'required');

            if ($this->form_validation->run()) {

                $subject = $this->input->post('subject');
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $content = $this->input->post('message');
                $to = 'caychoivang.vscn@gmail.com';
                //call send mail
                $this->load->library('gmailer', ['debug' => 0]);

                $rs = $this->gmailer->send_mail($email, $to, $subject, 'Họ và tên : ' . $name . $content);
//                var_dump($rs);

                $data['success'] = 'Gửi email thành công!';
            }
        }
        $this->render('site/contact', $data);
    }
}