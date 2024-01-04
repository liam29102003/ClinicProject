@props(['text2'])
<div class="card mt-3" x-data='{j:"Hello", text2 : $wire.text2}' style="background-color:#F6E8B1 !important; color:#9d926a !important">
    {{-- <h1 x-text="a"></h1> --}}
    

    <div class="mb-2 mt-2 w-50" style="margin: auto">
        @if (session('status'))
            <livewire:alert>
        @endif
    </div>
    <div class="d-flex justify-content-between mb-0  pb-0">
      <div class="mb-0">
          <h2 class="card-header" style="color:#9d926a">Medicine list</h2>
      </div>
      <div class="mb-0">
          <div class="mt-3 me-2 d-flex align-items-center ">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="form-control  ms-2 " wire:model.live="search" placeholder="Search.....">
          </div>
            
          
      </div>
  </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead style="border-bottom:4px solid #FFFEF2 !important">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($medicine as $m)
                    <tr wire:key="{{ $m->id }}" style="border-bottom:2px solid #FFFEF2">
                        <td><img src="{{ asset('storage/' . $m->image) }}" alt="" width="30"
                                class="rounded-circle me-2"> <strong>{{ $m->name }}</strong></td>
                        <td>{{ $m->price }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ $m->quantity }}</span></td>
                        <td>
                            <a href="{{route('pharmacy.details',$m->id)}}" wire:navigate class=" text-warning"><i class="fa-solid fa-eye"></i></a>
                            <button type="button" class="btn text-danger"
                                x-on:click=" $dispatch('open-modal'); $wire.changevalue({{ $m->id }}, 'Are you sure to delete')">

                                <i class="fa-solid fa-trash"></i></button>
                            <a href="#" wire:navigate class="text-success"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>




        {{-- <div>{{$text2}}</div> --}}
        @if ($text2 != '')
            @include('admin.modal')
        @endif
    </div>
    <div class="text-white ms-3 mt-2" >
      {{ $medicine->links() }}

      </div>
</div>


</div>
