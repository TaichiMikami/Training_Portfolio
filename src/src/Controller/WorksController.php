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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $works = $this->paginate($this->Works);
        //worksをセットしているからviewで使える
        $this->set(compact('works'));
    }

    public function sample()
    {
        $name = "mikami";
        $this->set('name',$name);
    }

    /**
     * View method
     *
     * @param string|null $id Work id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $work = $this->Works->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('work'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $work = $this->Works->newEmptyEntity();
        if ($this->request->is('post')) {
            $work = $this->Works->patchEntity($work, $this->request->getData());
            if ($this->Works->save($work)) {
                $this->Flash->success(__('The work has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work could not be saved. Please, try again.'));
        }
        $this->set(compact('work'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Work id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $work = $this->Works->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $work = $this->Works->patchEntity($work, $this->request->getData());
            if ($this->Works->save($work)) {
                $this->Flash->success(__('The work has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work could not be saved. Please, try again.'));
        }
        $this->set(compact('work'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Work id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $work = $this->Works->get($id);
        if ($this->Works->delete($work)) {
            $this->Flash->success(__('The work has been deleted.'));
        } else {
            $this->Flash->error(__('The work could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
