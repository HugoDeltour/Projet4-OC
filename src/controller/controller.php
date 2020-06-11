<?php

namespace App\src\controller;

use App\src\DAO\chapitreDAO;
use App\src\DAO\commentDAO;
use App\src\model\View;

abstract class Controller
{
    protected $chapitreDAO;
    protected $commentDAO;
    protected $view;

    public function __construct()
    {
        $this->chapitreDAO = new chapitreDAO();
        $this->commentDAO = new commentDAO();
        $this->view = new View();
    }
}

?>
