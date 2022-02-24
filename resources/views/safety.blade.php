@extends('layouts.master')
@section('title', 'Food Safety')
@section('content')

    <div class="container" >
        <div class="row" style="background-image: url('{{asset('/images/safety1.jpg')}}'); background-size: cover; background-position-y: center; background-repeat: no-repeat; min-height: 300px;">
            <div class="col" style="min-height: 300px; background: rgba(0,0,0,0.5);">
                <p class="text-center d-flex align-items-end justify-content-start text-warning h-100" style="font-size: 100px; font-weight: bold">Food Safety</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-4 border-warning border-end">
                <p style="line-height: 40px;">Food safety is a major challenge in Kenya. Food for the domestic markets is to a large extent produced and distributed without sufficient hygiene provisions. Contamination levels and pesticide residues are not under sufficient control. The situation is worsened by legislation that is so fragmented that efficient enforcement is difficult. The strategies within the more than 10 central competent authorities dealing with food safety are not coordinated or realistic. We have supported food safety efforts at government level both County and National; private sector companies and producer organizations.</p>
            </div>
            <div class="col-6">
                <h3 style="color: #320592;">Our Approach</h3>
                <ul>
                    <li>
                        <p><span style="font-weight: bold;">Support Food Business Operators to adopt risk-based approaches to food control.</span><br>We provide support to food business operators to develop and implement HACCP based systems to food control and quality-based payment systems especially for the dairy sector.</p>
                    </li>
                    <li>
                        <p><span style="font-weight: bold;">Creation of coordination mechanisms of food safety.</span><br>We support Counties to establish Food Safety Technical Committees comprised of regulators in food. This facilitates coordination of food safety challenges and avoids duplication and lessens fatigue among food business operators. </p>
                    </li>
                    <li>
                        <p><span style="font-weight: bold;">Improved regulation and Food control.</span><br>We support development policies toward creation of an enabling environment for businesses to thrive while establishing mechanisms in law for improved food control.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
