@extends('layouts.master')
@section('title', 'Food Safety')
@section('content')

    <div class="container" >
        <div class="row" style="background-image: url('{{asset('/images/safety.jpg')}}'); background-size: cover; background-position-y: center; background-repeat: no-repeat; min-height: 300px;">
            <div class="col" style="min-height: 300px; background: rgba(0,0,0,0.5);">
                <p class="text-center d-flex align-items-end justify-content-start text-warning h-100" style="font-size: 100px; font-weight: bold">Research and Knowledge Dissemination</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-4 border-warning border-end">
                <p style="line-height: 40px;">Our research offers the foundation for government policies and company decision making and investments. We conduct research on emerging technologies, implications of policy on investments and life patterns among others.</p>
            </div>
            <div class="col-6">
                <h3 style="color: #320592;">Our Approach</h3>
                <ul>
                    <li>
                        <p><span style="font-weight: bold;">Conducting and disseminating Research.</span><br>We undertake research to influence strategy and policy development by governments and companies. The research findings are disseminated to stakeholders for decision making.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
