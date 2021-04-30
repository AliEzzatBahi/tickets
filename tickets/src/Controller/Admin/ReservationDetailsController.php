<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;

/**
 * ReservationDetails Controller
 *
 * @property \App\Model\Table\ReservationDetailsTable $ReservationDetails
 * @method \App\Model\Entity\ReservationDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReservationDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Reservations', 'PriceDetails'],
        ];
        $reservationDetails = $this->paginate($this->ReservationDetails);

        $this->set(compact('reservationDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Reservation Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reservationDetail = $this->ReservationDetails->get($id, [
            'contain' => ['Reservations', 'PriceDetails'],
        ]);

        $this->set(compact('reservationDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reservationDetail = $this->ReservationDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $reservationDetail = $this->ReservationDetails->patchEntity($reservationDetail, $this->request->getData());
            if ($this->ReservationDetails->save($reservationDetail)) {
                $this->Flash->success(__('The reservation detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reservation detail could not be saved. Please, try again.'));
        }
        $reservations = $this->ReservationDetails->Reservations->find('list', ['limit' => 200]);
        $priceDetails = $this->ReservationDetails->PriceDetails->find('list', ['limit' => 200]);
        $this->set(compact('reservationDetail', 'reservations', 'priceDetails'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reservation Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reservationDetail = $this->ReservationDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reservationDetail = $this->ReservationDetails->patchEntity($reservationDetail, $this->request->getData());
            if ($this->ReservationDetails->save($reservationDetail)) {
                $this->Flash->success(__('The reservation detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reservation detail could not be saved. Please, try again.'));
        }
        $reservations = $this->ReservationDetails->Reservations->find('list', ['limit' => 200]);
        $priceDetails = $this->ReservationDetails->PriceDetails->find('list', ['limit' => 200]);
        $this->set(compact('reservationDetail', 'reservations', 'priceDetails'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reservation Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reservationDetail = $this->ReservationDetails->get($id);
        if ($this->ReservationDetails->delete($reservationDetail)) {
            $this->Flash->success(__('The reservation detail has been deleted.'));
        } else {
            $this->Flash->error(__('The reservation detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
