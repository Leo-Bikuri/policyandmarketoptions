@extends('layouts.master')
@section('title', 'Home')

 @section('content')

     <div id="carousel" class="carousel slide  mx-auto w-75 mt-5 mb-5" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active home-carousel" data-bs-interval="10000">
                 <img src="{{asset('images/carousel-1.jpg')}}" class="d-block w-100 h-100" alt="...">
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



    <div class="container mt-5 mb-5">
        <div class="row pt-5 pb-5">
            <div class="col-md-6 text-center d-flex flex-column align-self-center fs-1 text-warning">
                About Us
            </div>
            <div class="col-md-6 fs-4 border-warning border-start">
                Established in 2014, PMO has its offices in Nairobi, Kenya with prospects to grow in the East Africa Region. We work in agricultural value chains providing development consulting services and implementation of donor funded programs to facilitate effective market-oriented and private sector-led development, resilience building, organizational capacity development, entrepreneurship and employment opportunities for all including youth and women.
                We work in partnership with development organizations, international consulting firms, the private sector, and governments to deliver programs aimed at improving livelihoods, improving competitiveness, and building the resilience of communities.
            </div>
        </div>
    </div>

     <div class="container mb-5 h-50 text-center">
         <p class="text-warning text-center pt-3" style="font-size: 40px;  font-weight: bold">Our Partners</p>
            <div class="row d-flex justify-content-around mx-0">
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-right" data-aos-duration="2000"><img src="{{asset('/images/partners/1.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-right" data-aos-duration="2000"><img src="{{asset('/images/partners/2.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-left" data-aos-duration="2000"><img src="{{asset('/images/partners/14.jpg')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-left" data-aos-duration="2000"><img src="{{asset('/images/partners/3.png')}}" alt="" class="patner-logo mt-0"></div>

            </div>
             <div class="row d-flex justify-content-around mx-0">
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-right" data-aos-duration="2000"><img src="{{asset('/images/partners/4.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-right" data-aos-duration="2000"><img src="{{asset('/images/partners/5.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-left" data-aos-duration="2000"><img src="{{asset('/images/partners/6.png')}}" alt="" class="patner-logo mt-0"></div>
                 <div class="col-3 flex-column align-self-center" data-aos="fade-up-left" data-aos-duration="2000"><img src="{{asset('/images/partners/13.png')}}" alt="" class="patner-logo mt-0"></div>
             </div>
             <div class="row d-flex justify-content-around mx-0">
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-right" data-aos-duration="2000"><img src="{{asset('/images/partners/7.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-right" data-aos-duration="2000"><img src="{{asset('/images/partners/8.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-left" data-aos-duration="2000"><img src="{{asset('/images/partners/9.png')}}" alt="" class="patner-logo"></div>
                 <div class="col-3 flex-column align-self-center" data-aos="fade-up-left" data-aos-duration="2000"><img src="{{asset('/images/partners/10.png')}}" alt="" class="patner-logo mt-0"></div>
             </div>
            <div class="row d-flex justify-content-around mx-0">
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-right" data-aos-duration="2000"><img src="{{asset('/images/partners/11.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up" data-aos-duration="2000"><img src="{{asset('/images/partners/12.png')}}" alt="" class="patner-logo mt-0"></div>
                <div class="col-3 flex-column align-self-center" data-aos="fade-up-left" data-aos-duration="2000"><img src="{{asset('/images/partners/15.png')}}" alt="" class="patner-logo mt-0 landolakes"></div>

            </div>

     </div>

 @endsection
