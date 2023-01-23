<!DOCTYPE html>
<html lang="en">
<head>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="text-center">
    <h1>Daily Task  </h1>  
                <div class="col-md-12">
                    <!-- FORM -->
                <!-- validation     -->
                <!-- error ekta kamthi namak denna pluwn -->
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                {{$error}}
                </div>
                @endforeach
                <!-- end validation     -->
                    <form method="post" action="/saveTask">
                    {{csrf_field()}}    
                    <input type="text" class="form-control" name="task" placeholder="Enter Your Name">
                    <br/>
                    <input type="submit" class="btn btn-primary" value="SAVE">      
                    <input type="submit" class="btn btn-warning" value="CLEAR">  
                    <br/>
                    </form>

                    <!-- TABLE     -->
                    
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>


                    <!-- Table print    tasks array eka task varriable ekta samana we-->
                    @foreach($tasks as $task)                        
                        <tr>
                        <td>{{$task->id}}</td>    
                        <td>{{$task->task}}</td>
                        <td>
                            @if($task->status)
                            <button class="btn btn-success">Completed</button>
                            @else
                            <button class="btn btn-warning">Not Completed</button>
                            @endif
                        </td> 
                        <td>
                             @if(!$task->status)
                            <a href="/markascomplted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                             @else
                             <a href="/markasnotcomplted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
                             @endif
                             <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                             <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>

                            </td>     
                        </tr>
                    @endforeach    
                    </table>
                    <br/>
                </div>      
    </div>    
    </div>
</body>
</html>