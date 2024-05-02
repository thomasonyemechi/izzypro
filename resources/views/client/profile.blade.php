@extends('client.client_layout')
@section('page_title')
    Profile and Security
@endsection
@section('page_content')
    <div class="card mb-3">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Profile Details</h3>
            <p class="mb-0">
                You have full control to manage your own account setting.
            </p>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center mb-4 mb-lg-0">
                    <img src="{{ Avatar::create($user->name ?? $user->email)->toBase64() }}" id="img-uploaded"
                        class="avatar-xl rounded-circle" alt="">
                    <div class="ms-3">
                        <h4 class="mb-0">Your avatar</h4>
                        <p class="mb-0">
                            Your avatar is automatically created based on your name or email
                        </p>
                    </div>
                </div>

            </div>
            <hr class="my-5">
            <div>
                <h4 class="mb-0">Personal Details</h4>
                <p class="mb-4">
                    Edit your personal information and address.
                </p>
                <!-- Form -->
                <form class="row" method="POST" action="/client/update-profile">@csrf
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="fname">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full name"
                            value="{{ $user->name }}" required="">
                        @error('name')
                            <i class="text-danger small"> {{ $message }} </i>
                        @enderror
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                            value="{{ $user->phone }}" required="">
                        @error('phone')
                            <i class="text-danger small"> {{ $message }} </i>
                        @enderror
                    </div>
                    <!-- Birthday -->
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="birth">Birthday</label>
                        <input class="form-control flatpickr flatpickr-input" type="text" name="dob"
                            value="{{ $user->dob }}" placeholder="Birth of Date">
                        @error('dob')
                            <i class="text-danger small"> {{ $message }} </i>
                        @enderror
                    </div>


                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label" for="address">Email</label>
                        <input type="text" class="form-control" name="email" readonly value="{{ $user->email }}"
                            placeholder="Email" required="">
                    </div>
                    <!-- Address -->
                    <div class="mb-3 col-12 col-md-12">
                        <label class="form-label" for="address2">Address Line</label>
                        <textarea name="address" class="form-control" id="" placeholder="Enter your address" rows="2">{{ $user->address }}</textarea>
                        @error('address')
                        <i class="text-danger small"  > {{$message}} </i>
                    @enderror
                    </div>

                    <div class="col-12">
                        <!-- Button -->
                        <button class="btn btn-primary" type="submit">
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
