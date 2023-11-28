<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Search extends BaseController
{

    //Show view Page
    public function index()
    {
        $list=$this->request->getVar('page');
        $search=$this->request->getVar('keyword');
        if($list==null)
        {
            $products=$this->productList();
        } else{
            $products=$this->productList('9',$list);
        }
       
        return view('search/searchResult',['products'=>$products,'search'=>$search]);
    }


    private function productList()
    {
       $url=getenv('API_LINK').'/products/above-products?limit=12';
       $response=$this->apiCalling($url,'GET');
       return $response;

    }

    private function apiCalling($url,$method,$data=null)
    {
        
        $url=$url;
        $client=\config\Services::curlrequest();
        $headers=[

            "Accept"=>"application/json"
        ];
        $options = ['headers' => $headers, 'timeout' => 30,"form_params"=>$data];
        $res=$client->request($method,$url,$options);
        $result=$res->getBody();
        $response=json_decode($result);
        return $response;
    }
}
