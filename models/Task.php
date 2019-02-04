<?php

namespace app\models;

use app\validators\StatusValidator;
use yii\base\Model;

class Task extends Model
{
    public $title;
    public $description;
    public $subTasks;
    public $director;
    public $performer;
    public $statementDate;
    public $endDate; // TODO: Создать функцию расчета даты исходя из дедлайна (или наоборот, подумать)
    public $deadline;
    public $status;

    public function rules()
    {
        return [
            [['title', 'description', 'director', 'performer', 'statementDate'], 'required'],
            [['title'], 'string', 'min' => 3],
            [['status'], StatusValidator::class],
            [['subTasks', 'director', 'performer', 'endDate', 'statementDate', 'deadline'], 'safe']
        ];
    }
}