<?php

class MY_Front_Controller extends CI_Controller {

    var $template = "template";
    var $page_title = "";
    var $foler = "home";
    function __construct() {
        parent::__construct();

    }

    function load_view($page, $data = array())
    {
        $data['page_name'] = $this->foler . "/" . $page;

        if (! isset($data['page_title']) || ! $data['page_title']) {
            $titleArr = explode("/", $page);
            $title = "";
            if (isset($titleArr[1])) {
                if ($titleArr[1] == 'form' && isset($data['action'])) {
                    $titleArr[1] = $data['action'];
                }
                $title = $titleArr[1];

                $title .= " " . $titleArr[0];
            } else {
                $title = $titleArr[0];
            }
            $data['page_title'] = $title;
        }

        $this->load->view($this->template, $data);
    }

   public function set_msg($msg = "", $type = "success") {
        if ($type == "success") {
            $this->session->set_flashdata('dispMessage', '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button"><i class="icon-remove"></i></button><strong><i class="icon-ok"></i> ' . translate_phrase($msg) . '</strong></div>');
        } else {
            $this->session->set_flashdata('dispMessage', '<div class="alert alert-error"><strong><i class="icon-remove"></i></strong><button data-dismiss="alert" class="close" type="button"><i class="fa fa-remove"></i></button>' . translate_phrase($msg) . '</div>');
        }
    }

}

?>