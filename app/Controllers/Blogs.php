<?php

namespace App\Controllers;

class Blogs extends BaseController
{
    public function index()
    {
        $list=$this->request->getVar('page');
        if($list==null)
        {
            $blogs=$this->blogsList();
        } else{
            $blogs=$this->blogsList('9',$list);
        }
        $url=getenv('API_LINK').'/blog/category-active-list';
        $category=$this->apiCalling($url,'GET');
       //dd($category);
        
        //dd($blogs);
        return view('blogs/list',['blogs'=>$blogs,'tags'=>$category]);
    }


    public function categoryWise($id)
    {
        $url=getenv('API_LINK').'/blog/category-blog/'.$id;
        $res=$this->apiCalling($url,'GET');
        $url=getenv('API_LINK').'/blog/category-active-list';
        $category=$this->apiCalling($url,'GET');
        //dd($res);
        return view('blogs/catbloglist',['blogs'=>$res,'tags'=>$category]);
    }


    public function show($id)
    {
        
        $url=getenv('API_LINK').'/blog/view/'.$id;
        $details=$this->apiCalling($url,'GET');
        $blogs=$this->blogsList('4');
       // dd($blogs);
        if($details->errors==true)
        {
            return redirect()->back();
        }
       

        return view('blogs/details',['details'=>$details,'blogs'=>$blogs]);
    }

   
    private function blogsList($limit='9',$page='1')
    {
       $url=getenv('API_LINK').'/blog/blogs?limit='.$limit.'&page='.$page;
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
