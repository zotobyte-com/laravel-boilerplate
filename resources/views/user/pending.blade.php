@extends('layouts.master')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Filters</h4>
                <form class="form-inline filter-form" action="{{route('user.pending')}}" method="GET">
                    <label class="sr-only" for="inlineFormInputName2">Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" name="name" value="{{request()->input('name')}}" id="inlineFormInputName2" placeholder="Name">
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pending Users</h4>
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
                            <th>Role</th>
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
                                <td>{{$user->roles()->first()->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <i class="ti-user"></i> {{$user->status->value}}
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1" style="">
                                            <h6 class="dropdown-header"
                                                onclick="event.preventDefault();
                                                document.getElementById('change-status-form').submit();">
                                                Active
                                            </h6>
                                            <form id="change-status-form" action="{{ route('user.status.update') }}" method="POST" style="display: none;">
                                                @csrf
                                                <input type="hidden" name="status_id"  value="{{$userStatus[1]}}">
                                                <input type="hidden" name="user_id"  value="{{$user->id}}">
                                            </form>
                                        </div>
                                    </div>
{{--                                    <label class="badge badge-{{$user->status->meta['color']}}">{{$user->status->value}}</label>--}}
                                </td>
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


@push('script')
{{--    <script>--}}
{{--        $(document).ready(function (){--}}

{{--        $('.filter-form input').on('change',function (){--}}
{{--           $('.filter-form').submit();--}}
{{--        });--}}

{{--        });--}}
{{--    </script>--}}
@endpush
