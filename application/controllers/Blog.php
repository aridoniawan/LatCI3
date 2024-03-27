<?php

class Blog extends CI_Controller{


    Public function __Construct(){
        parent::__Construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }

    Public function index(){
        $query = $this->Blog_model->getBlogs('blog');
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    Public function detail($url){

        $query = $this->Blog_model->getSingleBlogs('url',$url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function add(){

        if($this->input->post()){
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');

            $id = $this->Blog_model->insertBlog($data);

            if($id){
                echo "Data Berhasil Disimpan";
            }else{
                echo"Data gagal Disimpan";
            }
        }

        $this->load->view('form_add');
    }

    public function edit($id){

        $query = $this->Blog_model->getSingleBlogs('id', $id);
        $data['blog'] = $query->row_array();

        if($this->input->post()){
            $post['title'] = $this->input->post('title');
            $post['content'] = $this->input->post('content');
            $post['url'] = $this->input->post('url');

            $id = $this->Blog_model->updateBlog($id, $post);

            if($id){
                echo "Data Berhasil Disimpan";
            }else{
                echo"Data gagal Disimpan";
            }
        }

        $this->load->view('form_edit', $data);
        // redirect('/');
    }

    public function delete($id){
        $this->Blog_model->deleteBlog($id);
        redirect('/');
    }
}