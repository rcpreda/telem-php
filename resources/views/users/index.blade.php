<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('menu.users') }}
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('menu.users_management') }}</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('menu.users') }}</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('users.users') }}</h3>
            <div class="card-toolbar">
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">
                    <i class="ki-duotone ki-plus fs-4"></i>
                    {{ __('users.add_user') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <!-- Filters -->
            <div class="bg-light rounded p-5 mb-7">
                <h4 class="mb-5">{{ __('app.filters') }}</h4>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label fs-7">{{ __('users.role') }}</label>
                        <select name="role" id="role_filter" class="form-select">
                            <option value="">{{ __('app.all') }}</option>
                            @foreach($roles as $roleValue => $roleLabel)
                                <option value="{{ $roleValue }}">{{ $roleLabel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label fs-7">{{ __('app.status') }}</label>
                        <select name="status" id="status_filter" class="form-select">
                            <option value="">{{ __('app.all_statuses') }}</option>
                            @foreach($statuses as $statusValue => $statusLabel)
                                <option value="{{ $statusValue }}">{{ $statusLabel }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="button" id="clear_filters" class="btn btn-sm btn-secondary">
                            {{ __('app.clear_filters') }}
                        </button>
                    </div>
                </div>
            </div>

            <!-- DataTable -->

            <div class="table-responsive">
                <table id="{{ \App\DataTables\UserDataTable::TABLE_ID }}" class="table table-bordered align-middle table-striped no-footer dataTable">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>{{ __('users.user') }}</th>
                            <th class="no-sort">{{ __('users.role') }}</th>
                            <th>{{ __('users.status') }}</th>
                            <th>{{ __('users.joined_date') }}</th>
                            <th class="text-end pe-5 no-sort">{{ __('users.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Card body-->
    </div>


    @push('scripts')
    <script>
        $(function() {
            // Initialize DataTable
            let table = $('#{{ \App\DataTables\UserDataTable::TABLE_ID }}').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('users.data') }}',
                    data: function(d) {
                        d.status = $('#status_filter').val();
                        d.role = $('#role_filter').val();
                    }
                },
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'role', name: 'role', orderable: false, searchable: false },
                    { data: 'status', name: 'status', searchable: false },
                    { data: 'created_at', name: 'created_at', searchable: false },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false, className: 'text-end' }
                ],
                order: [[3, 'desc']],
                lengthMenu: [10, 25, 50, 100],
                dom: '<"row"<"col-sm-12 col-md-1"l><"col-sm-12 col-md-3 ms-auto"f>>rt<"row"<"col-sm-12 col-md-5 d-flex align-items-center"i><"col-sm-12 col-md-7 d-flex justify-content-end"p>>',
                language: {
                    processing: "{{ __('app.dt_processing') }}",
                    search: '_INPUT_',
                    searchPlaceholder: "{{ __('app.dt_search') }}",
                    lengthMenu: "{{ __('app.dt_length_menu') }}",
                    info: "{{ __('app.dt_info') }}",
                    infoEmpty: "{{ __('app.dt_info_empty') }}",
                    infoFiltered: "{{ __('app.dt_info_filtered') }}",
                    infoPostFix: "{{ __('app.dt_info_postfix') }}",
                    loadingRecords: "{{ __('app.dt_loadingRecords') }}",
                    zeroRecords: "{{ __('app.dt_zeroRecords') }}",
                    emptyTable: "{{ __('app.dt_emptyTable') }}",
                    paginate: {
                        first: "{{ __('app.dt_first') }}",
                        previous: "{{ __('app.dt_previous') }}",
                        next: "{{ __('app.dt_next') }}",
                        last: "{{ __('app.dt_last') }}"
                    },
                    aria: {
                        sortAscending: "{{ __('app.dt_sort_ascending') }}",
                        sortDescending: "{{ __('app.dt_sort_descending') }}"
                    }
                }
            });

            // Auto-reload on filter change
            $('#role_filter, #status_filter').on('change', function() {
                table.ajax.reload();
            });

            // Clear filter button
            $('#clear_filters').on('click', function() {
                $('#role_filter').val('').trigger('change');
                $('#status_filter').val('').trigger('change');
                table.search('').draw();
            });

            // Initialize tooltips after table draw
            table.on('draw', function() {
                $('[data-bs-toggle="tooltip"]').tooltip();
            });

            $(function() {
                $('[data-bs-toggle="tooltip"]').tooltip();
            });
        });
    </script>
    @endpush

    @include('scripts.datatables')
</x-app-layout>
