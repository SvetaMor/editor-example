<?php

namespace svetamor\editorwidget;
use yii\base\Widget;

class EditorWidget extends Widget {
   
   public function run(){
      return $this->render('editor');
   }
}
