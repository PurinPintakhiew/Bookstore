@extends('layouts.app')

@section('content')
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="\images/user.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>I am {{ Auth::user()->name }}</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="admin/home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>List Book</a> 
    <a href="\author" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Author</a> 
    <a href="\library" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-table fa-fw w3-margin-right"></i>ตารางการยืมหนังสือ</a>
    <a href="\publisher" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>สำนักพิมพ์</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>รายการหนังสือ</b></h1>
    <!-- <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <a href="\admin/home" class="w3-button w3-black">ALL</a>
      <a href="\addBook" class="w3-button w3-white">ADD</a> 
    </div> -->
    </div> 
  </header>
 
<table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">รหัสผู้ยืม</th>
      <th scope="col">รหัสหนังสือ</th>
      <th scope="col">วันที่ยืม</th>
      <th scope="col">กำหนดวันส่งคืน</th>
      <th scope="col">แก้ไข/ลบ</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    </tr>
  </thead>
    <tbody>
        @foreach($library as $library)
      <tr>
        <th scope="row">{{$library->id}}</th>
        <td>{{$library->cus_name}}</td>
        <td>{{$library->ID_Book}}</td>
        <td id="d">{{$library->Borrowed_date}}</td>
        <td id="rd">{{$library->Return_date}}</td>
        <!-- <td id="re"></td> -->
        <td>
            <a href="/print/{{$library->id}}" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i></a>
            <a href="/delete/{{$library->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
        @endforeach
    </tbody>
</table>

<script>
// Script to open and close sidebar
// var x = document.getElementById("d").value;
// document.getElementById("re").innerHTML = x;

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
@endsection
