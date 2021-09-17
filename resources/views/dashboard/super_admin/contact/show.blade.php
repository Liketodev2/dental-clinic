@extends('dashboard.layouts.main')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="col-12">
                <div class="card">
                    <h4 class="card-header">Questions</h4>
                    <div class="card-body">
                        <div class="m-5" >
                            <div class="modal-content">
                                <div class="modal-body px-5">
                                    <div class="form-group">
                                        <label>Are you Male or Female?</label>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input type="radio" id="Male" name="radio-group1" readonly>
                                                <label for="Male" class="{{$additional['radio-group1'] == 'male' ? 'active_tab' : ''}}">Male</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="Female" name="radio-group1" readonly>
                                                <label for="Female" class="{{$additional['radio-group1'] == 'female' ? 'active_tab' : ''}}">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">How old are you?</label>
                                        <input required type="number" name="age" class="form-control" value="{{$additional['age']}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Have you seen a local Dentist?</label>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input type="radio" id="HaveDentist" name="radio-group2"  checked>
                                                <label for="HaveDentist" class="{{$additional['radio-group2'] == 'yes' ? 'active_tab' : ''}}">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="HaveNotDentist" name="radio-group2">
                                                <label for="HaveNotDentist" class="{{$additional['radio-group2'] == 'no' ? 'active_tab' : ''}}">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">What did they suggest?</label>
                                        <textarea readonly name="suggest" id="" class="form-control">{{$additional['suggest']}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label> Did they take a panoramic x-ray?</label>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input   type="radio" id="x-ray"  name="radio-group3" checked>
                                                <label class="{{$additional['radio-group3'] == 'yes' ? 'active_tab' : ''}}" for="x-ray">Yes</label>
                                            </div>
                                            <div>
                                                <input   type="radio" id="not-x-ray" name="radio-group3">
                                                <label class="{{$additional['radio-group3'] == 'no' ? 'active_tab' : ''}}" for="not-x-ray">No</label>
                                            </div>
                                        </div>
                                        <div class="ifYes">
                                            <label for="">Can you upload them?</label>
                                            <div>
                                                <img src="{{asset('uploads/contact/'.$additional['modal_files'])}}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">How’s your general health?</label>
                                        <input  type="text" name="health" class="form-control" value="{{$additional['health']}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">What are you hoping to accomplish with your teeth (specifically)?</label>
                                        <input  type="text" class="form-control" name="teeth" value="{{$additional['teeth']}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">How long have you delayed taking care of the issue due to finances?</label>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input type="radio" id="finances" name="radio-group4" checked>
                                                <label for="finances" class="{{$additional['radio-group4'] == 'yes' ? 'active_tab' : ''}}">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="nofinances" name="radio-group4">
                                                <label for="nofinances" class="{{$additional['radio-group4'] == 'no' ? 'active_tab' : ''}}">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Have you ever visited beautiful Costa Rica?</label>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input type="radio" id="visited" name="radio-group5" checked>
                                                <label for="visited" class="{{$additional['radio-group5'] == 'yes' ? 'active_tab' : ''}}">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="novisited" name="radio-group5">
                                                <label for="novisited" class="{{$additional['radio-group5'] == 'no' ? 'active_tab' : ''}}">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Have you researched Dental Tourism in Costa Rica?</label>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input type="radio" id="visitedDental" name="radio-group6" checked>
                                                <label for="visitedDental" class="{{$additional['radio-group6'] == 'yes' ? 'active_tab' : ''}}">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="novisitedDental" name="radio-group6">
                                                <label for="novisitedDental" class="{{$additional['radio-group6'] == 'no' ? 'active_tab' : ''}}">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">When would you be ready to start work on your teeth?</label>
                                        <input type="date" readonly name="date_teeth" class="form-control" value="{{$additional['date_teeth']}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Would you have someone come with you for the procedure(s)?</label>
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <input  type="radio" id="procedure" name="radio-group7" >
                                                <label for="procedure" class="{{$additional['radio-group7'] == 'yes' ? 'active_tab' : ''}}">Yes</label>
                                            </div>
                                            <div >
                                                <input type="radio" id="noprocedurel" name="radio-group7" checked>
                                                <label for="noprocedurel" class="{{$additional['radio-group7'] == 'no' ? 'active_tab' : ''}}">No</label>
                                            </div>
                                        </div>
                                        <div class=" ifYes">
                                            <label for="">If yes, please give us their:</label>
                                            <input readonly name="additional_name" type="text" class="form-control mb-2" placeholder="Name" value="{{$additional['additional_name']}}">
                                            <input readonly name="additional_email" type="text" class="form-control mb-2" placeholder="Email" value="{{$additional['additional_email']}}">
                                            <input readonly name="additional_age" type="text" class="form-control mb-2" placeholder="Age" value="{{$additional['additional_age']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .active_tab{
        border-bottom: 2px solid green;
    }
</style>
