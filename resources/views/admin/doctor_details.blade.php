@extends('admin.layouts.app')
@section('content')

<div>
    <div class="row mb-5 mt-5 ">
        <div class="col-md">
          <div class="card mb-3 " style="height: 200px">
            <div class="row g-0">
              <div class="col-md-5 ">
                <img class="card-img card-img-left " height='200' src="{{asset('user/assets/images/prof-Khin-TUn.jpg')}}" alt="Card image" />
              </div>
              <div class="col-md-7" >
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
          <div class="card mb-3" style="height: 200px">
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
        <div class="col-4 offset-4">
            <div class="text-center">
                <h3>Contact</h3>
            </div>
            <table class="table table-striped ">
                <tr>
                    <td ><i class="fa-solid fa-phone me-2"></i>Phone</td>
                    <td>:</td>
                    <td><a href="tel:+{{$doctor->phone}}">{{$doctor->phone}}</a></td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-envelope me-2"></i>Email</td>
                    <td>:</td>
                    <td><a href="mailto:{{$doctor->email}}">{{$doctor->email}}</a>
                    </td>
                </tr>
            </table>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" >Edit</button>
            </div>
           

        </div>
      </div>
</div>

@endsection