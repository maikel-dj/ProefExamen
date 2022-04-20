<?php

class Items extends Controller {
    public function __construct()
    {
        $this->itemModel = $this->model('item');
    }

    public function index()
    {
        $itemsData = $this->itemModel->readItems();
        $rows = "";

        foreach($itemsData as $value)
        {
            $rows .= $value->itemid 
            .= $value->itemname 
            .=$value->category 
            .=$value->description 
            .=$value->brand 
            .=$value->typenumber 
            .=$value->purchasedate 
            .=$value->price;
        }


        $data = [
            'itemData'=>$rows
        ];

        $this->view("items/index", $data);
    }



}

