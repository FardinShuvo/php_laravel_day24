@extends('master')

@section('title')
    Home
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-info text-white">FULL NAME</div>
                        <div class="card-body bg-secondary text-white">
                            <form action="{{route('full-name')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">FIRST NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">LAST NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">FULL NAME</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{isset($result) ? $result: ' '}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-info" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
