<?php


/**
 * Description of inmo_
 *
 * @author alagoro
 */
class newheader extends fs_controller {

    public $mypluginname='newheader';

    public function __construct() {
        parent::__construct(__CLASS__, 'Mega-menu', 'Entrada de menu', FALSE, TRUE);
    }

    protected function private_core() {
        
    }


}
