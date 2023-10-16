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
                            <h5 class="mb-0">Create Skill</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('skill.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" id="basic-default-title" value="{{ old('title') }}"
                                        placeholder="Title" />
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-level">Level</label>
                                    <input type="text" class="form-control  @error('level') is-invalid @enderror"
                                        name="level" value="{{ old('level') }}"
                                        placeholder="Level" />
                                    @error('level')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-type">Type</label>
                                    <input type="text" class="form-control  @error('type') is-invalid @enderror"
                                        name="type" value="{{ old('type') }}"
                                        placeholder="Type" />
                                    @error('type')
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
