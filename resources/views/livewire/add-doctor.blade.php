<div class="container-fluid flex-grow-1 container-p-y bg-light">
    <h4 class="fw-bold py-3 mb-4">Appointment Form</h4>
    

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-6 offset-3">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h5 class="mb-0">Add Doctor</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body">
                    <form method="post" wire:submit='save' action="" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Name :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='name'
                                    wire:model='name' placeholder="John Doe" />
                                    <small class="text-danger">@error('name') {{ $message }} @enderror</small>

                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Email :</label>

                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="basic-default-name" name='email'
                                    wire:model='email' placeholder="JohnDoe@gmail.com" />
                                    <small class="text-danger">@error('email') {{ $message }} @enderror</small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-signature me-2"></i>Phone :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-name" name='phone'
                                    wire:model='phone' placeholder="09-*********" />
                                    <small class="text-danger">@error('phone') {{ $message }} @enderror</small>

                            </div>
                        </div>
                       
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-stethoscope me-2"></i>Speciality :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-speciality"
                                    placeholder="Neurologist" name='speciality' wire:model='speciality' />
                                    <small class="text-danger">@error('speciality') {{ $message }} @enderror</small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-name"><i
                                    class="fa-solid fa-graduation-cap "></i>Qualification :</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="basic-default-qa" placeholder="MBBS"
                                    name='qualification'    wire:model='qualification' />
                                    <small class="text-danger">@error('qualification') {{ $message }} @enderror</small>

                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-phone"><i
                                    class="fa-solid fa-venus-mars me-2"></i>Gender :</label>

                            <div class="col-sm-9">
                                <select name="gender" id="" class="form-control" wire:model='gender'>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <small class="text-danger">@error('gender') {{ $message }} @enderror</small>

                            </div>
                        </div>
                       


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-default-message"><i
                                    class="fa-regular fa-file-lines me-2"></i>Bio :</label>
                            <div class="col-sm-9">
                                <textarea id="basic-default-message" name='bio' class="form-control" placeholder="Brief Description Go Here"
                                    aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" wire:model='bio'></textarea>
                                    <small class="text-danger">@error('bio') {{ $message }} @enderror</small>

                                </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Basic with Icons -->

    </div>
</div>
