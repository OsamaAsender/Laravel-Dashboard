@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Coupons</h2>
        <a href="{{ route('coupons.create') }}" class="btn btn-primary">Create New Coupon</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Discount</th>
                            <th>Type</th>
                            <th>Usage</th>
                            <th>Expires At</th>
                            <th>Status</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($coupons as $coupon)
                            <tr>
                                <td>{{ $coupon->id }}</td>
                                <td>{{ $coupon->code }}</td>
                                <td>
                                    @if($coupon->discount_type == 'percentage')
                                        {{ $coupon->discount }}%
                                    @else
                                        {{ number_format($coupon->discount, 2) }}
                                    @endif
                                </td>
                                <td>{{ ucfirst($coupon->discount_type) }}</td>
                                <td>
                                    {{ $coupon->used }}
                                    @if($coupon->usage_limit)
                                        / {{ $coupon->usage_limit }}
                                    @endif
                                </td>
                                <td>{{ $coupon->expires_at ? $coupon->expires_at->format('Y-m-d') : 'Never' }}</td>
                                <td>
                                    @if($coupon->isValid())
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('coupons.show', $coupon) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('coupons.edit', $coupon) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('coupons.destroy', $coupon) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this coupon?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No coupons found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $coupons->links() }}
            </div>
        </div>
    </div>
@endsection