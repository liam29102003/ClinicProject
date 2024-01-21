@extends('admin.layouts.app')
@section('content')
    <div class="doctor-profile py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-3 shadow-sm" style="background-color: #F6E8B1 !important; color:#9d926a !important">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" src="{{ asset('storage/' . $doctor->image) }}" alt="doctor dp">
                            <h3 class="mt-3 mb-0">Dr.{{ $doctor->name }}</h3>

                            <h5 class="mb-0 mt-2">Cardiologist</h5>
                            <a href="{{ route('doctor.edit', $doctor->id) }}" wire:navigate type="submit"
                                class="btn mt-2 btn-primary w-25 text-center mx-auto "
                                style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important ">
                                <div>Edit</div>

                            </a>
                            <br>
                            <a href="{{ route('doctor.edit', $doctor->id) }}" wire:navigate type="submit"
                                class="btn mt-2 btn-primary w-75 text-center mx-auto "
                                style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important ">
                                <div>Add Schedule</div>
                            </a>
                        </div>

                    </div>
                    
                    <livewire:add-schedule :doctor_id="$doctor->id" />

                </div>
                <div class="col-lg-8">
                    <div class="card shadow-sm" style="background-color: #F6E8B1 !important; color:#9d926a !important">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Qualification</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->qualification }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Specialization</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->speciality }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Experience</th>
                                    <td width="2%">:</td>
                                    <td>10 years</td>
                                </tr>
                                <tr>
                                    <th width="30%">Gender</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->gender }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Schedule</th>
                                    <td width="2%">:</td>
                                    <td>
                                        @foreach ($doctor->schedule as $schedule)
                                            <p class="mb-0">{{ $schedule->day }}:{{ $schedule->from }} -
                                                {{ $schedule->to }}</p>
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                    <th width="30%">Joined Date</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->created_at }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="height: 26px"></div>
                    <div class="card shadow-sm" style="background-color: #F6E8B1 !important; color:#9d926a !important">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="fas fa-map-marked-alt pr-1"></i>Contact Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered ">
                                <tr>
                                    <th width="30%">Phone</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->phone }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Email</th>
                                    <td width="2%">:</td>
                                    <td>{{ $doctor->email }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
