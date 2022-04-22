<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Service;

//use App\Models\Banner;
use App\Models\Roomtypeimage;
//use App\Models\Service;
//use App\Models\Testimonial;


class HomeController extends Controller
{
    function home(){
      /* $banners=Banner::where('publish_status','on')->get();
        $services=Service::all();
        $roomTypes=RoomType::all();
        $testimonials=Testimonial::all();*/
        //return View('home');
        $services=Service::all();

        $roomTypes=RoomType::all();
        return view('home',['roomTypes'=>$roomTypes,'services'=>$services]);
    }
    // Service Detail Page
    function service_detail(Request $request, $id){
      $service=Service::find($id);
      return View('servicedetail',['service'=>$service]);
  }
}
