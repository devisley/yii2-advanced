<?php
/**
 * Created by PhpStorm.
 * User: Ruslan
 * Date: 15.11.2018
 * Time: 20:05
 */

namespace console\controllers;

use yii\console\Controller;

class ConsoleGreatingsController extends Controller
{
    /**
     * Displays "Hello world" message
     */
    public function actionIndex() {
        echo 'Hello, world';
    }
}