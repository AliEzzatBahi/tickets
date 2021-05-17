<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class GuidesController extends AppController
{
    public function home(){
        $events = $this->all_events();
        $hotestEvents = $this->hotest_events();
        $upComingEvents = $this->up_coming_events();
        $onGoingEvents = $this->on_going_events();
        $expiredEvents = $this->expired_events();
        $blogs = $this->get_blogs();

        $this->set(compact('events', 'hotestEvents', 'upComingEvents', 'onGoingEvents', 'expiredEvents', 'blogs'));
    }

    public function allEvents(){
        $upComingEvents = $this->up_coming_events();
        $this->set(compact('upComingEvents'));
    }

    public function blogs(){

    }

    public function aboutUs(){

    }

    public function contactUs(){
        
    }

    public function eventDetails($eventId){
        $this->loadModel('Events');
        $event = $this->Events->get($eventId, [ 'contain' => ['Cities', 'Countries', 'Categories', 'TicketTypes', 'AdditionalFees']]);
        $this->set(compact('event'));
    }

    public function all_events(){
        $this->loadModel('Events');
        $events = $this->Events->find()->contain(['TicketTypes', 'Cities', 'Countries']);
        return $events;
    }

    public function hotest_events(){
        $hotestEvents = $this->all_events()->where(['is_hot' => 1]);
        return $hotestEvents;
    }

    public function up_coming_events(){
        $events = $this->all_events();
        $dateToday = date("m/d/y");

        $upComingEvents = array();
        foreach($events as $event){
            foreach($event->ticket_types as $eventDate){
                if(strtotime(strval($eventDate->_joinData['date_from'])) > strtotime(strval($dateToday))){
                    $upComingEvents[] = $event;
                }
            }
        }
        return $upComingEvents;
    }

    public function on_going_events(){
        $events = $this->all_events();
        $dateToday = date("m/d/y");

        $onGoingEvents = array();
        foreach($events as $event){
            foreach($event->ticket_types as $eventDate){
                if(strtotime(strval($eventDate->_joinData['date_from'])) >= strtotime(strval($dateToday))){
                    $onGoingEvents[] = $event;
                }
            }
        }
        return $onGoingEvents;
    }

    public function expired_events(){
        $events = $this->all_events();
        $dateToday = date("m/d/y");

        $expiredEvents = array();
        foreach($events as $event){
            foreach($event->ticket_types as $eventDate){
                if(strtotime(strval($eventDate->_joinData['date_from'])) < strtotime(strval($dateToday))){
                    $expiredEvents[] = $event;
                }
            }
        }
        return $expiredEvents;
    }

    public function get_blogs(){
        $this->loadModel('Blogs');
        $blogs = $this->Blogs->find()->contain(['Users']);
        return $blogs;
    }

    public function buyTicket($ticketId){
        $this->loadModel('TicketTypes');
        $ticketType = $this->TicketTypes->get($ticketId, [ 'contain' => ['Events.Cities', 'Events.Countries']]);
        $this->set(compact('ticketType'));
    }
}
