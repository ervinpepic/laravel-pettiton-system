@extends('petitions.master')

@section('content')
    <div class="row">
        <div class="col-6">
            {!! Form::open(['route' => 'petitions.store', 'method' => 'POST']) !!}
            <strong>First name:</strong>
            {!! Form::text('firstname', null, ['placeholder'=>'Enter your first name', 'class'=>'form-control mb-1']) !!}

            <strong>Last name:</strong>
            {!! Form::text('lastname', null, ['placeholder'=>'Enter your last name', 'class'=>'form-control mb-1']) !!}

            <strong>Email address:</strong>
            {!! Form::email('email_address', null, ['placeholder'=>'Enter your email example@ext.com', 'class'=>'form-control mb-1']) !!}

            <strong>Country zip code:</strong>
            {!! Form::text('zipcode', null, ['placeholder'=>'Zip code example 84310-54', 'class'=>'form-control mb-3']) !!}

            <a class="btn btn-secondary" href="{{ route('petitions.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" name="button">Vote</button>
            {!! Form::close() !!}
        </div>
    </div>
    @endsection