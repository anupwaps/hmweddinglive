<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Sitemap extends CI_Controller {


    /**

     * Index Page for this controller.

     *

     */

    public function index()

    {
        $this->load->database();
        $data['happy_story'] = $this->db->get("happy_story")->result();
        $data['language'] = $this->db->get("language")->result();
        $data['currency_settings'] = $this->db->get("currency_settings")->result();
        $data['plan'] = $this->db->get("plan")->result();
        $data['member'] = $this->db->get("member")->result();
        $this->load->view('sitemap', $data);
    }

}