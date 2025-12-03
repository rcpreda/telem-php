<div class="bg-light rounded p-5 mb-7">
    <h4 class="mb-5">Filters</h4>
    <div class="row">
        <div class="col-md-2 mb-3">
            <label class="form-label fs-7">Filter by Status</label>
            <select name="status" class="form-select" data-placeholder="All Statuses">
                <option value="">All Statuses</option>
                @foreach($statuses as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 mb-3">
            <label class="form-label fs-7">Filter by Role</label>
            <select name="role" class="form-select" data-placeholder="All Roles">
                <option value="">All Roles</option>
                @foreach($roles as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <button type="button" id="clear_filter_form" class="btn btn-sm btn-secondary">
                Clear Filters
            </button>
        </div>
    </div>
</div>
