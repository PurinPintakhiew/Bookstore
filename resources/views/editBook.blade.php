<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Book</title>
  </head>
  <body>
  <section style="paddidnind-top:60px;margin-left: 500px;">
        <div class="container" >
            <div class="col-md-6" offset-md-3>
                <div class="card-header">
                    <div class="card-header">
                        <h3>Edit Book</h3>
                        <a href="\admin/home" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('up'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('up')}}
                        </div>
                        @endif
                        <form  action="{{route('up')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$data['id']}}" class="form-control">
                                <label for="name">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{$data['title']}}">
                                <label for="Category">Category</label>
                                <select name="category" required class="form-control" >
                                    <option value="{{$data['category']}}">{{$data['category']}}</option>                               
                                    <option value="-">-</option>
                                    <option value="นิยาย">นิยาย</option>
                                    <option value="มังงะ">มังงะ</option>
                                    <option value="ประวัติศาสตร์">ประวัติศาสตร์</option>
                                </select>
                                <label for="Author">Author</label>
                                <input type="text" name="Author" class="form-control" value="{{$data['author']}}">
                                <label for="Publisher">Publisher</label>
                                <input type="text" name="Publisher" class="form-control" value="{{$data['publisher']}}" >
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" class="form-control" value="{{$data['date']}}">
                            </div>
                            <div class="form-group">
                            <label for="file">Choose Image</label>
                                <input type="file" name="file" class="form-control" onchange="previewFile(this);" value="{{$data->images}}"/>                                
                                <img id="previewImg" alt="Image" style="max-width:130px;margin-top:20px;" />
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
               function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
  </body>
</html>