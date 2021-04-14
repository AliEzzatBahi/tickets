<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TicketTypes Controller
 *
 * @property \App\Model\Table\TicketTypesTable $TicketTypes
 * @method \App\Model\Entity\TicketType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TicketTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ticketTypes = $this->paginate($this->TicketTypes);

        $this->set(compact('ticketTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketType = $this->TicketTypes->get($id, [
            'contain' => ['PriceDetails'],
        ]);

        $this->set(compact('ticketType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketType = $this->TicketTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $ticketType = $this->TicketTypes->patchEntity($ticketType, $this->request->getData());
            if ($this->TicketTypes->save($ticketType)) {
                $this->Flash->success(__('The ticket type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket type could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketType = $this->TicketTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketType = $this->TicketTypes->patchEntity($ticketType, $this->request->getData());
            if ($this->TicketTypes->save($ticketType)) {
                $this->Flash->success(__('The ticket type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket type could not be saved. Please, try again.'));
        }
        $this->set(compact('ticketType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketType = $this->TicketTypes->get($id);
        if ($this->TicketTypes->delete($ticketType)) {
            $this->Flash->success(__('The ticket type has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
