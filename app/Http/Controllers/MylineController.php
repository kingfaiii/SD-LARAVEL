<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MylineController extends Controller
{
    //
   public function list()
    {
      $request = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5M2I3YTVhZi03NzZhLTQwYzktODRhNC0yODZjN2Q5OTZmYWEiLCJqdGkiOiI5MjhjNTA0ZWNhNjU5MmZmOTlhODFjZDY1MDE4MTU4OTllMzA3ZTk5MTUyOTA0MDFhZTVmOGZjOGEyMDVkMTkwYWExOThjNDQwMTlkODNiNCIsImlhdCI6MTYyNTEzNzMyOSwibmJmIjoxNjI1MTM3MzI5LCJleHAiOjE2MjU3NDIxMjksInN1YiI6IjUiLCJzY29wZXMiOltdfQ.pl0Upv57096_tcVcReby3v9iiPE27WQzMJtS3hZwXp3ig9GbnDlwMJVz2tl_WBuy7YiDb7PF3pb6XdzkdrAt0PNvvCoKcELCbcxYKwjnmUKoo0ok6pFA3uxtlkYG6q1dzRTySsCGcYNPIcwCY8agiSZlulO60Yn15WJ2o76_CfWzecVYbdhLxhjhxZz-ShTUj4Pfh_7eHNQKiR4SiKsTbjli76Lhc66UIvPzMkOQ6xQcv5VwCVyx3s94X0pAjY7UI3jis_S-CIEGBX7zHpbN5pqSnf_GseGIMd46LwUqiNNL9FojUOYAiR2qjkZ70U-GCfo7Bc92RRo6Z6vOzde4qT3YtW_YhUY7yp1gdTEfdh-ctZNq3pF6tRfjrD5iylUuCDjDoKAsd6fjyF095wil6InMiuTzNpdUJ0aHYQVz-j-Q39TY-4Ry8GR6morBmpxODhQvp2d5HzzK-yyyYMS8P6kWTGwernoKdR15j1tBIZtGJPDtFcjyX1RdQ8s0hHTqjAI08TRwkBfKwO0_ELNnnX4jpfgxwxf26wFdRHHN8CpYywtb773if3qSSzg4zfNUxpaNvSpdbhHog3CEoCozrBMOsOTQGP8CT5ntTR8PVQvr3QbFKu8ZnGG0_OO-pq5Y_jZrE-omVtZMWbe2ahIOk2Ne-P71QNQXUsaM-41IN7g')
        ->acceptJson()
        ->get('http://35.175.135.183/api/sportsdata/current_lines/nfl');
       
       $datas = json_decode($request->getBody(),true);
    
        return view('myline',array("datas"=>$datas));
           
    }
    
}
