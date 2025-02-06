<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('users/index', $data);
    }

    public function create() {
        $this->load->view('users/create');
    }

    public function store() {
        $data = [
            'name'  => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
        ];
        $this->User_model->insert_user($data);
        redirect('UserController/index');
    }

    public function edit($id) {
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id) {
        $data = [
            'name'  => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
        ];
        $this->User_model->update_user($id, $data);
        redirect('UserController/index');
    }

    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('UserController/index');
    }
}
