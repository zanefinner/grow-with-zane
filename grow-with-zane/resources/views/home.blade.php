@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th>Places to Go</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td><a href="/home">Home (here)</a></td>
                                </tr>
                                <tr>

                                    <td><a href="https://www.example.com/courses-how-tos">Courses/How-to's</a></td>
                                </tr>
                                <tr>

                                    <td><a href="/posts">Community Posts</a></td>
                                </tr>
                                <tr>

                                    <td><a href="/grow_journals">Grow Journals</a></td>
                                </tr>
                                <!-- Add more rows or links as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
