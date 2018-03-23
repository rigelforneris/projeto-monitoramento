<?php
class Core extends CI_Controller {

        public function paginas($page = 'home')
{        
        if ( ! file_exists(APPPATH.'views/dashboard/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->helper("url");
        $this->load->view('templates/header', $data);        
        $this->load->view('dashboard/frame', $data);
        $this->load->view('dashboard/home', $data);        
        $this->load->view('templates/footer', $data);
}

}
