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

    }

    public function blogs(){

    }

    public function aboutUs(){

    }

    public function contactUs(){
        
    }

    public function eventDetails(){
        
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
                    $upComingEvents[] = $eventDate->_joinData['date_from'];
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
                    $expiredEvents[] = $eventDate->_joinData['date_from'];
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
}
