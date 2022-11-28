<?php
declare(strict_types=1);

namespace App\Controller;

class WorksController extends AppController
{
    // ===== ホームページ =====
    public function home()
    {
        $works = $this->Works->getList();

        $this->set(compact('works'));
    }

    // ===== 管理画面（一覧） =====

    public function management()
    {
        $works = $this->paginate($this->Works);

        $this->set(compact('works'));
    }

    // ===== 管理画面（追加） =====

    public function add()
    {
        $work = $this->Works->newEmptyEntity();
        if ($this->request->is('post')) {
            $work = $this->Works->patchEntity($work, $this->request->getData());
            if ($this->Works->save($work)) {
                $this->Flash->success(__('The work has been saved.'));

                return $this->redirect(['action' => 'management']);
            }
            $this->Flash->error(__('The work could not be saved. Please, try again.'));
        }
        $this->set(compact('work'));
    }

    // ===== 管理画面（編集） =====

    public function edit($id = null)
    {
        $work = $this->Works->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $work = $this->Works->patchEntity($work, $this->request->getData());
            if ($this->Works->save($work)) {
                $this->Flash->success(__('The work has been saved.'));

                return $this->redirect(['action' => 'management']);
            }
            $this->Flash->error(__('The work could not be saved. Please, try again.'));
        }
        $this->set(compact('work'));
    }

    // ===== 管理画面（削除） =====

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $work = $this->Works->get($id);
        if ($this->Works->delete($work)) {
            $this->Flash->success(__('The work has been deleted.'));
        } else {
            $this->Flash->error(__('The work could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'management']);
    }
}
