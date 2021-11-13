@extends('layouts.master')

@section('content')
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Filters</h4>
                    <form class="form-inline filter-form" action="{{route('user.index')}}" method="GET">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="name" value="{{request()->input('name')}}" id="inlineFormInputName2" placeholder="Name">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <p class="card-description">
{{--                        Add class <code>.table-hover</code>--}}
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><img src="{{$user->profile_image_url}}" alt="image"></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
{{--                                    <td><label class="badge badge-{{$user->status->meta['color']}}">{{$user->status->value}}</label></td>--}}
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                    {{$users->links()}}
                </div>
            </div>
        </div>

@endsection
