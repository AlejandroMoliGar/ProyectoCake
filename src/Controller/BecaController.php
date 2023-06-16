<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Beca Controller
 *
 * @property \App\Model\Table\BecaTable $Beca
 * @method \App\Model\Entity\Beca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BecaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $beca = $this->paginate($this->Beca);

        $this->set(compact('beca'));
    }

    /**
     * View method
     *
     * @param string|null $id Beca id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $beca = $this->Beca->get($id, [
            'contain' => ['Pagos'],
        ]);

        $this->set(compact('beca'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $beca = $this->Beca->newEmptyEntity();
        if ($this->request->is('post')) {
            $beca = $this->Beca->patchEntity($beca, $this->request->getData());
            if ($this->Beca->save($beca)) {
                $this->Flash->success(__('The beca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The beca could not be saved. Please, try again.'));
        }
        $pagos = $this->Beca->Pagos->find('list', ['limit' => 200])->all();
        $this->set(compact('beca', 'pagos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Beca id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $beca = $this->Beca->get($id, [
            'contain' => ['Pagos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $beca = $this->Beca->patchEntity($beca, $this->request->getData());
            if ($this->Beca->save($beca)) {
                $this->Flash->success(__('The beca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The beca could not be saved. Please, try again.'));
        }
        $pagos = $this->Beca->Pagos->find('list', ['limit' => 200])->all();
        $this->set(compact('beca', 'pagos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Beca id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $beca = $this->Beca->get($id);
        if ($this->Beca->delete($beca)) {
            $this->Flash->success(__('The beca has been deleted.'));
        } else {
            $this->Flash->error(__('The beca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function initialize(): void
    {
        parent::initialize();
        $this->beca = TableRegistry::getTableLocator()->get('beca');
    }

}
