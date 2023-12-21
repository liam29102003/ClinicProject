<div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label" for="basic-default-phone"><i
                class="fa-solid fa-venus-mars me-2"></i>Days</label>

        <div class="col-sm-9">
            <select name="day" id="" class="form-control"  wire:model.live='day'>
                <option value="">Choose Day</option>

                <option value="monday">Monday</option>
                <option value="tuesday">TuesDay</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
                <option value="sunday">Sunday</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label" for="basic-default-phone"><i
                class="fa-solid fa-venus-mars me-2"></i>Gender :</label>

        <div class="col-sm-9">
            <select name="gender" id="" class="form-control">
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row d-flex justify-content-center">
        <div class="w-50">
            <label for="html5-time-input" class=" col-form-label"><i
                    class="fa-solid fa-clock me-2"></i>Start</label>
            <div class="">
                <input class="form-control" type="time" value="12:30:00" id="html5-time-input"
                    name='from' wire:model.live='from'/>
            </div>
        </div>
        <div class="w-50">
            <label for="html5-time-input" class=" col-form-label"><i
                    class="fa-regular fa-clock me-2"></i>End</label>
            <div class="">
                <input class="form-control" type="time" value="12:30:00" id="html5-time-input"
                    name='to' wire:model.live='to'/>
            </div>
        </div>

    </div>
</div>
