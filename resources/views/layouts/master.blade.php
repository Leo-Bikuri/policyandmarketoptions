<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1b51ddf955.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('/images/favicon.png')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <style >
         @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Ropa+Sans&display=swap');
         body {
             font-family: 'Ropa Sans', sans-serif;
         }


         .home-carousel{
             height:480px!important;
         }
         .carousel-control-prev-icon {
             background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffcd39'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e") !important;
         }

         .carousel-control-next-icon {
             background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffcd39'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
         }
         .fade{
             opacity: 1;
         }
         .patner-logo{
             width: 120px;
         }
         .patner-logo.landolakes{
             width: 200px;
         }
         .method{
             opacity: 0;
         }
         .socials {
             margin:0;
             padding:0;
             display:flex;
         }

         .socials li {
             list-style: none;
         }

         .socials li a {
             position: relative;
             width:60px;
             height:60px;
             display:block;
             text-align:center;
             margin:0 10px;
             border-radius: 50%;
             padding: 6px;
             box-sizing: border-box;
             text-decoration:none;
             box-shadow: 0 10px 15px rgba(0,0,0,0.3);
             background: linear-gradient(0deg, #ddd, #fff);
             transition: .5s;
         }

         .socials li a:hover {
             box-shadow: 0 2px 5px rgba(0,0,0,0.3);
             text-decoration:none;
         }

         .socials li a .fab {
             widht: 100%;
             height:100%;
             display:block;
             background: linear-gradient(0deg, #fff, #ddd);
             border-radius: 50%;
             line-height: calc(60px - 12px);
             font-size:24px;
             color: #262626;
             transition: .5s;
         }

         .socials li:nth-child(1) a:hover .fab {
             color: #3b5998;
         }

         .socials li:nth-child(2) a:hover .fab {
             color: #00aced;
         }

         .socials li:nth-child(3) a:hover .fab {
             color: #dd4b39;
         }

         .socials li:nth-child(4) a:hover .fab {
             color: #007bb6;
         }

         .socials li:nth-child(5) a:hover .fab {
             color: #e4405f;
         }
         .read-more:hover{
             transform: translateY(5px);
             transition: 0.5s;
         }

         .contact-form-wrapper {
             padding: 50px 0;
         }

         .contact-form {
             padding: 30px 40px;
             background-color: #230465;
             border-radius: 12px;
             max-width: 400px;
         }

         .contact-form textarea {
             resize: none;
         }

         .contact-form .form-input,
         .form-text-area {
             background-color: #f0f4f5;
             height: 50px;
             padding-left: 16px;
         }

         .contact-form .form-text-area {
             background-color: #f0f4f5;
             height: auto;
             padding-left: 16px;
         }

         .contact-form .form-control::placeholder {
             color: #aeb4b9;
             font-weight: 500;
             opacity: 1;
         }

         .contact-form .form-control:-ms-input-placeholder {
             color: #aeb4b9;
             font-weight: 500;
         }

         .contact-form .form-control::-ms-input-placeholder {
             color: #aeb4b9;
             font-weight: 500;
         }

         .contact-form .form-control:focus {
             border-color: #f33fb0;
             box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.07), 0 0 8px #f33fb0;
         }

         .contact-form .title {
             text-align: center;
             font-size: 24px;
             font-weight: 500;
         }

         .contact-form .description {
             color: #aeb4b9;
             font-size: 14px;
             text-align: center;
         }

         .contact-form .submit-button-wrapper {
             text-align: center;
         }

         .contact-form .submit-button-wrapper input {
             border: none;
             border-radius: 4px;
             background-color: #f23292;
             color: white;
             text-transform: uppercase;
             padding: 10px 60px;
             font-weight: 500;
             letter-spacing: 2px;
         }

         .contact-form .submit-button-wrapper input:hover {
             background-color: #d30069;
         }

     </style>
    <title>Policy and Market Options</title>
</head>
<body>
@include('partials.nav')

@yield('content')

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <script src="{{asset('/js/fade.js')}}"></script>
</body>
</html>
