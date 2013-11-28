<?php

class StoreController extends Controller
{
    
    public function __construct() {
        parent::__construct($this->id);
    }

    public function actionIndex()
	{
		$this->render('store/index');
	}	
}