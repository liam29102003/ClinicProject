@props(['text2'])
<div class="card mt-3" x-data='{j:"Hello", text2 : $wire.text2}'>
  {{-- <h1 x-text="a"></h1> --}}
    <h5 class="card-header"  >Doctor list</h5>
   
    <div class="mb-2 mt-2 w-50" style="margin: auto">
      @if (session('status'))
      <livewire:alert>
        @endif
    </div>
   
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Speciality</th>
            <th>Qualification</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($doctors as $doctor)
            <tr        wire:key="{{ $doctor->id }}">
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$doctor->name}}</strong></td>
                <td>{{$doctor->speciality}}</td>
                <td><span class="badge bg-label-primary me-1">{{$doctor->qualification}}</span></td>
                <td>
                    <a href="" class=" text-warning"><i class="fa-solid fa-eye"></i></a>
                    <button type="button" class="btn text-danger" wire:click='changevalue({{$doctor->id}}, "Are you sure to delete")'  x-on:click=" $dispatch('open-modal');"  >

                      <i class="fa-solid fa-trash"></i></button>
                    <a href="" class="text-success"><i class="fa-solid fa-pen-to-square"></i></a>
                </td>
              </tr>

            @endforeach
         
        </tbody>
      </table>
      

      {{-- <div>{{$text2}}</div> --}}
      @if($text2 != "")
@include('admin.modal')      @endif
</div>
    </div>
    

  </div>