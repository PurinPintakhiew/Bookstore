<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Publisher</title>
  </head>
  <body>
  <section style="paddidnind-top:60px;margin-left: 500px;">
        <div class="container" >
            <div class="col-md-6" offset-md-3>
                <div class="card-header">
                    <div class="card-header">
                        <h3>Edit Book</h3>
                        <a href="\publisher" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('up'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('up')}}
                        </div>
                        @endif
                        <form  action="{{route('up_P')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$publisher['id']}}" class="form-control">
                                <label for="name">Publisher Name</label>
                                <input type="text" name="publisher" class="form-control" value="{{$publisher->publisher_name}}">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" value="{{$publisher->addess}}">
                                <label for="Author">Email</label>
                                <input type="text" name="email" class="form-control" value="{{$publisher->email}}">
                                <label for="tel">Number Phone</label>
                                <input type="text" name="tel" class="form-control" value="{{$publisher->tel}}">
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

  </body>
</html>