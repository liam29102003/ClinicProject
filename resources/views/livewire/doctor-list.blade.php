{{-- <div>
    @foreach($doctors as $doctor)
    <div>
        {{$doctor->name}}
    </div>
        
    @endforeach
</div> --}}

<div>
    <div class="container mb-4" >
        <div class="row">
            <div class="col-10 offset-1  mt-5">
                <div class="text-center text-black mb-4">
                    <h3>DOCTORS</h3>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach($doctors as $doctor)
                        <div class="col-lg-4 p-0  mb-3 wire:key='{{$doctor->id}}'">
                            <a href="{{route('docDetail',$doctor->id)}}" wire:navigate class="card doc-card w-75 text-center shadow" style="">
                                <img src="{{asset('user/assets/images/prof-Khin-TUn.jpg')}}" class="w-100 doc-img " alt="" style="">
                                <p class="fs-4   mb-0 mt-3" style="margin: auto;">{{$doctor->name}}</p>
                                <div class="px-1 mb-1 doc-text" style="">{{$doctor->speciality}}</div>
                                <div class="mb-2">{{$doctor->qualification}}</div>
                                
                            </a>
                        </div>
                        @endforeach
                       
                        
                       
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

