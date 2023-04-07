<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Animals extends ActiveRecord
{
    public function rules() { 
        return [
            [[ 'animals_name', 'scientific_name', 'type','category'],'required']
        ];
    }

}
