<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('permissions.permissions') }}
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('menu.settings') }}</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('permissions.permissions') }}</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('permissions.manage_permissions') }}</h3>
            <div class="card-toolbar">
                <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-primary">
                    <i class="ki-duotone ki-plus fs-4"></i>
                    {{ __('permissions.add_permission') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <!-- DataTable -->
            <div class="table-responsive">
                <table id="{{ \App\DataTables\PermissionDataTable::TABLE_ID }}" class="table table-bordered align-middle table-striped no-footer dataTable">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>{{ __('permissions.permission_name') }}</th>
                            <th>{{ __('permissions.assigned_roles') }}</th>
                            <th>{{ __('permissions.created_date') }}</th>
                            <th class="text-end pe-5 no-sort">{{ __('permissions.actions') }}</th>
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
            // Initialize DataTable
            let table = $('#{{ \App\DataTables\PermissionDataTable::TABLE_ID }}').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('permissions.data') }}'
                },
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'roles_count', name: 'roles_count', orderable: false, searchable: false },
                    { data: 'created_at', name: 'created_at', searchable: false },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false, className: 'text-end' }
                ],
                order: [[2, 'desc']],
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

            // Initialize tooltips after table draw
            table.on('draw', function() {
                $('[data-bs-toggle="tooltip"]').tooltip();
            });

            $(function() {
                $('[data-bs-toggle="tooltip"]').tooltip();
            });
        });

        // Delete confirmation
        function confirmDelete(url) {
            if (confirm('{{ __('permissions.confirm_delete') }}')) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = url;

                let csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);

                let methodField = document.createElement('input');
                methodField.type = 'hidden';
                methodField.name = '_method';
                methodField.value = 'DELETE';
                form.appendChild(methodField);

                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
    @endpush

    @include('scripts.datatables')
</x-app-layout>
