<?php

/**
 * Bootstrap short notifications
 * Usage:
 * 1.- In layout: $this->widget('ext.notify.Notify');
 * 2.- In your action: Yii::app()->user->setFlash('success', 'Your content...');
 * @version 1.0
 * @author Rafael J Torres <rafaelt88@gmail.com>
 * @copyright (c) 2014 Rafael J Torres
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 */
class Notify extends CWidget {
    private $_time = 3000;
    private $_height = 55;

    public function run($position = 0) {
        foreach (Yii::app()->user->getFlashes() as $type => $value) {
            $position += $this->_height;
            echo "<div id='message-{$position}' class='alert alert-{$type} alert-dismissable' style='z-index: 1000; position: fixed; top: {$position}px;'>";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo $value;
            echo "</div>";
            Yii::app()->clientScript->registerScript("message-{$position}", 
                "$('#message-{$position}').delay({$this->_time}).fadeOut('slow');", CClientScript::POS_READY);
        }
    }

}