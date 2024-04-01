<?php

namespace App\Http\Controllers\Client;
namespace App\Http\Controllers\controllerdemo;
namespace App\Http\Controllers\request;
namespace App\Http\Controllers\session;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AgeMiddleware;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\controllerdemo\GroupController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', ['as' => 'home', function () {
    return view('pages.home');
}]);


//Route
Route::get('route/{id?}/{name?}/{location?}', ['as' => 'route',function ($id= null, $name = null, $location= null ) {
      
       //return view('pages.route',['name'=> $name,'id'=>$id,'location'=>$location]);  
        return view('pages.route',compact('name','id','location'));  
        //return view('pages.route')->with('name', $name)->with('id', $name)->with('location', $location); 

 }])->where(['id' => '[0-9]+', 'name' =>'[a-z]+', 'location' =>'[a-z]+']);

//Numeric check in boot method
Route::get('route_cid_check/{cid_check?}', ['as' => 'route_cid_check',function ($cid_check= null) {
          return view('pages.route',compact('cid_check'));  
}]);


 //Route Group
Route::group(['prefix'=>'tutorial','middleware'=>'age','as'=>'tutorial.'],function()  
{  
  Route::get('/laravel1/{age?}',function($age= null,Request $request,AgeMiddleware $age_o)  
 {  
  return view('pages.route')->with('disname', 'laravel1 tutorial')->with('token',$request->get('token'));
 })->name('laravel1'); 
  
Route::get('/laravel2/{age?}',['as' => 'laravel2',function($age= null,Request $request,AgeMiddleware $age_o)  
 {  
  return view('pages.route')->with('disname', 'laravel2 tutorial')->with('token',$request->get('token'));
 }]);  
});  
//Route Group Name space
Route::namespace('Client')->prefix('client')->name('client.')->group(function() {
 
Route::get('bio1', 'ClientController@index')->name('bio1');
Route::get('bio2', 'ClientController@index')->name('bio2');
});





//Middleware

Route::get('middleware', ['as' => 'middleware', function () {
  return view('pages.middleware');
}]);  
//Age middleware for parameters passing through url
Route::get('AgeMiddleware/{age?}', ['as' => 'AgeMiddleware', function ($age= null,Request $request,AgeMiddleware $age_o) {
 //echo $request->get('token');
   return view('pages.middleware')->with('token',$request->get('token'));
}])-> middleware('age');
//Is admin Middleware using Home controller
Route::get('homecontollercheck', 'HomeController@index')->name('homecontollercheck');
Route::get('IsAdminMiddleware', 'HomeController@admins')-> middleware('is-admin')->name('IsAdminMiddleware'); 
//Route::get('admins', ['as'=>'admins','uses'=>'HomeController@admins','middleware' => 'is-admin']);
//Role Middleware for parameters passing through middleware function
Route::get('role',['as'=>'role','middleware' => 'Role:editor','uses' => 'RoleController@index']);
Route::get('BeforeAfterMiddleware', ['as' => 'BeforeAfterMiddleware', function () {
  return view('pages.middleware');
}])-> middleware('before-middleware','after-middleware'); 
Route::get('TerminableMiddleware', ['as' => 'TerminableMiddleware', function () {
  return view('pages.middleware');
}])-> middleware('terminable-middleware'); 

//Controller
Route::namespace('controllerdemo')->prefix('controllerdemo')->name('controllers.')->group(function() {
 
  Route::get('basic', 'HomeController@index')->name('basic');
  Route::get('parameters/{name?}', 'HomeController@index')->name('parameters');
  Route::resource('resourceonly', 'ResourceController',['only' => ['index', 'show']]);
  Route::resource('resourceexcept', 'ResourceController', ['except' => [ 'index', 'show', 'destroy']]);
  Route::get('singleactioncontroller/{id}','SingleActionController');  
  Route::resource('resourcesnamechange', 'ResourceController',['names' => ['create' =>'resourcesnamechange.build']]);  
  Route::resource('resourcesparameternamechange', 'ResourceController', ['parameters' => ['resourcesparameternamechange' => 'admin_student']]);  
  
});
//Grouping Controller
Route::namespace('controllerdemo')->prefix('controllerdemo')->controller(GroupController::class)->group(function () {
  Route::get('groupcontroller1','GroupController@getIndex');
  Route::get('groupcontroller2','GroupController@getShow');
  Route::get('groupcontroller3','GroupController@getAdminProfile');
  Route::get('groupcontroller4','GroupController@postProfile');
  //Middleware Controller
  Route::get('groupcontrollerm1','GroupController@getIndex')->middleware('controllermiddleware'); 
  Route::get('groupcontrollerm2','GroupController@getAdminProfile'); 
});


//Request

Route::namespace('request')->prefix('request')->name('request.')->group(function () {
  Route::get('requesthome', ['as' => 'requesthome', function () {
    return view('pages.request');
  }]); 
  Route::get('uri', ['as' => 'uri','uses' => 'UriController@index']);
  Route::get('register',['as' => 'register', function () {
    return view('pages.request');
  }]); 
  Route::post('register/post',['as' => 'register.post','uses' => 'UserRegistration@postRegister']);
  Route::get('requestmethod',['as' => 'requestmethod','uses' => 'UriController@requestmethod']);
});

//Response

Route::prefix('response')->name('response.')->group(function () {
 
  Route::get('responsehome', ['as' => 'responsehome', function () {
    return view('pages.response');
  }]); 
  Route::get('basicresponse', ['as' => 'basicresponse', function () {
    return 'Hello World';

  }]); 
  Route::get('attaching_headers', ['as' => 'attaching_headers', function () {
    return response("Hello World Attaching Headers", 200)->header('Content-Type', 'text/html');
  }]); 
  Route::get('withcookie', ['as' => 'withcookie', function () {
    return response("Hello", 200)->header('Content-Type', 'text/html')
    ->cookie('name','John');
  }]); 
  
  Route::get('json', ['as' => 'json', function () {
    $users = [ ['userid' => 1, 'name' => 'Alex'],['userid' => 2, 'name' => 'Jane'],];
    return response()->json($users);
  }]); 
  Route::get('htmlviewresponse', ['as' => 'htmlviewresponse', function () {
      return response()->view('pages.response', ['name' => 'Alex',]);
    }]); 
  Route::get('redirectresponse', ['as' => 'redirectresponse', function () {
    return redirect('response/responsehome');
    //return response()->redirect('response/responsehome');
    }]); 
    Route::get('downloadresponse', ['as' => 'downloadresponse', function () {
      $pathToFile = public_path("assets/test.zip");
    	$headers = ['Content-Type: application/zip'];
    	$fileName = 'test_'.time().'.zip';
     return response()->download($pathToFile, $fileName, $headers);
     //return response()->download($pathToFile);
    }]); 
    Route::get('fileresponse', ['as' => 'fileresponse', function () {
      $pathToFile = public_path("assets/test.zip");
    	//return response()->download($pathToFile, 'filename.zip');
      return response()->file($pathToFile);
     //return response()->streamDownload($pathToFile, 'filename.zip');

    }]); 
  });


//Cookie

Route::namespace('cookie')->prefix('cookie')->name('cookie.')->group(function () {

  Route::get('cookiehome', ['as' => 'cookiehome', function () {
    return view('pages.cookie');
  }]); 

  Route::get('settingcookie', ['as' => 'settingcookie', function (Response $response) {
        $minutes="60";
        $response->withCookie('withCookiename', 'suganya_withCookiename', $minutes);
        $response->withCookie(cookie()->forever('forevercookiename', 'suganya_forevercookiename'));
      // Create a new cookie and queue it for sending
        Cookie::queue(Cookie::make('using_the_cookie_facade', 'suganya_using_the_cookie_facade', $minutes));
        return $response;
    }]); 

  Route::get('retrievingcookie', ['as' => 'retrievingcookie', function (Request $request) {
    $withCookiename = request()->cookie('withCookiename');
    $using_the_cookie_facade = Cookie::get('using_the_cookie_facade');
    $forevercookiename = Cookie::get('forevercookiename');
    return view('pages.cookie',compact('withCookiename','using_the_cookie_facade','forevercookiename'));  
    }]); 

  Route::get('cookiecontroller/set','CookieController@setCookie')->name('cookiecontroller.set');
  Route::get('cookiecontroller/get','CookieController@getCookie')->name('cookiecontroller.get');

    Route::get('encryptedcookie', ['as' => 'encryptedcookie', function () {
      $minutes="60";
      //Cookie::queue(Cookie::encrypt('encryptedcookie_name', 'suganya_encryptedcookie', $minutes));
      return view('pages.cookie');
    }]); 
    Route::get('decryptedcookie', ['as' => 'decryptedcookie', function () {
      //$decryptedcookie_name = Cookie::decrypt('encryptedcookie_name');
     // return view('pages.cookie',compact('decryptedcookie_name'));  
    }]); 

    Route::get('deletingcookie', ['as' => 'deletingcookie', function () {
      Cookie::queue(Cookie::forget('withCookiename'));
      Cookie::queue(Cookie::forget('using_the_cookie_facade'));
      Cookie::queue(Cookie::forget('forevercookiename'));
      Cookie::queue(Cookie::forget('cookiecontroller_name'));
      return view('pages.cookie');
    }]); 
});

//session
Route::namespace('session')->prefix('session')->name('session.')->group(function () {
  Route::get('sessionhome', ['as' => 'sessionhome', function () {
    return view('pages.session');
  }]); 
  Route::post('storesession','SessionController@store')->name('storesession');
  Route::get('storesessionvalue/{value1?}/{value2?}','SessionController@storevalues')->name('storesessionvalue');
  Route::get('retrievingsession','SessionController@retrieving')->name('retrievingsession');
  Route::get('deletingusersession','SessionController@deletingusersession')->name('deletingusersession');
  Route::get('deletingallsession','SessionController@deletingallsession')->name('deletingallsession');
});

//Blade Template

Route::namespace('blade_views')->prefix('blade_views')->name('blade_views.')->group(function () {
  Route::get('blade_views_home', ['as' => 'blade_views_home', function () {
    return view('pages.blade_views');
  }]); 
  Route::get('create_view_call_route', ['as' => 'create_view_call_route', function () {
    return view('pages.blade_views')->with('pagename','create_view_call_route');
  }]); 
  Route::get('create_view_call_controller', 'create_view_call_controller@display')->name('create_view_call_controller');
  Route::get('passing_data_controller_array', 'PassingDataController@display_array_method')->name('passing_data_controller_array');
  Route::get('passing_data_controller_array_name', 'PassingDataController@display_array_name_method')->name('passing_data_controller_array_name');
  Route::get('passing_data_controller_with_method/{id?}', 'PassingDataController@display_with_method')->name('passing_data_controller_with_method');
  Route::get('passing_data_controller_compact_single_method/{name?}', 'PassingDataController@display_compact_single_method')->name('passing_data_controller_compact_single_method');
  Route::get('passing_data_controller_compact_multiple_method/{idm?}/{namem?}/{passwordm?}', 'PassingDataController@display_compact_multiple_method')->name('passing_data_controller_compact_multiple_method');
  Route::get('sharing_data_with_all_views', ['as' => 'sharing_data_with_all_views', function () {
    return view('pages.blade_views');}]); 
  Route::get('nesting_view_detail', 'NestingExistenceViewController@nesting_display')->name('nesting_view_detail');
  Route::get('determining_the_existence_view', 'NestingExistenceViewController@existence_view_checking')->name('determining_the_existence_view');
});
Route::namespace('blade_template')->prefix('blade_template')->name('blade_template.')->group(function () {
  Route::get('blade_template_home', ['as' => 'blade_template_home', function () {
    return view('pages.blade_template');
  }]); 
  Route::get('blade_echoingdata', ['as' => 'blade_echoingdata', function () {
    return view('pages.blade_template')->with('blade_echoingdata','Echoing data is john');
  }]); 
  Route::get('blade_ternary_operator', ['as' => 'blade_ternary_operator', function () {
    return view('pages.blade_template')->with('blade_ternary_operator','some thing text');
  }]); 
  Route::get('blade_if_directive', ['as' => 'blade_if_directive', function () {
    return view('pages.blade_template')->with('blade_if_directive_id','7');
  }]);
  Route::get('blade_elseif_directive', ['as' => 'blade_elseif_directive', function () {
    $blade_elseif_directive_post = ['Anisha','Nishka','Sumit'];
    return view('pages.blade_template')->with('blade_elseif_directive_post',$blade_elseif_directive_post);
  }]); 
  Route::get('blade_unless', ['as' => 'blade_unless', function () {
    return view('pages.blade_template')->with('blade_unless_directive_id','7');
  }]);
  Route::get('blade_hassection_directive', ['as' => 'blade_hassection_directive', function () {
    return view('pages.blade_template')->with('blade_hassection_directive_id','7');
  }]);
  Route::get('blade_loops_for_endfor', ['as' => 'blade_loops_for_endfor', function () {
    return view('pages.blade_template')->with('blade_loops_for_endfor_id','7');
  }]);
  Route::get('blade_foreach', ['as' => 'blade_foreach', function () {
    return view('pages.blade_template', ['blade_foreach_students'=>['anisha','haseena','akshita','jyotika'],'posts'=>['title1'=>'anisha','title2'=>'haseena','title3'=>'akshita','title4'=>'jyotika']]);  
    
  }]);
  Route::get('blade_while_endwhile', ['as' => 'blade_while_endwhile', function () {
    return view('pages.blade_template')->with('blade_while_endwhile_id','7');
  }]);
  Route::get('include_other_views', ['as' => 'include_other_views', function () {
    return view('pages.blade_template')->with('include_other_views','yes');
  }]);

  Route::get('master_layout', ['as' => 'master_layout', function () {
    return view('pages.blade_template_master_layout');
  }]);
  Route::get('child_layout_js', ['as' => 'child_layout_js', function () {
    return view('pages.blade_template_inheritence')->with('child_layout_js','yes');
  }]);
  Route::get('child_layout_at_parent_dir', ['as' => 'child_layout_at_parent_dir', function () {
    return view('pages.blade_template_inheritence')->with('child_layout_at_parent_dir','yes');
  }]);

}); 

//Form

Route::namespace('html_form')->prefix('html_form')->name('html_form.')->group(function () {
  Route::get('html_form_home', ['as' => 'html_form_home', function () {
    return view('pages.html_form');
  }]); 
  Route::post('store','FormController@store')->name('store');
}); 

//fallback
Route::fallback(function () {
  //
  echo "<b>No routes</b><br/>";
});