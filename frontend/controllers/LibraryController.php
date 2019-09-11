<?php

namespace frontend\controllers;

use library\awesome\Library;
use library\awesome\old\OldLibrary;
use yii\web\Controller;



class LibraryController extends Controller
{
    public function actionIndex()
    {
        $awesome = new Library();
        echo '<pre>' . $awesome->method() . '</pre>';

        $old = new OldLibrary();
        echo '<pre>' . $old->method() . '</pre>';

        echo '<pre>' . simpleFunction() . '</pre>';
    }
}