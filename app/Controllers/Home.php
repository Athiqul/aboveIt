<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $service=$this->servicesList();
        $package=$this->packageList();
        $review=$this->customerReview();
        $blogs=$this->blogList();
       // dd($blogs);
        return view('home/index',['services'=>$service,'packages'=>$package,'testimonial'=>$review,'blogs'=>$blogs]);
    }

    private function blogList()
    {
       $url=getenv('API_LINK').'/blog/blogs?limit=3';
       $response=$this->apiCalling($url,'GET');
       return $response;

    }
    private function servicesList()
    {
       $url=getenv('API_LINK').'/services/show-all?limit=4';
       //dd($url);
       $response=$this->apiCalling($url,'GET');
       return $response;

    }

    private function customerReview()
    {
        $url=getenv('API_LINK').'/review/show-customers-review';
        $response=$this->apiCalling($url,'GET');
        return $response;
 
    }

    private function packageList()
    {
        $url=getenv('API_LINK').'/package/show-active-packages?limit=3';
        $response=$this->apiCalling($url,'GET');
        //dd($response);
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
