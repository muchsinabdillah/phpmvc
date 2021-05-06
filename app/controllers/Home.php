<?php
class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header',$data);
        $this->View('home/index');
        $this->view('templates/footer');
    }
}