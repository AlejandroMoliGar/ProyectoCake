<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * InfoBecas Controller
 *
 * @property \App\Model\Table\InfoBecasTable $InfoBecas
 * @method \App\Model\Entity\InfoBeca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoBecasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $infoBecas = $this->paginate($this->InfoBecas);

        $this->set(compact('infoBecas'));
    }

    /**
     * View method
     *
     * @param string|null $id Info Beca id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $infoBeca = $this->InfoBecas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('infoBeca'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $infoBeca = $this->InfoBecas->newEmptyEntity();
        if ($this->request->is('post')) {
            $infoBeca = $this->InfoBecas->patchEntity($infoBeca, $this->request->getData());
            if ($this->InfoBecas->save($infoBeca)) {
                $this->Flash->success(__('The info beca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info beca could not be saved. Please, try again.'));
        }
        $this->set(compact('infoBeca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Info Beca id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $infoBeca = $this->InfoBecas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $infoBeca = $this->InfoBecas->patchEntity($infoBeca, $this->request->getData());
            if ($this->InfoBecas->save($infoBeca)) {
                $this->Flash->success(__('The info beca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info beca could not be saved. Please, try again.'));
        }
        $this->set(compact('infoBeca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Info Beca id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $infoBeca = $this->InfoBecas->get($id);
        if ($this->InfoBecas->delete($infoBeca)) {
            $this->Flash->success(__('The info beca has been deleted.'));
        } else {
            $this->Flash->error(__('The info beca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function initialize(): void
{
    parent::initialize();
    $this->InfoBecas = TableRegistry::getTableLocator()->get('InfoBecas');
}

}
