<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('car.cars') }}
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('car.fleet_management') }}</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('car.cars') }}</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('car.cars') }}</h3>
            <div class="card-toolbar">
                <a href="{{ route('cars.create') }}" class="btn btn-sm btn-primary">
                    <i class="ki-duotone ki-plus fs-4"></i>
                    {{ __('car.add_car') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <!-- Filters -->
            <div class="bg-light rounded p-5 mb-7">
                <h4 class="mb-5">{{ __('app.filters') }}</h4>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label fs-7">{{ __('car.status') }}</label>
                        <select name="status" id="status_filter" class="form-select">
                            <option value="">{{ __('app.all_statuses') }}</option>
                            @foreach($statuses as $statusValue => $statusLabel)
                                <option value="{{ $statusValue }}">{{ $statusLabel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label class="form-label fs-7">{{ __('car.fuel_type') }}</label>
                        <select name="fuel_type" id="fuel_type_filter" class="form-select">
                            <option value="">{{ __('app.all') }}</option>
                            @foreach($fuelTypes as $fuelValue => $fuelLabel)
                                <option value="{{ $fuelValue }}">{{ $fuelLabel }}</option>
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
                <table id="{{ \App\DataTables\CarDataTable::TABLE_ID }}" class="table table-bordered align-middle table-striped no-footer dataTable">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>{{ __('car.car') }}</th>
                            <th class="no-sort">{{ __('car.tracker_device') }}</th>
                            <th>{{ __('car.status') }}</th>
                            <th>{{ __('car.added_date') }}</th>
                            <th class="text-end pe-5 no-sort">{{ __('car.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(function() {
            let table = $('#{{ \App\DataTables\CarDataTable::TABLE_ID }}').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('cars.data') }}',
                    data: function(d) {
                        d.status = $('#status_filter').val();
                        d.fuel_type = $('#fuel_type_filter').val();
                    }
                },
                columns: [
                    { data: 'car', name: 'car' },
                    { data: 'tracker', name: 'device_imei', orderable: false, searchable: false },
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

            $('#status_filter, #fuel_type_filter').on('change', function() {
                table.ajax.reload();
            });

            $('#clear_filters').on('click', function() {
                $('#status_filter').val('').trigger('change');
                $('#fuel_type_filter').val('').trigger('change');
                table.search('').draw();
            });

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
