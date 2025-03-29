@extends('layouts.home')
@section('title','الكورسات')
@section('css')
<link href="{{asset('choosecourse/style.css')}}" rel="stylesheet"/>
@endsection
@section('content')
<section class="hero">
  <h4>ماذا تريد ان تتعلم؟</h4>

  <div class="search-box">
    <i class="fa-solid fa-magnifying-glass fa-solid2"></i>
    <input type="text" placeholder="ابحث هنا..." />
</div>
<div class="space">
<div class="menu-btn">
<label >

٤٨١٦٥كورسات
<i class="fa-solid fa-laptop"></i>
</label>
<label >
  {{$user_counter}} 
<i class="fa-solid fa-user-group"></i>
</label>
</div>
<div class="menu-btn">
<label >

١٦٨٨٥الف درس
<i class="fa-regular fa-circle-play"></i>
</label>
<label >

٤٨٥الف ساعه تعليميه
<i class="fa-regular fa-clock"></i>
</label>
</div>
</div>
</section>
<section class="specials">
<h2>الكورسات التعليمية</h2>
<div class="line"></div>
<div class="special-btn">
  @for ($i = 0; $i < 2 && $i < count($levels); $i++)
    <a href="{{route('course.level.create',['id' =>$i+1])}}"><img class="stars" src="{{ asset($levels[$i]->img) }}" alt=""></a>
  @endfor
</div>
<div class="special-btn">
  @for ($i = 2; $i < 4 && $i < count($levels); $i++)
    <a href="{{route('course.level.create',['id' =>$i+1])}}"><img class="stars" src="{{ asset($levels[$i]->img) }}" alt=""></a>
  @endfor
</div>

<h2>كورسات مميزة</h2>
<div class="line"></div>
<div class="special-btn1 ">
<a style="text-decoration: none;" href="{{route('course.Specialcourse.view',['id'=>2])}}" class="stars"><img style="z-index: -1;" src="{{asset('choosecourse/image/Frame 101344-2.png')}}" alt="">
<div class="star-cont"><div class="star-rat">⭐3.5</div>
<h2>السلوكيات العدوانية</h2>
<div class="starend">
<label >
1
  <i class="fa-regular fa-circle-play"></i>
</label>
<label >
6:32
  <i class="fa-regular fa-clock"></i>
</label>
</div>
</div></a>
<a style="text-decoration: none" href="{{route('course.Specialcourse.view',['id'=>1])}}" class="stars"><img style="z-index: -1;" src="{{asset('choosecourse/image/Frame 101344-1.png')}}" alt="">
<div class="star-cont"><div class="star-rat">⭐3.6</div>
<h2>صعوبة التواصل</h2>
<div class="starend">
<label >
1
  <i class="fa-regular fa-circle-play"></i>
</label>
<label >
39:09
  <i class="fa-regular fa-clock"></i>
</label>
</div>
</div></a> </div>
<div class="special-btn1 ">
<a style="text-decoration: none" href="{{route('course.Specialcourse.view',['id'=>4])}}" class="stars"><img style="z-index: -1;" src="{{asset('choosecourse/image/980.jpg')}}" alt="">
<div class="star-cont"><div class="star-rat">⭐3.7</div>
<h2>العزلة</h2>
<div class="starend">
<label >
1
  <i class="fa-regular fa-circle-play"></i>
</label>
<label >
7:59
  <i class="fa-regular fa-clock"></i>
</label>
</div>
</div></a>
<a style="text-decoration: none" href="{{route('course.Specialcourse.view',['id'=>3])}}" class="stars"><img style="z-index: -1;" src="{{asset('choosecourse/image/الغضب.jpeg')}}" alt="">
<div class="star-cont"><div class="star-rat">⭐3.8</div>
<h2>الغضب والتوتر</h2>
<div class="starend">
<label >
1
  <i class="fa-regular fa-circle-play"></i>
</label>
<label >
15:39
  <i class="fa-regular fa-clock"></i>
</label>
</div>
</div></a> </div>
</section>
@endsection