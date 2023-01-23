<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Models\Tasks;



Route::get('/', function () {
    return view('welcome');
});
// Task page Route
Route::get('/Task', function () {
   $data=Tasks::all();
    return view('Task')->with('tasks',$data);

});

// About page Route using controller
Route::get("About",[PagesController::class,'index']);
// Task page textfield print (./saveTask)
Route::post("/saveTask",[TaskController::class,'store']);
// Route::post('/saveTask','TaskController@store');
Route::get('/markascomplted/{id}',[TaskController::class,'Update']);
//úpdate status 
Route::get('/markasnotcomplted/{id}',[TaskController::class,'Updatenotcomplete']);
//delete task
Route::get('/deletetask/{id}',[TaskController::class,'DeleteTask']);
//update task
Route::get('/updatetask/{id}',[TaskController::class,'Updatetask']);
Route::post('/updatetasks',[TaskController::class,'Updatetasked']);
