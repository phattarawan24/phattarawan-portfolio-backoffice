@extends('layouts.clearn_admin')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Create Profile</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-first_name">First Name</label>
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        name="first_name" id="basic-default-first_name" value="{{ old('first_name') }}"
                                        placeholder="First Name" />
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-last_name">Last Name</label>
                                    <input type="text" class="form-control  @error('last_name') is-invalid @enderror"
                                        name="last_name" value="{{ old('last_name') }}" id="basic-default-last_name"
                                        placeholder="Last Name" />
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Email</label>
                                    <input type="text" id="basic-default-email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="Email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-phone">Phone</label>
                                    <input type="text" id="basic-default-phone"
                                        class="form-control phone-mask @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" placeholder="088 799 8941" />
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-birthday">Birthday</label>
                                    <input id="basic-default-birthday"
                                        class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                                        value="{{ old('birthday') }}" placeholder="Birthday">
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-degree">Degree</label>
                                    <input id="basic-default-degree"
                                        class="form-control @error('degree') is-invalid @enderror" name="degree"
                                        value="{{ old('degree') }}" placeholder="Degree">
                                    @error('degree')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-experience">Experience</label>
                                    <input id="basic-default-experience"
                                        class="form-control @error('experience') is-invalid @enderror" name="experience"
                                        value="{{ old('experience') }}" placeholder="Experience">
                                    @error('experience')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Img</label>
                                    <input class="form-control @error('img') is-invalid @enderror" type="file"
                                        id="img" name="img" accept="image/png, image/gif, image/jpeg" />
                                    @error('img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
