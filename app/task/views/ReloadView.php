<?php
/**
 * Created by PhpStorm.
 * User: incubator
 * Date: 3/13/14
 * Time: 1:20 PM
 */

class Task_ReloadView extends Core_IndexView {

    public function __construct()
    {
        parent::__construct();
        $this->setTargetTemplate(__CLASS__);
    }

} 