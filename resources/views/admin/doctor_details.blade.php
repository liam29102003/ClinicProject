@extends('admin.layouts.app')
@section('content')

<div>
    <div class="row mb-5 mt-5 ">
        <div class="col-md">
          <div class="card mb-3 " style="background-color:#F8F0C4 !important; color:#9d926a !important" >
            <div class="row ">
              <div class="col-md-5 col-12">
                <img class="card-img card-img-left " height='200' src="{{asset('storage/'.$doctor->image)}}" alt="Card image" />
              </div>
              <div class="col-md-7 col-12" >
                <div class="card-body">
                  <h5 class="card-title">{{$doctor->name}}</h5>
                  <p class="card-text">
                    {{$doctor->speciality}}
                  </p>
                  <p class="card-text">
                    {{$doctor->qualification}}
                  </p>
                 
                  <p class="card-text"><small class="text-muted">Last updated {{$doctor->updated_at}}</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md" >
          <div class="card mb-3"  style="background-color:#F8F0C4 !important; color:#9d926a !important; height: 200px" >
            <div class="row g-0">
              <div class="col-md">
                <div class="card-body">
                  <h5 class="card-title text-center text-decoration-underline">Bio</h5>
                  <p class="card-text">
                    {{$doctor->bio}}
                  </p>
                  <p class="card-text"><small class="text-muted">Last updated {{$doctor->updated_at}}</small></p>
                </div>
              </div>
               
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5 mt-5 ">
        <div class="col-md-4 offset-md-4">
            <div class="text-center">
                <h3  style="color:#9d926a !important" class="mb-2">Contact</h3>
                <hr class="mb-3" style="margin:auto; width:40%; color:#9d926a">
            </div>
            <table class="table  ">
                <tr  style="color:#9d926a !important">
                    <td ><i class="fa-solid fa-phone me-2"></i>Phone</td>
                    <td>:</td>
                    <td><a href="tel:+{{$doctor->phone}}"  style="color:#9d926a !important">{{$doctor->phone}}</a></td>
                </tr>
                <tr  style="color:#9d926a !important">
                    <td><i class="fa-solid fa-envelope me-2"></i>Email</td>
                    <td>:</td>
                    <td><a href="mailto:{{$doctor->email}}"  style="color:#9d926a !important">{{$doctor->email}}</a>
                    </td>
                </tr>
            </table>
            <div class="text-center">
                <a href="{{route('doctor.edit',$doctor->id)}}" wire:navigate type="submit" class="btn btn-primary" >Edit</a>
            </div>
           

        </div>
      </div>
</div>

@endsection