<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Works Controller
 *
 * @property \App\Model\Table\WorksTable $Works
 * @method \App\Model\Entity\Work[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WorksController extends AppController
{
    public function initialize()
    {
        $this -> viewBuilder() -> layout(false);
    }
    
    public function index()
    {
        $works = $this->paginate($this->Works);
        //worksをセットしているからviewで使える
        $this->set(compact('works'));
    }
}
