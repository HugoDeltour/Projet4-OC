<?php

namespace App\src\controller;

use App\config\request;
use App\src\DAO\chapitreDAO;
use App\src\DAO\commentDAO;
use App\src\model\View;
use App\src\contrainte\validation;

abstract class Controller
{
    protected $chapitreDAO;
    protected $commentDAO;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;
    protected $validation;

    public function __construct()
    {
        $this->chapitreDAO = new chapitreDAO();
        $this->commentDAO = new commentDAO();
        $this->view = new view();
        $this->request = new request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
        $this->validation = new validation();
    }
}

?>
