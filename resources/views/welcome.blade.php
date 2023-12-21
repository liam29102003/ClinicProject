{{-- <a href="{{route('login')}}">Login</a> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
    rel="stylesheet"
  />     
  @livewireStyles

    {{-- <link rel="stylesheet" href="{{ asset('user/assets/doctor.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('user/assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/Footer.css') }}">

</head>

<body>
    <livewire:navbar>
        <div class="hero" style="background-image: url('user/assets/images/background.jpg')">
            <div class="text-white">.</div>
            <div class="container1 container text-center text-lg-start">
                <div class="row">
                    <div class="col-lg-6 ">
                        <p class="p1 text-black">သင်ရဲ့ ယုံကြည်အားထားရာ</p>
                        <h2 class="" style="text-shadow: white 1px 0 10px; font-size:70px">EVER CARE</h2>
                        <p class="ptext text-dark">ကျန်းမာသော ခန္ဓာကိုယ်ဖြင့် ပျော်ရွှင်သော ဘဝကို တည်ဆောက်ပါ။ </p>
                        <a href='/dashboard' wire:navigate class="btn2 shadow">ရက်ချိန်းယူရန်</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <!-- <div class="row nav" style="height: 60px">Nav Bar</div>
            <hr />
            <div class="row hero" style="height: 400px">
              <div class="col-lg-6 border">Text</div>
              <div class="col-lg-6 border">Image</div>
            </div> -->
            <livewire:service>
            <hr class="mb-0 ">
            <div class="row about text-center mb-5 mt-0 pt-3 pb-4" style="height:auto">
              <!-- <h3 class="mb-5">About us</h3> -->
              <div class="col-lg-5 mb-5 mb-lg-0"><div class=" shadow img card">
                <img src="{{asset('user/assets/images/hospital.png')}}" width="300" alt="" class="shadow bg-light"></div>
              </div>
              <div class="col-lg-5 d-flex align-items-center  text-start fs-5 ">
                
                Ever Care Clinic သည် 2023 ခုနှစ် မတ်လ 18 ရက်နေ့တွင် ဖွင့်လှစ်ခဲ့သော 3 ထပ်တိုက်  အဆောက်အဦး ဖြစ်ပါသည်။ ကျွန်ုပ်တို့သည် ခေတ်မီ ဆေးဘက်ဆိုင်ရာ စက်ကိရိယာများဖြင့် ဘက်စုံဆေးဘက်ဆိုင်ရာ ဝန်ဆောင်မှုကို ဆောင်ရွက်ပေးပါသည်။ သက်ဆိုင်ရာဌာနအသီးသီးရှိ ကျွမ်းကျင်ဝန်ထမ်းများမှ ကျွမ်းကျင်သော ကျွမ်းကျင်ဝန်ထမ်းများမှ ကောင်းစွာလေ့ကျင့်ထားသော နေထိုင်မှုဆိုင်ရာဆရာဝန်များ၊ သူနာပြုများနှင့် ကျွမ်းကျင်ဝန်ထမ်းများမှ ပံ့ပိုးပေးသော ကျွန်ုပ်တို့၏လူနာအား အမြန်ထိရောက်သော ကုသမှုကို ကျွန်ုပ်တို့ အလေးထားပါသည်။</div>
              <div class="col-1"></div>
            </div>
            <div class="row numbers text-center mb-5">
              <div class="col-12 col-md-4 col-lg-2 offset-lg-2 mb-2" >
                <div class="card border">
                  <img src="{{asset('user/assets/images/patient.png')}}" alt="" width="100" style="margin: auto;">
                  <p class="patients fs-1 mb-0"></p>
                  <h6 class="text-dark mb-4">ကုသပေးခဲ့သောလူနာများ</h6></div>
                
              </div>
              <div class="col-1 d-md-block d-none"></div>
              <div class="col-12 col-md-4 col-lg-2 mb-2">
                <div class="card border">
                  <img src="{{asset('user/assets/images/doctor.png')}}" alt="" width="100" style="margin: auto;">
                  <p class="doctors fs-1 mb-0"></p>
                  <h6 class="text-dark mb-4">ဆရာဝန်များ</h6></div>
              </div>
              <div class="col-1 d-md-block d-none"></div>
      
              <div class="col-12 col-md-4 col-lg-2 ">
                <div class="card border">
                  <img src="{{asset('user/assets/images/receptionist.png')}}" alt="" width="100" style="margin: auto;">
                  <p class="staff fs-1 mb-0"></p>
                  <h6 class="text-dark mb-4">ဝန်ထမ်းများ</h6></div>
              </div>          
              </div>
              <!-- <div class="col-3"></div> -->
            </div>
            <livewire:articles>
            <livewire:review>
           
          </div>
          @include('user.footer')
          @livewireScripts
          <script src="{{asset('user/assets/navbar.js')}}"></script>
          <script src="{{asset('user/assets/script.js')}}"></script>

</body>

</html>
