<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        
       // dd($product);
       $list=$this->request->getVar('page');
        if($list==null)
        {
            $products=$this->productList();
        } else{
            $products=$this->productList('9',$list);
        }
       
        return view('products/product-list',['products'=>$products]);
    }


    public function show($id)
    {
        
        $url=getenv('API_LINK').'/products/show-product/'.$id;
        $details=$this->apiCalling($url,'GET');
        $products=$this->productList();
        //dd($details);
        if($details->errors==true)
        {
            return redirect()->back();
        }
       

        return view('products/product-details',['details'=>$details,'products'=>$products]);
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
