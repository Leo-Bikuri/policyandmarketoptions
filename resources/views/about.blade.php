@extends('layouts.master')
@section('title', 'About us')

@section('content')

    <div class="container">
        <p class="text-warning text-center pt-3" style="font-size: 40px;  font-weight: bold">What we do</p>
        <div class="row">
            <div class="col-6 text-center border-warning border-end">
                <img src="{{ asset('/images/inclusive.jpg') }}" class="" alt="" style="height: 275px; ">
            </div>
            <div class="col-6">
                <h2 style="color:#320592;" class="text-center">Inclusive Value Chains</h2>
                <p class="text-center">Improved relationships between value chain actors and creation of an enabling environment through responsive policies is key to inclusivity.  We employ market-based interventions aimed at strengthening value chains for improved incomes and livelihoods through increased productivity, improved service delivery and market access for small holder famers including youth and women.  We create partnerships to increase the efficiency of supply chains, improve food safety, reduce food losses, and promote inclusive value chains that are profitable for everyone involved. </p>
                <p class="text-center read-more"><a href="{{route('inclusive')}}" class="link-warning">Read more <i class="fa-solid fa-arrow-right-long"></i></a></p>
            </div>
        </div>

        <div class="row mt-5">
        <div class="col-6  border-end border-warning">
                <h2 style="color:#320592;" class="text-center">Food Safety</h2>
                <p class="text-center">Food safety is a major challenge in Kenya. Food for the domestic markets is to a large extent produced and distributed without sufficient hygiene provisions. Contamination levels and pesticide residues are not under sufficient control. The situation is worsened by legislation that is so fragmented that efficient enforcement is difficult. The strategies within the more than 10 central competent authorities dealing with food safety are not coordinated or realistic. We have supported food safety efforts at government level both County and National; private sector companies and producer organizations.</p>
                <p class="text-center read-more"><a href="{{route('safety')}}" class="link-warning">Read more <i class="fa-solid fa-arrow-right-long"></i></a></p>
            </div>
            <div class="col-6 text-center">
                <img src="{{ asset('/images/safety1.jpg') }}" class="" alt="" style="height: 275px; ">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-6 text-center">
                <img src="{{ asset('/images/enterprise.jpeg') }}" class="" alt="" style="height: 275px; ">
            </div>
            <div class="col-6  border-warning border-start">
                <h2 style="color:#320592;" class="text-center">Enterprise Development</h2>
                <p class="text-center">Adoption of entrepreneurship in a small holder economy is critical to wealth creation, job creation and economic development of a nation. We work with small holder farmers and producer organizations to lead them on a path of entrepreneurship as opposed to subsistence production.</p>
                <p class="text-center read-more"><a href="{{route('enterprise')}}" class="link-warning">Read more <i class="fa-solid fa-arrow-right-long"></i></a></p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-6">
                <h2 style="color:#320592;" class="text-center">Research and Knowledge Dissemination</h2>
                <p class="text-center">Our research offers the foundation for government policies and company decision making and investments. We conduct research on emerging technologies, implications of policy on investments and life patterns among others. </p>
                <p class="text-center read-more"><a href="{{route('research')}}" class="link-warning">Read more <i class="fa-solid fa-arrow-right-long"></i></a></p>
            </div>
            <div class="col-6 text-center border-warning border-start">
                <img src="{{ asset('/images/research.jpg') }}" class="" alt="" style="height: 275px; ">
            </div>
        </div>
    </div>




@endsection




{{--<div class="col-3 text-center">--}}
{{--    <img src="{{ asset('/images/inclusive.jpg') }}" class="img-thumbnail" alt="" style="height: 275px;">--}}
{{--</div>--}}
{{--<div class="col-3 text-center">--}}
{{--    <img src="{{ asset('/images/research.jpg') }}" class="img-thumbnail" alt="" style="height: 275px;">--}}
{{--</div>--}}
{{--<div class="col-3 text-center">--}}
{{--    <img src="{{ asset('/images/enterprise.jpg') }}" class="img-thumbnail" alt="" style="height: 275px;">--}}
{{--</div>--}}
