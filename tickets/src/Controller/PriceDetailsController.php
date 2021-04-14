<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PriceDetails Controller
 *
 * @property \App\Model\Table\PriceDetailsTable $PriceDetails
 * @method \App\Model\Entity\PriceDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PriceDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'TicketTypes'],
        ];
        $priceDetails = $this->paginate($this->PriceDetails);

        $this->set(compact('priceDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Price Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $priceDetail = $this->PriceDetails->get($id, [
            'contain' => ['Events', 'TicketTypes', 'ReservationDetails'],
        ]);

        $this->set(compact('priceDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $priceDetail = $this->PriceDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $priceDetail = $this->PriceDetails->patchEntity($priceDetail, $this->request->getData());
            if ($this->PriceDetails->save($priceDetail)) {
                $this->Flash->success(__('The price detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The price detail could not be saved. Please, try again.'));
        }
        $events = $this->PriceDetails->Events->find('list', ['limit' => 200]);
        $ticketTypes = $this->PriceDetails->TicketTypes->find('list', ['limit' => 200]);
        $this->set(compact('priceDetail', 'events', 'ticketTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Price Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $priceDetail = $this->PriceDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $priceDetail = $this->PriceDetails->patchEntity($priceDetail, $this->request->getData());
            if ($this->PriceDetails->save($priceDetail)) {
                $this->Flash->success(__('The price detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The price detail could not be saved. Please, try again.'));
        }
        $events = $this->PriceDetails->Events->find('list', ['limit' => 200]);
        $ticketTypes = $this->PriceDetails->TicketTypes->find('list', ['limit' => 200]);
        $this->set(compact('priceDetail', 'events', 'ticketTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Price Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $priceDetail = $this->PriceDetails->get($id);
        if ($this->PriceDetails->delete($priceDetail)) {
            $this->Flash->success(__('The price detail has been deleted.'));
        } else {
            $this->Flash->error(__('The price detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
