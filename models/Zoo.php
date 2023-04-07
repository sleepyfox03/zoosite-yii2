<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Zoo extends ActiveRecord
{
    public function rules() { 
        return [
            [[ 'zoo_name', 'state', 'city','area'],'required']
        ];
    }

}
