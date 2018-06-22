<?php
Class Seo extends Frontend_Controller {

    function sitemap()
    {

        $data['menu'] = $this->seo_model->get();
        $data['services'] = $this->services_model->get();
        $data['news']  = $this->news_model->get_by(array('catnews_id' => 1));
        $data['event'] = $this->news_model->get_by(array('catnews_id' => 2));

        header("Content-Type: text/xml;charset=iso-8859-1");
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view("sitemap",$data);
    }
}
