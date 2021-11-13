@extends('layouts.master')

@section('content')

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hospital Create</h4>
                    <form class="form-sample" action="{{route('hospital.store')}}" method="POST">
                        @csrf
                        <p class="card-description">
                            Personal info
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" value="{{old('email')}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="card-description">
                            Hospital Details
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Open Time</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" name="open_time" value="{{old('open_time')}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Close Time</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" name="close_time" value="{{old('close_time')}}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Covid Vaccine Available ?</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="is_covid_vaccine" id="is_covid_vaccine1" value="1" checked="">
                                                Yes
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="is_covid_vaccine" id="is_covid_vaccine2" value="0">
                                                No
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Covid Drug Available ?</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="is_covid_drug" id="is_covid_drug1" value="1" checked="">
                                                Yes
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="is_covid_drug" id="is_covid_drug2" value="0">
                                                No
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Covid Test Available ?</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="is_covid_test" id="is_covid_test1" value="1" checked="">
                                                Yes
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="is_covid_test" id="is_covid_test2" value="0">
                                                No
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Ambulance Contact Number</label>
                                    <div class="col-sm-9">
                                        <input  type="number" class="form-control" name="ambulance_contact" value="{{old('ambulance_contact')}}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Total Number of General Bed</label>
                                    <div class="col-sm-9">
                                        <input  type="number" class="form-control" name="total_general_bed" value="{{old('total_general_bed')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Number  of Used General Bed</label>
                                    <div class="col-sm-9">
                                        <input  type="number" class="form-control" name="used_general_bed" value="{{old('used_general_bed')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Total Number of Covid Bed</label>
                                    <div class="col-sm-9">
                                        <input  type="number" class="form-control" name="total_covid_bed" value="{{old('total_covid_bed')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Number  of Used Covid Bed</label>
                                    <div class="col-sm-9">
                                        <input  type="number" class="form-control" name="used_covid_bed" value="{{old('used_covid_bed')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">latitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="lat">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">longitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="long">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Announcement</label>
                                    <textarea name="announcement" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
