<td >
    @foreach ($schedules as $schedule)
        <p class="mb-0">{{ $schedule->day }}:{{ $schedule->from }} -
            {{ $schedule->to }} <i  class="fa-sharp fa-solid fa-circle-minus text-danger" wire:click='delete({{$schedule->id}})'></i></p>
    @endforeach
</td>
