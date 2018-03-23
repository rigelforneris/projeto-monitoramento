<?php
class Dashboard extends CI_Controller {        

public function index($page = 'home')
{    
        if ( ! file_exists(APPPATH.'views/dashboard/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->helper("url");
        $this->load->model("hosts_model");
        $hosts = $this->hosts_model->buscaHosts();
        $this->load->view('templates/header', $data);        
        $this->load->view('dashboard/frame', $data);
        $this->load->view('dashboard/dash', array('hosts'=>$hosts));   
        $this->load->view('templates/footer', $data);
}

}