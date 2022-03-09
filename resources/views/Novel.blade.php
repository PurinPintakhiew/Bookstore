@extends('layouts.app')

@section('content')
<header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>รายการหนังสือ</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <a href="/" class="w3-button w3-black">ALL</a> 
      <a href="manga"class="w3-button w3-white"><i class="fa fa-book w3-margin-right"></i>มังงะ</a>
      <a href="novel"class="w3-button w3-white w3-hide-small"><i class="fa fa-book w3-margin-right"></i>นิยาย</a>
    </div>
    </div>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
  </header>
  <div>
        <table>
        <tbody>
        <?php
            $i = 0;
            foreach($sql as $sql){
                
        ?>
            <td>
            <div class="card" style="width: 22rem;" >
                <img class="card-img-top" src="{{asset('images')}}/{{$sql->images}}" style="">
                <div class="card-body" >
                <h4 class="card-title">{{$sql->title}}</h4>
                    <p>ประเภท : {{$sql->category}}<p>
                    <p>นักเขียน : {{$sql->author}}<p>
                    <a href="/select/{{$sql->id}}&{{Auth::user()->id}}" class="btn btn-primary" >เลือก</a>
                </div>
            </div>&nbsp;
            </td>
            <?php 
            $i++;
            if($i==4){
                echo "<tr></tr>";
                $i = 0;
            }
            }
            ?>
            </tbody>
        </table>    
</div>

@endsection
