<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Search extends BaseController
{

    //Show view Page
    public function index()
    {
        
        $search=$this->request->getVar('keyword');
        
       
        return view('search/searchResult',['search'=>$search]);
    }


}
