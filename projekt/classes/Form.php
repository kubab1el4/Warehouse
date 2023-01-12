<?php

namespace projekt\classes;

class Form
{
    public function __construct(){
        
    }
    public function createFormTop($method, $title){echo('<form id="product_form" method='.$method.'">
        <div class="header">
            <h1>'.$title.'</h1>
            <div class="form_buttons">');}
    public function createFormMiddle(){echo('</div>
        <hr>
    </div>
    <div class="main">
        <div class="first">');}
    public function addFormInput($name,$id,$type,$option1=null,$option2=null){echo('<label for="'.$name.'">'.$name.'</label>
        <input type="'.$type.'" id="'.$id.'"'.$option1.' required name="'.$name.'" '.$option2.'>');}
    public function addFieldChecker($id){echo('<div class="checker" id="'.$id.'" style="color: red;"></div><br>');}
    public function addFormSelect($id){echo('<label for="Type Switcher">Type Switcher</label><select required id="'.$id.'">');}
    public function addOption($value, $option1=null, $option2=null){echo('<option '.$option1.' '.$option2.' value="'.$value.'">'.$value.'</option>');}
    public function closeFormSelect(){echo('</select>');}
    public function addSubmitButton($action, $text){echo('<button type="submit" formmethod="post" formaction="'.$action.'">'.$text.'</button>');} 
    public function addFunctionButton($onclick){echo('<button onclick="'.$onclick.'">Cancel</button>');}
    public function addFormWindow(){echo('<div class="form_window" id="form_window"></div>
        </div>
        </div>');}   

}