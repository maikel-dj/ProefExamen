<?php
class Countries extends Controller {
    public function __construct() {
        $this->countriesModel = $this->model('Country');
    }

    public function index() {
        $countries = $this->countriesModel->getCountries();
        $rows = "";
        foreach ($countries as $value) {
            $rows .= $value->id . " " . $value->name . " " . $value->capitalCity . " " . $value->population;
            $rows .= "<br>";
        }
        $data = [
            'title' => 'Landen',
            'countries' => $rows
        ];

        $this->view('countries/index', $data);
    }
}