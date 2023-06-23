@extends('layouts.app')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Roles</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
            <li class="breadcrumb-item active">Create Role</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Create Role</h3>
                </div>
                <form method="POST" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" value="{{ old('name') }}" placeholder="Enter full name" required>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <p><strong>Permission</strong></p>
                            @foreach ($permission as $value)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="permission[]" id="permission[]"
                                        value="{{ $value->id }}">
                                    <label for="permission[]" class="form-check-label">{{ $value->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="nvav-icon fas fa-save"></i>
                    Save
                </button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
