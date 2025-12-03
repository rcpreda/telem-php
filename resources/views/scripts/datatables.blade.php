@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}">
    <style>
        /* Global DataTables styles */

        /* Fix search input focus border */
        .dataTables_filter input:focus,
        .dt-search input:focus {
            border-color: #b5b5c3 !important;
            box-shadow: none !important;
            outline: none !important;
        }

        /* Fix pagination alignment with info */
        .dataTables_wrapper .row:last-child,
        .dt-container .row:last-child {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .dataTables_wrapper .pagination,
        .dt-container .pagination {
            margin-bottom: 0;
        }

        /* Table header borders */
        .dataTable thead th {
            border-top: 1px solid #E4E6EF !important;
            border-bottom: 2px solid #E4E6EF !important;
        }

        /* Table footer borders */
        .dataTable tfoot {
            display: table-footer-group !important;
        }

        .dataTable tfoot th,
        .dataTable tfoot td {
            border-top: 2px solid #E4E6EF !important;
            padding: 0.75rem 1.5rem !important;
        }

        /* Table last row border */
        .dataTable tbody tr:last-child td {
            border-bottom: 2px solid #E4E6EF !important;
        }

        /* Table cell padding */
        .dataTable tbody td:first-child {
            padding-left: 1.5rem !important;
        }

        .dataTable tbody td:last-child {
            padding-right: 1.5rem !important;
        }

        /* Style length menu */
        .dataTables_wrapper label[for^="dt-length"],
        .dt-container label[for^="dt-length"] {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.8rem;
            color: #7e8299;
            margin-bottom: 0;
            white-space: nowrap;
        }

        .dataTables_wrapper label[for^="dt-length"] select,
        .dt-container label[for^="dt-length"] select {
            margin: 0 0.25rem;
            min-width: 65px;
        }
    </style>
@endpush()

@push('scripts')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
@endpush()
