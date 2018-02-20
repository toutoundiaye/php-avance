<?php 
namespace behavior\Observer;

use SplObserver;

class HttpMessaging implements \SplSubject
{
    private const STATE = [
        'listening',
        'request received',
        'routing',
        'response ready',
        'response sent'
    ];

    private $observers = [];

    private $state;


    public function __construct()
    {
        $this->state = 0;
    }

    public function next()
    {
        $this->state++;
        $this->notify();
    }
    
    public function getState()
    {
        return self::STATE[$this->state];
    }
    
    /**
     * Attach an SplObserver
     *
     * @link http://php.net/manual/en/splsubject.attach.php
     *
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Detach an observer
     *
     * @link http://php.net/manual/en/splsubject.detach.php
     *
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
       $index = array_search($observer, $this->observers);
       if($index !== false){
           array_splice($this->observers, $index, 1);
       }
    }

     /**
     * Notify an observer
     *
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
}