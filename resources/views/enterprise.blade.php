@extends('layouts.master')
@section('title', 'Food Safety')
@section('content')

    <div class="container" >
        <div class="row" style="background-image: url('{{asset('/images/enterprise.jpeg')}}'); background-size: cover; background-position-y: center; background-repeat: no-repeat; min-height: 300px;">
            <div class="col" style="min-height: 300px; background: rgba(0,0,0,0.5);">
                <p class="text-center d-flex align-items-end justify-content-start text-warning h-100" style="font-size: 75px; font-weight: bold">Enterprise Development</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-4 border-warning border-end">
                <p style="line-height: 40px;">Adoption of entrepreneurship in a small holder economy is critical to wealth creation, job creation and economic development of a nation. We work with small holder farmers and producer organizations to lead them on a path of entrepreneurship as opposed to subsistence production.</p>
            </div>
            <div class="col-6">
                <h3 style="color: #320592;">Our Approach</h3>
                <ul>
                    <li>
                        <p><span style="font-weight: bold;">Value Chain Assessments.</span><br>We conduct value chain assessments to identify gaps/constraints in value chains and help organizations to develop interventions that help then create value chain efficiencies and deliver most value for the least cost.</p>
                    </li>
                    <li>
                        <p><span style="font-weight: bold;">Improved enterprise governance.</span><br>We work with enterprises to conduct organizational capacity assessments and develop capacity building programs including setting up governance and financial management structures, developing business plans, designing route to market strategies and strategic plans. We help them to establish the human resource required, develop job descriptions and support recruitment.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
