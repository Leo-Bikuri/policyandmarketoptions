@extends('layouts.master')
@section('title', 'Home')

 @section('content')

     <div id="carousel" class="carousel slide  mx-auto w-75 mt-5 mb-5" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active home-carousel" data-bs-interval="10000">
                 <img src="{{asset('images/1.jpg')}}" class="d-block w-100 h-100" alt="...">
             </div>
             <div class="carousel-item home-carousel" data-bs-interval="2000">
                 <img src="{{asset('images/2.jpg')}}" class="d-block w-100 h-100" alt="...">
             </div>
             <div class="carousel-item home-carousel">
                 <img src="{{asset('images/3.jpg')}}" class="d-block w-100 h-100" alt="...">
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
             <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
             <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>

{{--     <div class="container mt-5 mb-5">--}}
{{--         <div class="row text-warning">--}}
{{--             <h1 class="text-center">Welcome to Policy and Market Options<br>--}}
{{--                <small class="text-center">Providing market driven solutions for Enterprise development</small>--}}
{{--             </h1>--}}
{{--         </div>--}}
{{--     </div>--}}



 @endsection
