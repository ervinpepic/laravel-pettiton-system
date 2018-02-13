@extends('petitions.master')

@section('content')
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Zip code</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($petitions as $petition)
                        <tr>
                            <td>{{ $petition->firstname }}</td>
                            <td>{{ $petition->lastname }}</td>
                            <td>{{ $petition->email_address }}</td>
                            <td>{{ $petition->zipcode }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    @endsection