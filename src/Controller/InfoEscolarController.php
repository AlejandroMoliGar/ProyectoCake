<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * InfoEscolar Controller
 *
 * @property \App\Model\Table\InfoEscolarTable $InfoEscolar
 * @method \App\Model\Entity\InfoEscolar[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoEscolarController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $infoEscolar = $this->paginate($this->InfoEscolar);

        $this->set(compact('infoEscolar'));
    }

    /**
     * View method
     *
     * @param string|null $id Info Escolar id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $infoEscolar = $this->InfoEscolar->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('infoEscolar'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {$this->Authorization->skipAuthorization();
        $infoEscolar = $this->InfoEscolar->newEmptyEntity();
        if ($this->request->is('post')) {
            $infoEscolar = $this->InfoEscolar->patchEntity($infoEscolar, $this->request->getData());
            if ($this->InfoEscolar->save($infoEscolar)) {
                $this->Flash->success(__('The info escolar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info escolar could not be saved. Please, try again.'));
        }
        $this->set(compact('infoEscolar'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Info Escolar id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $infoEscolar = $this->InfoEscolar->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $infoEscolar = $this->InfoEscolar->patchEntity($infoEscolar, $this->request->getData());
            if ($this->InfoEscolar->save($infoEscolar)) {
                $this->Flash->success(__('The info escolar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info escolar could not be saved. Please, try again.'));
        }
        $this->set(compact('infoEscolar'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Info Escolar id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $infoEscolar = $this->InfoEscolar->get($id);
        if ($this->InfoEscolar->delete($infoEscolar)) {
            $this->Flash->success(__('The info escolar has been deleted.'));
        } else {
            $this->Flash->error(__('The info escolar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function initialize(): void
{
    parent::initialize();
    $this->InfoEscolar = TableRegistry::getTableLocator()->get('InfoEscolar');
}

}
