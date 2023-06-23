@extends('layouts.app')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Products</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @includeIf('includes.alert-message')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Products</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            @can('product-create')
                                <a href="{{ route('products.create') }}" class="btn btn-primary">
                                    <i class="nav-icon fas fa-plus-circle"></i>
                                    Create New Product
                                </a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $key => $product)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('products.show', $product->id) }}">Show</a>
                                        @can('product-edit')
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('products.edit', $product->id) }}">Edit</a>
                                        @endcan
                                        @can('product-delete')
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="4">No Record</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
