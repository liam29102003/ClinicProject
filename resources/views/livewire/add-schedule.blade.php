<div>
    <div class="row mb-3">
        @if (session('status'))
            <livewire:alert>
        @endif

    </div>
    <form  wire:submit.prevent="store">
        @csrf
        <table class="table">
            <tr>
                <td><label for="" class="">Day</label></td>
                <td>:</td>
                <td>
                    <select name="" wire:model='day' id="" class="form-select form-select-md mb-2 ">
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="" class="">From</label></td>
                <td>:</td>
                <td>
                    <input type="time" wire:model='from' name="" id="" class="form-control form-control-md mb-2">
                </td>
            </tr>
            <tr>
                <td><label for="" class="">To</label></td>
                <td>:</td>
                <td>
                    <input type="time" wire:model='to' name="" id="" class="form-control form-control-md mb-2">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="text-center border-0">
                    <button type="submit" class="btn btn-primary  d-flex align-items-center"
                    style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important ">
                    <div>Add</div>

                    <div class="spinner-border ms-2" wire:loading wire:target='' role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
            </td>
            </tr>
        </table>
           
        
        

    </form>
</div>