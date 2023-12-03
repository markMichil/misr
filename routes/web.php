<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Modules\Location\Models\Location;
use App\Property;
use Modules\Media\Models\MediaFile;

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
Route::get('/intro','LandingpageController@index');
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/install/check-db', 'HomeController@checkConnectDatabase');

// Social Login
Route::get('social-login/{provider}', 'Auth\LoginController@socialLogin');
Route::get('social-callback/{provider}', 'Auth\LoginController@socialCallBack');

// Logs
Route::get(config('admin.admin_route_prefix').'/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'dashboard','system_log_view'])->name('admin.logs');

Route::get('/install','InstallerController@redirectToRequirement')->name('LaravelInstaller::welcome');
Route::get('/install/environment','InstallerController@redirectToWizard')->name('LaravelInstaller::environment');

Route::get('insert',function(){

    $locations = [
        [
            'name' => 'Paris',
            'status' => 'publish',
            'create_user' => '1',
            'created_at' =>  date("Y-m-d H:i:s")
        ],

        ];
    foreach ($locations as $location){
        $row = new Location( $location );
        $row->save();
    }
});

Route::get('/popop',function(){

    $properties = Property::with('propertyDetails')->get();
    $data = [];
/*
        'bed',
        'bath',
        'garage',
        'floor',
        'room_size',
        'content',
        'video'
   */

    foreach ($properties as $property){
        $count = 0;

        $newSlug = Str::slug($property->title);
        if(empty($newSlug)){
            $newSlug = preg_replace('/\s+/u', '-', trim($property->title));
        }
        $slug = $newSlug ;
        $newSlug = $slug . ($count ? '-' . $count : '');

//        $image = implode('.',$property->background_image);

        $fileNameWithoutExtension = pathinfo($property->background_image, PATHINFO_FILENAME);
//        dd((MediaFile::findMediaByName("$fileNameWithoutExtension")->id)?MediaFile::findMediaByName("$fileNameWithoutExtension")->id:1);
        $imageId = 1 ;
        if(MediaFile::findMediaByName("$fileNameWithoutExtension")){
            $imageId = MediaFile::findMediaByName("$fileNameWithoutExtension")->id;
        }
  $data  =
            [
                'title' => $property->title,
                'slug' => $newSlug,
                'content' =>$property->propertyDetails->floor. ' - ' .
                    $property->description .' - '.
                    $property->propertyDetails->content,
                'image_id' =>$imageId,
                'banner_image_id' => $imageId,
                'location_id' =>  $property->state_id,
                'category_id' => $property->category_id,
                'address' =>  $property->title,
                'map_lat' => $property->lat,
                'map_lng' => $property->lon,
                'price' => $property->price,
                'sale_price' =>$property->price,

                'bed'=>$property->propertyDetails->bed,
                'bathroom'=>$property->propertyDetails->bath,
                'garages'=>$property->propertyDetails->garage,
                'area'=>$property->propertyDetails->room_size,
                'area_unit'=>$property->propertyDetails->room_size,
                'video'=>$property->propertyDetails->video,
                'property_type' => ($property->type == 'exrent')?1:2,
                'status' => "publish",
                'author_id' => 1,
                'create_user' => 6,
                'created_at' => date("Y-m-d H:i:s"),

            ];


       $id [] =  DB::table('bravo_properties')->insertGetId($data);
    }
echo '<pre>';
   print_r($id) ;

});

