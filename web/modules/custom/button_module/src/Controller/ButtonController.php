<?php
namespace Drupal\button_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;


class ButtonController extends ControllerBase {

  public function button(){
   $button = [
    '#type'=> 'html_tag',
    '#tag'=> 'button',
    '#value'=>$this->t("click me"),
    '#attributes'=>[
    'id'=>'mybutton',
    'onClick'=>$this->sayWelcome(),
    ],
    ];
    return $button;
   
  }
  public function sayWelcome(){
   return "alert('This a awesome button and its thankfully working')";
    }
  
}


?>