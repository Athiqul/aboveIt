<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class SearchApi extends ResourceController
{
   
    public function index()
    {

        $url=getenv('API_LINK').'/search?search='.str_replace(' ','_',$this->request->getVar('search'));
        $client=\config\Services::curlrequest();
        $headers=[

            "Accept"=>"application/json"
        ];
        $options = ['headers' => $headers, 'timeout' => 30];
        $res=$client->request('GET',$url,$options);
        $result=$res->getBody();
      
        return $this->respond(json_decode($result),200);
    }

}
