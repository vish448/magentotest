<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*To checkout this conrtoller paste this URL to your addressbar
 * localhost:8888/magentotest/helloworld/index/index
 */

/*---- How  should action controllers be names?----
 *     1. start with this string specifiled in config.xml(Magentotutorial_Helloworld)
 *     2. be followed by th an underscore(Magentotutorial_Helloworld_)
 *     3. which will be followed by the action controller's name(Index)
 *     4. And finally "Controller"(Magentotutorial_Helloworld_IndexController)
 */

class Magentotutorial_Helloworld_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        echo "Hello Indexs. Congratulations you've created your first controllers";
    }
    
    public function goodbyeAction(){
        echo 'Goodbye World!';
    }
    
    public function paramsAction(){
        echo '<dl>';
        foreach ($this->getRequest()->getParams() as $key=>$value){
            echo '<dt><strong>Param: </strong>'.$key.'</dt>';
            echo '<dt><strong>Value: </strong>'.$value.'</dt>';
        }
        echo '</dl>';
    }
        
}




?>
