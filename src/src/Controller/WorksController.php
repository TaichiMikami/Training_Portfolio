<?php

declare(strict_types=1);

namespace App\Controller;

class WorksController extends AppController
{
    public function index()
    {
        $works = $this->Works->getList();
        //worksをセットしているからviewで使える
        $this->set(compact('works'));
    }
}
