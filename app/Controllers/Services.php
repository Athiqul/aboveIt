<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        
        //dd($service);
        $list=$this->request->getVar('page');
        if($list==null)
        {
            $service=$this->servicesList();
        } else{
            $service=$this->servicesList($list);
        }
       
        return view('services/services',['services'=>$service]);
    }


    public function show($id)
    {
        $list=$this->servicesList();
        $url=getenv('API_LINK').'/services/show-service/'.$id;
        $details=$this->apiCalling($url,'GET');
        if($details->errors==true)
        {
            return redirect()->back();
        }
        //dd($details);

        return view('services/details',['details'=>$details,'services'=>$list]);
    }

   
    private function servicesList($page='1',$limit='9')
    {
       $url=getenv('API_LINK').'/services/show-all?page='.$page.'&limit='.$limit;
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
