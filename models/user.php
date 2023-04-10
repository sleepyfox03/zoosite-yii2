<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class user extends ActiveRecord
{
   public $image;
   public function rules()
   {
      return [
         // [[ 'uname', 'email', 'phn_no','role','pass','profile'],'required'],
         [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png'],
      ];
   }
   public function upload()
   {
      if ($this->validate()) {
         $this->image->saveAs('Uploads/' . $this->image->baseName . '.' .
            $this->image->extension);
         return true;
      } else {
         return false;
      }
   }



}