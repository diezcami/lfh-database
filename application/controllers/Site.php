<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    private $nav;
    public function __construct(){
        parent::__construct();

		$this->load->model('Facis_Model');
        $this->load->model('Classroom_Group_Model');
        $this->load->model('Kid_Group_Model');


        $this->load->helper('url');
        $this->load->helper('form');
        # New pages must be declared in this array to include them in the nav bar.
        # array('Page Name', 'url', 'view name*' )
        # *the view that will be loaded.
        # Don't forget to add the function for the page below!
        $this->nav = array( array('Facilitators', site_url('site/facilitators'), 'view_facis'),
                            array('Classroom Groups', site_url('site/classroom'), 'view_classrooms'),
                            array('Kids Groups', site_url('site/kids'), 'view_kids'),
                            array('Miscellaneous', site_url('site/miscellaneous'), 'view_misc')
            );
        $this->load->vars(array('NavigationArray'=>$this->nav));
        $this->load->library("pagination");
    }

    public function view($currentPage = 'view_home', $data = null){
        $this->load->view('templates/header', $data);
        $this->load->view($currentPage);
        $this->load->view('templates/footer');
    }

    public function index(){
        $this->view();
    }

    public function home(){
        $this->view();
    }

    public function facilitators(){
		$data['facis'] = $this->Facis_Model->get_facis();
        $this->view($this->nav[0][2], $data);
    }

    public function classroom(){
        $data['classroom_groups'] = $this->Classroom_Group_Model->get_classroom_groups();
        $this->view($this->nav[1][2], $data);
    }

    public function kids(){
        $data['kid_groups'] = $this->Kid_Group_Model->get_kid_groups();
        $this->view($this->nav[2][2], $data);
    }

	public function miscellaneous(){
        $this->view($this->nav[3][2]);
    }

}
