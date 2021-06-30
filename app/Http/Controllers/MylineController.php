<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MylineController extends Controller
{
    //
   public function list()
    {
      $request = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5M2I3YTVhZi03NzZhLTQwYzktODRhNC0yODZjN2Q5OTZmYWEiLCJqdGkiOiI4ODM4OWRlM2Q2N2Q1YjJjYmY2YTcwZmMyZTU5NGFiOWVkNmMzZWIyOGUwNDk1MDNiNTZkNmY4NjY3ZWJjODQwMThjYzVlYjBiNDc4OGQyOCIsImlhdCI6MTYyNDUwMjQ4MCwibmJmIjoxNjI0NTAyNDgwLCJleHAiOjE2MjUxMDcyNzksInN1YiI6IjMiLCJzY29wZXMiOltdfQ.NMSMeev_Eu_c3jQw1n8VijnK9wq907eo6mgCn3uJJ1JZuaabn4xRcxkFHo0uSsnhO_3UyIitkN-nGt1OknL-vbxOMntLpe0w9BA7GxB1L8Xddbf8MBg0GAvfa17EAB8VrZq5n_vzn0HBQ5var0cHzdbU6kEMUheguQUPBRuWAuZy1VHX-B6aXWOmWRFvZ2gRjvkyjNelJqrFQokzWSR1YfV-an6abkPFuyV4uN1bow22ayri8hjQ5cYE_r71IzfXx4mosemAYIOJfvnLip5M9QJBcmaVOBLYrQtJND3HnwJINJM-A8FlGMxERBev2Bu1tS5iEi0GK0udzGi1hkCjb1La1S0QZaJfEeevg0bktHVX8yR-eG0PdD5x_QOwWjJ8CCRxpFcvSijDcP98dcsgx-hSLQhFeYENxZdRd21wcO0Enuwvahiltahc79wm6C06PHdw3L0sWJ_u0wB092eIEWcCLJA5p4TLoto4DSAPoe5hfufPUUaseK-4qWIV1CLm13d_8fpCYGhugmCj2D-GnbcZAUWC-gw91U5XN4OIv3FdAjztApZZrwP6WUODGW8j-zZwcyd3GvtZuRQ8pbVqTThMyHS--Fdw1JF4elHO_yWv1wpVwbQWC-jIpGfcdWUYOvWFBUn7tcnwwmXf_MQ1dWizlqEDgQM-1Ck64pxjHMk')
        ->acceptJson()
        ->get('http://35.175.135.183/api/sportsdata/current_lines/nfl');
       
        dd(json_decode($request->getBody()));
    }
    
}
