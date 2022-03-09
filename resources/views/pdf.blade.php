<html>
<header>
<title>pdf</title>
<meta http-equiv="Content-Language" content="th" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {
font-family: 'sarabun', sans-serif;
font-size: 20px;
}
</style>
</header>
<body>
    <h1>ตารางการยืม</h1>
    <table class="table table-bordered" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">รหัสผู้ยืม</th>
      <th scope="col">รหัสหนังสือ</th>
      <th scope="col">วันที่ยืม</th>
      <th scope="col">กำหนดวันส่งคืน</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
    </tr>
  </thead>
    <tbody>
        <tr>
            <td>{{$library->id}}</td>
            <td>{{$library->cus_name}}</td>
            <td>{{$library->ID_Book}}</td>
            <td>{{$library->Borrowed_date}}</td>
            <td>{{$library->Return_date}}</td>
        </tr>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>