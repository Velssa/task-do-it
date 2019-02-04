<?php

namespace app\validators;

use yii\validators\Validator;

class StatusValidator extends Validator
{

    public $message = 'Не правильно определн статус задачи';

    public function validateAttribute($model, $attribute)
    {
        $value = $model->$attribute;

        $statuses = [
            'Назначена',
            'В работе',
            'Выполнена',
            'Просрочена'
        ];

        if (!array_search($value, $statuses)) {
            $this->addError($model, $attribute, $this->message);
            return;
        }
    }
}