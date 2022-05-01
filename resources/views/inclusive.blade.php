@extends('layouts.master')
@section('title', 'Food Safety')
@section('content')

    <div class="container" >
        <div class="row" style="background-image: url('{{asset('/images/inclusive.jpg')}}'); background-size: cover; background-position-y: center; background-repeat: no-repeat; min-height: 300px;">
            <div class="col" style="min-height: 300px; background: rgba(0,0,0,0.5);">
                <p class="text-center d-flex align-items-end justify-content-start text-warning h-100" style="font-size: 75px; font-weight: bold">Inclusive Value Chains </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 mt-4 border-warning border-end">
                <p style="line-height: 40px;">Improved relationships between value chain actors and creation of an enabling environment through responsive policies is key to inclusivity.  We employ market-based interventions aimed at strengthening value chains for improved incomes and livelihoods through increased productivity, improved service delivery and market access for small holder famers including youth and women.  We create partnerships to increase the efficiency of supply chains, improve food safety, reduce food losses, and promote inclusive value chains that are profitable for everyone involved.</p>
            </div>
            <div class="col-6">
                <h3 style="color: #320592;">Our Approach</h3>
                <ul>
                    <li>
                        <p><span style="font-weight: bold;">Improved production of quality safe food.</span><br>We provide technical assistance to enable small holder farmers improve their productivity. To achieve sustainability, we work with other value chain players through Agribusiness Cluster Model while employing climate smart practices for environmental sustainability.</p>
                    </li>
                    <li>
                        <p><span style="font-weight: bold;">Developing training materials and training.</span><br>We identify areas of training and develop simplified, illustrative training modules covering a wide range of training topics.</p>
                    </li>
                    <li>
                        <p><span style="font-weight: bold;">Producer organization formation and strengthening.</span><br>Access to high volume, high value markets require producers to meet market requirements both in terms of volume, quality, and safety. We do this through mobilization of farmers, building their capacity to increase productivity, produce aggregation and organizational capacity building. Organizational  includes developing and improving governance and financial management structures within the farmer organizations, business planning, strategic planning and linkages to markets. Organized groups enjoy economies of scale in purchase of inputs, ability to negotiate better prices and services and can lobby for better policies and improved service delivery by governments.</p>
                    </li>
                    <li>
                        <p><span style="font-weight: bold;">Access to Markets and services.</span><br>We work with producer organizations to conduct market assessment to identify and address bottlenecks in the supply chains. We then employ the necessary interventions to unlock the bottleneck and provide the necessary linkages to enable full exploitation of the market potential for the commodities produced.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
