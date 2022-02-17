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

    <div class="container mt-5 mb-5">
{{--        <p class="text-warning text-center pt-3 mb-5" style="font-size: 30px;  font-weight: bold">About Us</p>--}}
        <div class="row pt-5 pb-5">
{{--            <div class="card mx-auto w-75 shadow p-3 mb-5 bg-body rounded fade-in-right fade">--}}
{{--                <div class="card-body fs-4">--}}
{{--                    Established in 2014, PMO has its offices in Nairobi, Kenya with prospects to grow in the East Africa Region. We work in agricultural value chains providing development consulting services and implementation of donor funded programs to facilitate effective market-oriented and private sector-led development, resilience building, organizational capacity development, entrepreneurship and employment opportunities for all including youth and women.--}}
{{--                     <br>--}}
{{--                    We work in partnership with development organizations, international consulting firms, the private sector, and governments to deliver programs aimed at improving livelihoods, improving competitiveness, and building the resilience of communities.--}}
{{--                    <br>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-md-6 text-center d-flex flex-column align-self-center fs-1 text-warning">
                About Us
            </div>
            <div class="col-md-6 fs-4 border-warning border-start">
                Established in 2014, PMO has its offices in Nairobi, Kenya with prospects to grow in the East Africa Region. We work in agricultural value chains providing development consulting services and implementation of donor funded programs to facilitate effective market-oriented and private sector-led development, resilience building, organizational capacity development, entrepreneurship and employment opportunities for all including youth and women.
                We work in partnership with development organizations, international consulting firms, the private sector, and governments to deliver programs aimed at improving livelihoods, improving competitiveness, and building the resilience of communities.
            </div>
        </div>
    </div>

     <div class="container mb-5 h-50 edaf">
         <p class="text-warning text-center pt-3" style="font-size: 30px;  font-weight: bold">Our Partners</p>
            <div class="row d-flex justify-content-around mx-0 method">
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/1.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/2.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/14.jpg')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/3.png')}}" alt="" class="patner-logo mt-0"></div>

            </div>
             <div class="row d-flex justify-content-around mx-0 method">
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/4.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/5.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/6.png')}}" alt="" class="patner-logo mt-0"></div>
                 <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/13.png')}}" alt="" class="patner-logo mt-0"></div>
             </div>
             <div class="row d-flex justify-content-around mx-0 method">
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/7.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/8.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/9.png')}}" alt="" class="patner-logo"></div>
                 <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/10.png')}}" alt="" class="patner-logo mt-0"></div>
             </div>
            <div class="row d-flex justify-content-around mx-0 method">
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/11.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center"><img src="{{asset('/images/partners/12.png')}}" alt="" class="patner-log mt-0"></div>
            </div>

     </div>

     <footer class="w-100 py-4 flex-shrink-0 bg-warning mt-5">
         <div class="container py-4">
             <div class="row gy-4 gx-5">
                 <div class="col-lg-4 col-md-6">
                     <h5 class="h1 text-black">Policy and Market Options</h5>
                     <p class="small text-muted">Providing market driven solutions for Enterprise development</p>
                     <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Policy and Market Options</a></p>
                 </div>
                 <div class="col-lg-4 col-md-6 text-center">
                     <h5 class="text-black mb-3">Quick links</h5>
                     <ul class="list-unstyled text-muted">
                         <li><a href="#" class="text-decoration-none">Home</a></li>
                         <li><a href="#" class="text-decoration-none">About us</a></li>
                         <li><a href="#" class="text-decoration-none">Services</a></li>
                         <li><a href="#" class="text-decoration-none">Contact us</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <h5 class="text-black text-center mb-3">Socials</h5>
                     <p class="small text-muted text-center">Connect with us</p>
                     <ul class="socials">
                         <li class="ico"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                         <li class="ico"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                         <li class="ico"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                         <li class="ico"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                         <li class="ico"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>

 @endsection
