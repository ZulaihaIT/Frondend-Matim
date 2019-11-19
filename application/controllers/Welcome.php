<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
//        $data['sub'] = $this->crud->select('sub')->result();
//        $data['sub'] = $this->crud->select_join('sub', "join kategori on kategori.id_kategori=sub.id_kategori where sub.id_kategori='21' order by id_sub desc limit 9")->result();
        $data['sub']= $this->db->query("select * from sub join kategori "
        . "on sub.id_kategori = kategori.id_kategori  order by tgl_add desc limit 10")->result();
        $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('beranda', $data);
    }

    public function visi() {
        $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('visi', $data);
    }

    public function logo() {
        $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('logo', $data);
    }

    public function sejarah() {
        $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('sejarah', $data);
    }

    public function peta() {
        $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('peta', $data);
    }
    public function gallery() {
        $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('gallery', $data);
    }

    public function bupati_baru() {
        $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('bupati_baru', $data);
    }

    public function detail_berita($judul_seo) {
        $data['data'] = $this->crud->select_other('sub', "WHERE sub_seo= '$judul_seo'")->result();
         $data['kategori'] = $this->crud->select('kategori')->result();
        $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('detail_berita', $data);
    }

    public function sub() {
         $data['gambar'] = $this->crud->select('gambar')->result();
        $this->load->view('sub',$data);
    }

    function daftar_berita($idkategori) {
        $data['berita'] = $this->db->query("SELECT * FROM sub WHERE id_kategori IN ('$idkategori')")->result();
        $this->load->view('daftar_berita', $data);
    }

}
