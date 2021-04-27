<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities', 'Countries', 'Categories'],
        ];
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Cities', 'Countries', 'Categories', 'TicketTypes', 'AdditionalFees'],
        ]);

        $this->set(compact('event'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEmptyEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->addTicketTypesToEvent($event->id);
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $cities = $this->Events->Cities->find('list', ['limit' => 200]);
        $countries = $this->Events->Countries->find('list', ['limit' => 200]);
        $categories = $this->Events->Categories->find('list', ['limit' => 200]);
        $ticketTypes = $this->Events->TicketTypes->find('list', ['limit' => 200]);
        
        $image_folder_name_by_time = time();
        if(!file_exists(ROOT."/webroot/responsive_filemanager/source/events/" . $image_folder_name_by_time))
            mkdir(ROOT."/webroot/responsive_filemanager/source/events/" . $image_folder_name_by_time . '/', 0766);
        $this->set(compact('event', 'cities', 'countries', 'categories', 'ticketTypes', 'image_folder_name_by_time'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['TicketTypes'],
        ]);

        $edit_images = $event->image_folder;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {

                $this->loadModel('TicketTypes');
                $this->loadModel('PriceDetails');
                
                $edit_key = $_REQUEST['edit_key'];
                for($i=0; $i<=(int)$edit_key; $i++){
                    $ticketType = $this->TicketTypes->get($_REQUEST['ticket_type_id'][$i]);
                    
                    $ticketType->name = $_REQUEST['ticket_name'][$i];
                    $ticketType->description = $_REQUEST['ticket_description'][$i];
                    $this->TicketTypes->save($ticketType);
                    
                    $priceDetail = $this->PriceDetails->get($_REQUEST['price_detail_id'][$i]);
                    $priceDetail->date_from = $_REQUEST['price_detail_date_from'][$i];
                    $priceDetail->date_to = $_REQUEST['price_detail_date_to'][$i];
                    $priceDetail->time = $_REQUEST['price_detail_time'][$i];
                    $priceDetail->min_seats_number = $_REQUEST['price_detail_min_seats'][$i];
                    $priceDetail->max_seats_number = $_REQUEST['price_detail_max_seats'][$i];
                    $priceDetail->price = $_REQUEST['price_detail_price'][$i];
                    $this->PriceDetails->save($priceDetail);
                }
                
                $this->addTicketTypesToEvent($event->id);
                chdir(ROOT."/webroot/responsive_filemanager/source/events/" . $edit_images . '/');
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $cities = $this->Events->Cities->find('list', ['limit' => 200]);
        $countries = $this->Events->Countries->find('list', ['limit' => 200]);
        $categories = $this->Events->Categories->find('list', ['limit' => 200]);
        $ticketTypes = $this->Events->TicketTypes->find('list', ['limit' => 200]);
        
        $this->set(compact('event', 'cities', 'countries', 'categories', 'ticketTypes', 'edit_images'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addTicketTypesToEvent($event_id)
    {
        $this->autoRender = false;
        $this->loadModel('TicketTypes');
        $this->loadModel('PriceDetails');

        $field = $_REQUEST['field'];
        for($i=0; $i<=(int)$field; $i++){
            $ticketType = $this->TicketTypes->newEmptyEntity();
            $priceDetail = $this->PriceDetails->newEmptyEntity();

            $ticketType->name = $_REQUEST['ticket_name'][$i];
            $ticketType->description = $_REQUEST['ticket_desc'][$i];

            if ($this->TicketTypes->save($ticketType)) {
                $priceDetail->date_from = $_REQUEST['price_detail_date_from'][$i];
                $priceDetail->date_to = $_REQUEST['price_detail_date_to'][$i];
                $priceDetail->time = $_REQUEST['price_detail_time'][$i];
                $priceDetail->min_seats_number = $_REQUEST['price_detail_min_seats'][$i];
                $priceDetail->max_seats_number = $_REQUEST['price_detail_max_seats'][$i];
                $priceDetail->price = $_REQUEST['price_detail_price'][$i];
                $priceDetail->event_id = $event_id;
                $priceDetail->ticket_type_id = $ticketType->id;

                $this->PriceDetails->save($priceDetail);
            }
        }
    }

    public function deleteTicketTypeFromEvent($priceDetail_id, $ticket_type_id)
    {
        $this->autoRender = false;
        $this->loadModel('PriceDetails');
        $this->loadModel('TicketTypes');

        if($this->request->allowMethod(['post', 'delete'])){
            $priceDetail = $this->PriceDetails->get($priceDetail_id);
            $this->PriceDetails->delete($priceDetail);

            $ticketType = $this->TicketTypes->get($ticket_type_id);
            $this->TicketTypes->delete($ticketType);
        }
    }

}
