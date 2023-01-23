<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use Illuminate\Http\Request;


class TaskController extends Controller
{
public function store(Request $request){
   //print textfield output as a command
   //dd($request->all());

   //meke Task kynne model name eka $task kynne hadana obj eka
   $task=new Tasks;
   
// validation 
    $this->validate($request,[
        //task=textfieldname in task.blade.php
        'task'=>'required|max:100|min:5',
    ]);

//sending data to database

    //obj->table colum=request eken ena textfieldname
    $task->task=$request->task;
    $task->save();


//database value print output ....Tasks mean->Model
    $data=Tasks::all();
   // dd($data);

    //nawatha me page eka load wenna 
    //return redirect('/Task');
    
    //Task-->Route   tasks-->varriable
    return view('Task')->with('tasks',$data);
    
}
//Action print

public function Update($id){
//task--variable   Tasks--model    
$task=Tasks::find($id); 
//status kynne coloum eka table eka ----editing status
$task->status=1;
$task->save();

return redirect()->back(); 
}


//Action print change
public function Updatenotcomplete($id){
    //task--variable   Tasks--model    
    $task=Tasks::find($id); 
    //status kynne coloum eka table eka ----editing status
    $task->status=0;
    $task->save();
    
    return redirect()->back(); 
    }

//Delete query
public function DeleteTask($id){
    //task--variable   Tasks--model    
    $task=Tasks::find($id); 
     
    $task->delete();
    
    return redirect()->back(); 
    }

//Update query
public function Updatetask($id){
    //task--variable   Tasks--model    
    $task=Tasks::find($id); 
     
    return view('Updatetask')->with('taskdata',$task); 
    }
 


    public function Updatetasked(Request $request){
       $id=$request->id;
       $task=$request->task;
       $data=Tasks::find($id);
       $data->task=$task;
       $data->save();
       $data=Tasks::all();


       return view('Task')->with('tasks',$data);
         
        }
     
    


}





