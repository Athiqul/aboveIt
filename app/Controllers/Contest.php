<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contest extends BaseController
{
    public function index()
    {
        if($this->request->getPost())
        {
            $url=getenv('API_LINK').'/contest/apply';
            $data=$this->request->getVar();
            $data+=['key'=>getenv('API_SECRET')];
            $res=$this->apiCalling($url,'POST',$data);

            if($res->errors==false)
            {
                return redirect()->back()->with('success',$res->msg);
            }

            return redirect()->back()->withInput()->with('warning',$res->msg);
        }
        return view('contest/index');
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
