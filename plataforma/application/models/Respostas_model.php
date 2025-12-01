<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respostas_model extends CI_Model {

        public function __construct() {
                parent::__construct();
                $this->load->database();
        }

        public function registrar($lang, $pontuacao, array $respostas = array()) {
                $dados = array(
                        'lang' => $lang,
                        'pontuacao' => $pontuacao,
                        'respostas' => json_encode($respostas, JSON_UNESCAPED_UNICODE),
                        'created_at' => date('Y-m-d H:i:s'),
                );

                return $this->db->insert('respostas_irankin', $dados);
        }

        public function listarTodas()
        {
                return $this->db
                        ->order_by('created_at', 'DESC')
                        ->get('respostas_irankin')
                        ->result_array();
        }
}
