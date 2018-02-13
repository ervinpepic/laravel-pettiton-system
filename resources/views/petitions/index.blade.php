@extends('petitions.master')

@section('content')
<!-- Header -->

        <h2 class="text-uppercase mb-5">Vote system</h2>
            <h2 class="text-center text-uppercase text-secondary mb-5">Place your info for vote</h2>
            <hr class="mb-5">
            <div class="row">
                <div class="col">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Your votes for petition was saved.</strong> {{ $message }}.
                        </div>
                    @endif
                    {!! Form::open(['route' => 'petitions.store', 'method' => 'POST']) !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {!! Form::text('firstname', null, ['placeholder'=>'Enter your first name', 'class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('lastname', null, ['placeholder'=>'Enter your last name', 'class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                 {!! Form::email('email_address', null, ['placeholder'=>'Enter your email example@ext.com', 'class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::text('zipcode', null, ['placeholder'=>'Zip code example 84310-54', 'class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" name="button">Vote Now</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

@endsection
