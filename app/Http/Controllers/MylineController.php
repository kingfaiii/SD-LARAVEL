<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MylineController extends Controller
{
    //
   public function list()
    {
      $request = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5M2I3YTViMC00Mzc0LTQwOTItOWQwYy1jYjUxNmE5OTUxODIiLCJqdGkiOiJhYmRhZTA0Mjk4ODNlZTJhYjRmM2IwODM4NzA2YWZmNDM2YzdkN2M1NTg1OGQyODZjNDRkYzQxZjc3MWU3N2QyNjFjYzJlMmUwNzdlYmQxMyIsImlhdCI6MTYyNjU3MDcwOCwibmJmIjoxNjI2NTcwNzA4LCJleHAiOjE2MjY2NTcxMDgsInN1YiI6IjMiLCJzY29wZXMiOltdfQ.rIc6kIe-il9we5IcrEspjbb8kPObYDqyNlaSj7NDn6Rc9excFYP3WS_Qp9E0sVTRMlOm0kf7VlEwvk2mF5rf5PEd3-iGNMhOe9jjpaa1ahz47CoredNhliPUT1iQh8NJmdmbLC4FaqYwyLa-Cdm6NfASuqnr3qVEx9kuuORND1txwQkFUCPHzPjh-fHwglOET6x_dpAGCatsvHjRcf3-jyXbDuUxgBOFwbPS8uuEkg0rmFoNgjuGl2dfJMQxrHU-Kuk-cbmw_j09TWI6NibwFlDFgWlqCPFUWN6rfuv0aC4zqFnz7D-WPn4e323_9SozToJpec3OR6Srb6fBCx4AGNlDX0kUHvCajoIs8l3W7ayOJECCEOaXmzSMzoKQ71i5HjoGw79mUrC6DbQsMyVyqOKaLGGRo35j7LKbS6ICrfAz7JxaJzNGIQ3UYuaWxRt0BU4Kl6NCNjsm28fYuTx542lOvJVPYh9F8UuMrdzWOe9mr-b3FxmOSIAVjvCXaWgYu65Ie3emFxNzRXVdIiqAOWtFewek3aGPe2Pl2HCE1KA9kXqXRDL2j3Bnnbyd_4C2l4wHJqe2OrREBxm5W9Hzjzmx2-2cGn4DRkH4r_KZcfF4bK5yqisVwa0-8M15FwnlvO-0gcmNM7J5HCXwTs0w5Q1mzNbdkrWdxx4-IRrsxzs')
        ->acceptJson()
        ->get('http://35.175.135.183/api/sportsdata/current_lines/nfl');
       
       $datas = json_decode($request->getBody(),true);
      
        return view('myline',array("datas"=>$datas));
           
    }
    
}
