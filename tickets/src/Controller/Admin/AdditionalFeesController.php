<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;

/**
 * AdditionalFees Controller
 *
 * @property \App\Model\Table\AdditionalFeesTable $AdditionalFees
 * @method \App\Model\Entity\AdditionalFee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdditionalFeesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events'],
        ];
        $additionalFees = $this->paginate($this->AdditionalFees);

        $this->set(compact('additionalFees'));
    }

    /**
     * View method
     *
     * @param string|null $id Additional Fee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $additionalFee = $this->AdditionalFees->get($id, [
            'contain' => ['Events'],
        ]);

        $this->set(compact('additionalFee'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $additionalFee = $this->AdditionalFees->newEmptyEntity();
        if ($this->request->is('post')) {
            $additionalFee = $this->AdditionalFees->patchEntity($additionalFee, $this->request->getData());
            if ($this->AdditionalFees->save($additionalFee)) {
                $this->Flash->success(__('The additional fee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The additional fee could not be saved. Please, try again.'));
        }
        $events = $this->AdditionalFees->Events->find('list', ['limit' => 200]);
        $this->set(compact('additionalFee', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Additional Fee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $additionalFee = $this->AdditionalFees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $additionalFee = $this->AdditionalFees->patchEntity($additionalFee, $this->request->getData());
            if ($this->AdditionalFees->save($additionalFee)) {
                $this->Flash->success(__('The additional fee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The additional fee could not be saved. Please, try again.'));
        }
        $events = $this->AdditionalFees->Events->find('list', ['limit' => 200]);
        $this->set(compact('additionalFee', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Additional Fee id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $additionalFee = $this->AdditionalFees->get($id);
        if ($this->AdditionalFees->delete($additionalFee)) {
            $this->Flash->success(__('The additional fee has been deleted.'));
        } else {
            $this->Flash->error(__('The additional fee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
