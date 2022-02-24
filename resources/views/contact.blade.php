@extends('layouts.master')
@section('title', 'Contact Us')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="row mx-auto">
                    <div class="col-sm-8 col-sm-offset-2 mx-auto">
                        <div class="card p-3 shadow bg-body rounded">
                            <div>
                                <h2>CONTACT US</h2>
                            </div>
                            <form method="post" data-form-title="CONTACT US">
                                <input type="hidden" data-form-email="true">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" data-form-field="Subject">
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" placeholder="Message" rows="5" data-form-field="Message"></textarea>
                                </div>
                                <div class="mt-3 text-center">
                                    <button type="submit" class="btn text-warning rounded-pill" style="background: transparent; border: solid 2px #320592; min-width: 100px;">SEND</button>
                                </div>
                            </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
