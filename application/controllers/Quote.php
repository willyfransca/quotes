<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quote extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url', 'html');
    }
    public function index()
    {
        $data['data1'] = $this->readfile();
        $this->load->view('quote.php', $data);
    }

    public function readfile()
    {

        $file = file_get_contents("/file/quote.txt", true);

        if ($file) {
            $remove = "\n";
            $array[] = null;
            $tab = "\t";

            $pemisah = explode($remove, $file);
            foreach ($pemisah as $string) {
                $baris = explode($tab, $string);
                array_push($array, $baris);
            }
        }
        return $array;
    }
}
