<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MylineController extends Controller
{
    //
   public function list()
    {
      $request = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5M2I3YTViMC00Mzc0LTQwOTItOWQwYy1jYjUxNmE5OTUxODIiLCJqdGkiOiI5M2JkZDNiNjM5YjYwYjhiOGMwZjk5MzZjODA0YjA0ODRkYmQ3Njc3ZGUzMTkzMDFmZGU4MGE4MjYyYzcxMGQ0YzJlODNlZGY5NWVlZTE5ZSIsImlhdCI6MTYyNjQyNDYwNywibmJmIjoxNjI2NDI0NjA3LCJleHAiOjE2MjY1MTEwMDcsInN1YiI6IjMiLCJzY29wZXMiOltdfQ.qVhWmd6i71lhOJLC0b25kSIIZyM6TA-Nc2e5j-ffR59P2nT0vBgqmUdSIpEryJwJ6UrMK4_m-CNcUZeTpZ4QKxfuuHN-wzHX8I4CvRcm__SCN7QCGYJyjXWgVwpQeM9-kIDWQbhNm1fpwUT6wgBWa_FVTzj1uMH6mxrNTKPTv-CjUyv1S2UupKodtu1y7YA0Yi06hE5e3SLFF4Ilee7t8_weQ4kpUnu4LdHj8zJ3VKDF4q02akBg1FgOmDAOt3qEXUH68y1cgPGcWGucGWt90IJI5Z-B1AuuPSh7xfHObcxV2VX6cQOEVwAQ1NKNrZ5DwuNz07VXWw5yQyRYEJRG0vHezqoSHzmlpz4PezPXRDGZr6YO13cvHTJ3Iz-XJC2_jMVhjwF0U_-JieFGbNZV4pTmOLoDgL1Uu7H5k9y6HWuFZFamnU7pBYliJqGS2BrqARysAERGhGPPXxOBVZDXCH0nZWydC4AUlmJKhBt47vN6TnvS01VKr2sdCeag9Y_6RCEvjXQpKyYLQnXMRuc1bu43K8TZyClYs1ISbaVrbAZpZa4AqnSP75ztHuytOsg14ihYui3RJWS0ijUTSOLisT5HH3O0h-Xw1uoxUQBf3nipUqevU3L4HVHeDNn7u8Qns_Foe2WrwZEyVz5DTtaUydmGDaYKgw6oKm5c18tc2Wk')
        ->acceptJson()
        ->get('http://35.175.135.183/api/sportsdata/current_lines/nfl');
       
       $datas = json_decode($request->getBody(),true);
      
        return view('myline',array("datas"=>$datas));
           
    }
    
}
