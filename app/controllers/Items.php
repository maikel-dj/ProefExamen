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
            $rows .= '<tr>
            <th scope="row">' . $value->itemid . '</th>
            <td>' . $value->itemname . '</td>
            <td> '. $value->category .'</td>
            <td>'.$value->category.'</td>
            <td>'.$value->brand.'</td>
            <td>'.$value->typenumber.'</td>
            <td>'.$value->purchasedate.'</td>
            <td>'. $value->price.'</td>
        </tr>';
        }


        $data = [
            'itemData'=>$rows
        ];

        $this->view("items/index", $data);
    }



}

