<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        //dd($service);
        $list=$this->request->getVar('page');
        if($list==null)
        {
            $team=$this->teamList();
        } else{
            $team=$this->teamList($list);
        }

        return view('about/index',['teammembers'=>$team]);
    }


 

   
    private function teamList($page='1',$limit='6')
    {
       $url=getenv('API_LINK').'/team/show-members?limit='.$limit.'&page='.$page;
       $response=$this->apiCalling($url,'GET');
       return $response;

    }



    public function callBackReq()
    {
        if($this->request->getPost())
        {
            $data=$this->request->getVar();
            $data+=['key'=>getenv('API_SECRET')];
            $url=getenv('API_LINK').'/call/request-for-call';
            $res=$this->apiCalling($url,'POST',$data);

            if($res->errors==true)
            {
               return    redirect()->back()->with('warning',$res->msg)->withInput();

            }

          return redirect()->back()->with('success','Thank you for your interest sir!, We will contact with you soon');
           


        }
        return view('about/contact');
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
