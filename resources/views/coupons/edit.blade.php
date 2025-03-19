@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Coupon</h1>
        <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('coupons.update', $coupon) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="code" class="form-label">Coupon Code</label>
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code', $coupon->code) }}" required>
                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="discount" class="form-label">Discount Amount</label>
                        <input type="number" step="0.01" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{ old('discount', $coupon->discount) }}" required>
                        @error('discount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="discount_type" class="form-label">Discount Type</label>
                        <select class="form-select @error('discount_type') is-invalid @enderror" id="discount_type" name="discount_type" required>
                            <option value="fixed" {{ old('discount_type', $coupon->discount_type) == 'fixed' ? 'selected' : '' }}>Fixed Amount</option>
                            <option value="percentage" {{ old('discount_type', $coupon->discount_type) == 'percentage' ? 'selected' : '' }}>Percentage</option>
                        </select>
                        @error('discount_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="usage_limit" class="form-label">Usage Limit (optional)</label>
                        <input type="number" class="form-control @error('usage_limit') is-invalid @enderror" id="usage_limit" name="usage_limit" value="{{ old('usage_limit', $coupon->usage_limit) }}">
                        <small class="form-text text-muted">Leave empty for unlimited usage</small>
                        @error('usage_limit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="used" class="form-label">Times Used</label>
                        <input type="number" class="form-control" id="used" value="{{ $coupon->used }}" disabled>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="expires_at" class="form-label">Expiry Date (optional)</label>
                    <input type="date" class="form-control @error('expires_at') is-invalid @enderror" id="expires_at" name="expires_at" value="{{ old('expires_at', $coupon->expires_at ? $coupon->expires_at->format('Y-m-d') : '') }}">
                    <small class="form-text text-muted">Leave empty for no expiry</small>
                    @error('expires_at')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Update Coupon</button>
                </div>
            </form>
        </div>
    </div>
@endsection