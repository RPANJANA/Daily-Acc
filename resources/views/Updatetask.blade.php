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
    <title>Update Task</title>
  
</head>
<body>
    <div class="container">
        <form action="/updatetasks" method="post">
        {{csrf_field()}}    
        <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
        <input type="hidden" class="form-control" name="id" value="{{$taskdata->id}}"/> 


        <input type="submit" class="btn btn-warning" value="Update"/>
        &nbsp&nbsp;<input type="submit" class="btn btn-danger" value="Cancel"/>

        </form>
    </div>
</body>
</html>