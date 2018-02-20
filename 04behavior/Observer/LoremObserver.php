<?php 
namespace behavior\Observer;

use SplSubject;

class LoremObserver implements \SplObserver
{
    /**
     * Receive update from subject
     *
     * @link http://php.net/manual/en/splobserver.update.php
     *
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     *
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        echo "\033[0;34mLorem\033[0n\n";
    }
}