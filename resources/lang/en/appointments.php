<?php

return [
    // Page titles
    'appointments' => 'Appointments',
    'view_clients' => 'View Clients',

    // Filters
    'filters' => 'Filters',
    'client_phone' => 'Client Phone',
    'search_phone' => 'Search phone...',
    'agent' => 'Agent',
    'all_agents' => 'All Agents',
    'status' => 'Status',
    'all_statuses' => 'All Statuses',
    'type' => 'Type',
    'all_types' => 'All Types',
    'complex' => 'Complex',
    'all_complexes' => 'All Complexes',
    'date_from' => 'Date From',
    'date_to' => 'Date To',
    'clear_filters' => 'Clear Filters',

    // Status Options
    'scheduled' => 'Scheduled',
    'completed' => 'Completed',
    'cancelled' => 'Cancelled',
    'rescheduled' => 'Rescheduled',

    // Type Options
    'viewing' => 'Viewing',
    'meeting' => 'Meeting',
    'signing' => 'Signing',
    'other' => 'Other',

    // Table Headers
    'client' => 'Client',
    'date_time' => 'Date & Time',
    'property' => 'Property',
    'location' => 'Location',
    'notes' => 'Notes',
    'actions' => 'Actions',

    // DataTable Language
    'dt_empty_table' => 'No appointments found',
    'dt_info' => 'Showing _START_ to _END_ of _TOTAL_ appointments',
    'dt_info_empty' => 'Showing 0 to 0 of 0 appointments',
    'dt_info_filtered' => '(filtered from _MAX_ total appointments)',
    'dt_length_menu' => 'Show _MENU_ appointments',
    'dt_search' => 'Search:',
    'dt_zero_records' => 'No matching appointments found',

    // Appointment Form
    'appointment_date_time' => 'Appointment Date & Time',
    'select_type' => 'Select Type',
    'assigned_agent' => 'Assigned Agent',
    'select_agent' => 'Select Agent',
    'select_complex' => 'Select Complex',
    'specific_apartment' => 'Specific Apartment',
    'select_apartment_optional' => 'Select Apartment (Optional)',
    'building' => 'Building',
    'apt' => 'Apt',
    'floor' => 'Floor',
    'select_apartment_help' => 'Select a specific apartment if this appointment is for viewing a particular unit',
    'additional_notes_placeholder' => 'Additional notes about the appointment...',
    'new_appointments_scheduled' => 'New appointments are always created with "Scheduled" status. You can change the status later if needed.',

    // Calendar Integration
    'add_to_google_calendar' => 'Add to Google Calendar',
    'download_calendar_file' => 'Download Calendar File (Apple Calendar, Outlook)',
    'download_calendar_file_short' => 'Download Calendar File',
    'send_email_to_client' => 'Send Email to Client',
    'send_email_confirm' => 'Send appointment details to :email?',
    'client_no_email' => 'This client does not have an email address.',
    'email_sent_success' => 'Appointment notification sent successfully to :email',
    'email_sent_error' => 'Failed to send email',

    // Email Content
    'email_subject' => ':type Appointment - :date',
    'appointment_confirmation' => 'Appointment Confirmation',
    'email_greeting' => 'Dear :name,',
    'email_intro' => 'This is a confirmation of your upcoming appointment with us:',
    'email_calendar_prompt' => 'Add this appointment to your calendar:',
    'email_contact_info' => 'If you need to reschedule or have any questions, please contact us.',
    'email_footer' => 'Thank you for choosing us!',
    'all_rights_reserved' => 'All rights reserved.',

    // Validation Messages
    'existing_scheduled_appointment' => 'This client already has a scheduled appointment. Please complete, cancel, or reschedule the existing appointment before creating a new one.',
];
