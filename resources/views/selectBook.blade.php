<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ยืมหนังสือ</title>
  </head>
  <body>
  <section style="paddidnind-top:60px;margin-left: 500px;">
        <div class="container" >
            <div class="col-md-8" offset-md-6>
                <div class="card-header">
                    <div class="card-header">
                        <table>
                        <td><h3>ยืมหนังสือ</h3></td>
                        <td> <a href="/" class="btn btn-primary" style="margin-left:200px">Back</a></td>
                        </table>

                    </div>
                    <div class="card-body">
                        @if(Session::has('select'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('select')}}
                        </div>
                        @endif
                        <table>
                        <td class="card-header">
                            <img src="{{asset('images')}}/{{$data->images}}" style="max-height:200px;">
                        </td>
                        <td>

                        <form  action="{{route('save_L')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            
                                <label for="name">ID User</label>
                                <!-- <input type="hidden" name="uid" value="{{Auth::user()->id}}" > -->
                                <input type="text" name="iduser" class="form-control" size="50" value="{{Auth::user()->id}}"  readonly >
                                <label for="name">ID Book</label>
                                <input type="text" name="idBook" class="form-control" size="50" value="{{$data->id}}"  readonly>
                                <label for="date">วันที่ยืม</label>
                                <input type="date" id="date" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                <label for="date">วันที่จะส่ง</label>
                                <input type="date" id="redate" name="redate" class="form-control" >
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                        </td>
                        </table>
                        
                        
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