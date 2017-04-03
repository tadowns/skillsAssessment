<?php

namespace app\models;

class Customer extends \yii\db\ActiveRecord
{

  public function rules()
  {
      return [
        [['country_of_citizenship', 'primary_state_destination', 'primary_country_destination', 'date_of_birth', 'start_travel_date', 'end_travel_date', 'status', 'dependent'], 'safe'],
        [['country_of_citizenship', 'primary_state_destination', 'primary_country_destination', 'status'], 'string'],
        [['date_of_birth', 'start_travel_date', 'end_travel_date'], 'date'],
        [['dependent'],'boolean'],
      ];
  }

    public static function tableName()
    {
        return 'customer';
    }
}
