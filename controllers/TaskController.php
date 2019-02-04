<?php

namespace app\controllers;


use app\models\Task;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        echo 'index';
        exit;// TODO: Список всех активных задач
    }

    public function actionTask()
    {
        $task = new Task();

        $task->setAttributes([
            'title' => 'Задача номер один',
            'description' => 'Описание задачи номер один',
            'subTasks' => ['Подзадача 1', 'Подзадача 2', 'Подзадача 3'],
            'director' => 'Вася Пупкин',
            'performer' => 'Иван Иванов',
            'statementDate' => '02.02.2019',
            'endDate' => '05.02.2019',
            'deadline' => '3',
            'status' => 'В работе'
        ]);

        $taskParams = $task->toArray();

        if ($task->validate()) {
            return $this->render('task', $taskParams);
        }
        var_dump($task->getErrors());

    }
}