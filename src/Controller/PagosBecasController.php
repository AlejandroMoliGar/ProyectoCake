<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * PagosBecas Controller
 *
 * @property \App\Model\Table\PagosBecasTable $PagosBecas
 * @method \App\Model\Entity\PagosBeca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PagosBecasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $pagosBecas = $this->paginate($this->PagosBecas);

        $this->set(compact('pagosBecas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pagos Beca id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $pagosBeca = $this->PagosBecas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pagosBeca'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $pagosBeca = $this->PagosBecas->newEmptyEntity();
        if ($this->request->is('post')) {
            $pagosBeca = $this->PagosBecas->patchEntity($pagosBeca, $this->request->getData());
            if ($this->PagosBecas->save($pagosBeca)) {
                $this->Flash->success(__('The pagos beca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagos beca could not be saved. Please, try again.'));
        }
        $this->set(compact('pagosBeca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pagos Beca id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $pagosBeca = $this->PagosBecas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagosBeca = $this->PagosBecas->patchEntity($pagosBeca, $this->request->getData());
            if ($this->PagosBecas->save($pagosBeca)) {
                $this->Flash->success(__('The pagos beca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagos beca could not be saved. Please, try again.'));
        }
        $this->set(compact('pagosBeca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagos Beca id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $pagosBeca = $this->PagosBecas->get($id);
        if ($this->PagosBecas->delete($pagosBeca)) {
            $this->Flash->success(__('The pagos beca has been deleted.'));
        } else {
            $this->Flash->error(__('The pagos beca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function initialize(): void
{
    parent::initialize();
    $this->PagosBecas = TableRegistry::getTableLocator()->get('PagosBecas');
}

}
