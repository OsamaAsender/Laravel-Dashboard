@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Coupon Details</h1>
        <div>
            <a href="{{ route('coupons.edit', $coupon) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                Coupon Code: <strong>{{ $coupon->code }}</strong>
                @if($coupon->isValid())
                    <span class="badge bg-success float-end">Active</span>
                @else
                    <span class="badge bg-danger float-end">Inactive</span>
                @endif
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>Discount Details</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Amount</th>
                            <td>
                                @if($coupon->discount_type == 'percentage')
                                    {{ $coupon->discount }}%
                                @else
                                    {{ number_format($coupon->discount, 2) }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ ucfirst($coupon->discount_type) }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6>Usage Information</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Usage</th>
                            <td>
                                {{ $coupon->used }}
                                @if($coupon->usage_limit)
                                    / {{ $coupon->usage_limit }}
                                @else
                                    / Unlimited
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Expires</th>
                            <td>{{ $coupon->expires_at ? $coupon->expires_at->format('Y-m-d') : 'Never' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <h6 class="mt-4">Timestamps</h6>
            <table class="table table-bordered w-50">
                <tr>
                    <th>Created</th>
                    <td>{{ $coupon->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Last Updated</th>
                    <td>{{ $coupon->updated_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            </table>
            
            <form action="{{ route('coupons.destroy', $coupon) }}" method="POST" class="mt-4" onsubmit="return confirm('Are you sure you want to delete this coupon?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Coupon</button>
            </form>
        </div>
    </div>
@endsection