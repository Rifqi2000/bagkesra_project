<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Rest_Admin extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RestAdminModel');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $artikel = $this->RestAdminModel->getArtikel();
        } else {
            $artikel = $this->RestAdminModel->getArtikel($id);
        }

        if ($artikel) {
            $this->response([
                'status' => true,
                'data' => $artikel
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $data = array(
            'judul_artikel' => $this->post('judul_artikel'),
            'isi_artikel' => $this->post('isi_artikel'),
            'foto_artikel' => $this->post('foto_artikel'),
            'tanggal_artikel' => $this->post('tanggal_artikel')
        );

        if ($this->RestAdminModel->create_artikel($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'SUCCESS'
            ], RestController::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Failed to Create nNew Data'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }



    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => false,
                'data' => 'check your id'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            if ($this->RestAdminModel->delete_artikel($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'SUCCESS'
                ], RestController::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], RestController::HTTP_BAD_REQUEST);
            }
        }
    }
}
