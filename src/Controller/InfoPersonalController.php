<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * InfoPersonal Controller
 *
 * @property \App\Model\Table\InfoPersonalTable $InfoPersonal
 * @method \App\Model\Entity\InfoPersonal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoPersonalController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $infoPersonal = $this->paginate($this->InfoPersonal);

        $this->set(compact('infoPersonal'));
    }

    /**
     * View method
     *
     * @param string|null $id Info Personal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $infoPersonal = $this->InfoPersonal->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('infoPersonal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $infoPersonal = $this->InfoPersonal->newEmptyEntity();
        if ($this->request->is('post')) {
            $infoPersonal = $this->InfoPersonal->patchEntity($infoPersonal, $this->request->getData());
            if ($this->InfoPersonal->save($infoPersonal)) {
                $this->Flash->success(__('The info personal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info personal could not be saved. Please, try again.'));
        }
        $this->set(compact('infoPersonal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Info Personal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $infoPersonal = $this->InfoPersonal->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $infoPersonal = $this->InfoPersonal->patchEntity($infoPersonal, $this->request->getData());
            if ($this->InfoPersonal->save($infoPersonal)) {
                $this->Flash->success(__('The info personal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info personal could not be saved. Please, try again.'));
        }
        $this->set(compact('infoPersonal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Info Personal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $infoPersonal = $this->InfoPersonal->get($id);
        if ($this->InfoPersonal->delete($infoPersonal)) {
            $this->Flash->success(__('The info personal has been deleted.'));
        } else {
            $this->Flash->error(__('The info personal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function initialize(): void
{
    parent::initialize();
    $this->InfoPersonal = TableRegistry::getTableLocator()->get('InfoPersonal');
}

}
