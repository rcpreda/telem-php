<?php

return [
    // Page titles
    'appointments' => 'Programări',
    'view_clients' => 'Vezi Clienți',

    // Filters
    'filters' => 'Filtre',
    'client_phone' => 'Telefon Client',
    'search_phone' => 'Caută telefon...',
    'agent' => 'Agent',
    'all_agents' => 'Toți Agenții',
    'status' => 'Status',
    'all_statuses' => 'Toate Statusurile',
    'type' => 'Tip',
    'all_types' => 'Toate Tipurile',
    'complex' => 'Complex',
    'all_complexes' => 'Toate Complexele',
    'date_from' => 'Data De La',
    'date_to' => 'Data Până La',
    'clear_filters' => 'Șterge Filtre',

    // Status Options
    'scheduled' => 'Programat',
    'completed' => 'Finalizat',
    'cancelled' => 'Anulat',
    'rescheduled' => 'Reprogramat',

    // Type Options
    'viewing' => 'Vizionare',
    'meeting' => 'Întâlnire',
    'signing' => 'Semnare',
    'other' => 'Altele',

    // Table Headers
    'client' => 'Client',
    'date_time' => 'Data & Ora',
    'property' => 'Proprietate',
    'location' => 'Locație',
    'notes' => 'Notițe',
    'actions' => 'Acțiuni',

    // DataTable Language
    'dt_empty_table' => 'Nu s-au găsit programări',
    'dt_info' => 'Afișare _START_ până la _END_ din _TOTAL_ programări',
    'dt_info_empty' => 'Afișare 0 până la 0 din 0 programări',
    'dt_info_filtered' => '(filtrate din _MAX_ programări totale)',
    'dt_length_menu' => 'Afișează _MENU_ programări',
    'dt_search' => 'Caută:',
    'dt_zero_records' => 'Nu s-au găsit programări potrivite',

    // Appointment Form
    'appointment_date_time' => 'Data & Ora Programării',
    'select_type' => 'Selectează Tipul',
    'assigned_agent' => 'Agent Alocat',
    'select_agent' => 'Selectează Agent',
    'select_complex' => 'Selectează Complex',
    'specific_apartment' => 'Apartament Specific',
    'select_apartment_optional' => 'Selectează Apartament (Opțional)',
    'building' => 'Clădire',
    'apt' => 'Apart',
    'floor' => 'Etaj',
    'select_apartment_help' => 'Selectați un apartament specific dacă această programare este pentru vizionarea unei unități anume',
    'additional_notes_placeholder' => 'Notițe suplimentare despre programare...',
    'new_appointments_scheduled' => 'Programările noi sunt întotdeauna create cu statusul "Programat". Puteți schimba statusul mai târziu dacă este necesar.',

    // Calendar Integration
    'add_to_google_calendar' => 'Adaugă în Google Calendar',
    'download_calendar_file' => 'Descarcă Fișier Calendar (Apple Calendar, Outlook)',
    'download_calendar_file_short' => 'Descarcă Fișier Calendar',
    'send_email_to_client' => 'Trimite Email către Client',
    'send_email_confirm' => 'Trimite detalii programare către :email?',
    'client_no_email' => 'Acest client nu are o adresă de email.',
    'email_sent_success' => 'Notificarea programării a fost trimisă cu succes către :email',
    'email_sent_error' => 'Eroare la trimiterea emailului',

    // Email Content
    'email_subject' => 'Programare :type - :date',
    'appointment_confirmation' => 'Confirmare Programare',
    'email_greeting' => 'Stimate/Stimată :name,',
    'email_intro' => 'Aceasta este o confirmare a programării dumneavoastră:',
    'email_calendar_prompt' => 'Adăugați această programare în calendarul dumneavoastră:',
    'email_contact_info' => 'Dacă doriți să reprogramați sau aveți întrebări, vă rugăm să ne contactați.',
    'email_footer' => 'Vă mulțumim că ne-ați ales!',
    'all_rights_reserved' => 'Toate drepturile rezervate.',

    // Validation Messages
    'existing_scheduled_appointment' => 'Acest client are deja o programare planificată. Vă rugăm să finalizați, anulați sau reprogramați programarea existentă înainte de a crea una nouă.',
];
