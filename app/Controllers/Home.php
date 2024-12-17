<?php

namespace App\Controllers;

use App\Models\promotionModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model_promotion =new promotionModel();
        // crud
        // ajout insert
        // $donnes =['intitule'=>"prepartoire"];
        // $model_promotion -> insert($donnes);
        // lecture find ;findall
        // modi update
        // sup delete
        return view('test_view');
    }
}
