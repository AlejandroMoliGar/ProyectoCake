<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carreras Controller
 *
 * @property \App\Model\Table\CarrerasTable $Carreras
 * @method \App\Model\Entity\Carrera[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarrerasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $carreras = $this->paginate($this->Carreras);

        $this->set(compact('carreras'));
    }

    /**
     * View method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $carrera = $this->Carreras->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('carrera'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $carrera = $this->Carreras->newEmptyEntity();
        if ($this->request->is('post')) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
        }
        $this->set(compact('carrera'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $carrera = $this->Carreras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrera = $this->Carreras->patchEntity($carrera, $this->request->getData());
            if ($this->Carreras->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
        }
        $this->set(compact('carrera'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $carrera = $this->Carreras->get($id);
        if ($this->Carreras->delete($carrera)) {
            $this->Flash->success(__('The carrera has been deleted.'));
        } else {
            $this->Flash->error(__('The carrera could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
