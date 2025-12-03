<?php

return [
    // Purchase Details Tab - Sections
    'transaction_type' => 'Tip Tranzacție',
    'property_transaction_type' => 'Tip Tranzacție Proprietate',
    'purchase' => 'Achiziție',
    'rental' => 'Închiriere',
    'transaction_type_warning' => 'Atenție: Schimbarea tipului de tranzacție poate afecta datele existente ale proprietății. Asigurați-vă că această modificare este intenționată.',
    'transaction_type_locked' => 'Tipul de tranzacție este blocat după selecția inițială. Doar administratorii îl pot schimba.',
    'transaction_type_change_confirm' => 'Sunteți sigur că doriți să schimbați tipul de tranzacție? Acest lucru poate afecta informațiile existente ale proprietății (prețuri, detalii plată, informații închiriere, etc.). Continuați?',
    'selected_property' => 'Proprietate Selectată',
    'pricing_information' => 'Informații Prețuri',
    'payment_information' => 'Informații Plată',
    'important_dates' => 'Date Importante',
    'rental_details' => 'Detalii Închiriere',
    'rental_period' => 'Perioada de Închiriere',
    'rental_pricing' => 'Prețuri Închiriere',

    // Purchase Details - Property Selection
    'complex' => 'Complex',
    'select_complex' => 'Selectează Complex',
    'building' => 'Clădire',
    'select_building' => 'Selectează Clădire',
    'apartment' => 'Apartament',
    'select_apartment' => 'Selectează Apartament',
    'parking_space_optional' => 'Loc Parcare (Opțional)',
    'select_parking_optional' => 'Selectează Parcare (Opțional)',
    'finishing_level' => 'Nivel Finisare',
    'select_finishing_level' => 'Selectează Nivel Finisare',
    'finishing_level_hint' => 'Nivel de finisare interioară pentru proprietatea achiziționată',

    // Finishing Levels
    'turnkey' => 'La Cheie (Finisat)',
    'unfinished' => 'Nefinisat',
    'partial_finished' => 'Parțial Finalizat',

    // Selected Property Display
    'area' => 'Suprafață',
    'rooms' => 'Camere',
    'parking' => 'Parcare',
    'sqm' => 'mp',
    'floor' => 'Etaj',

    // Pricing
    'list_price' => 'Preț de Listing (EUR)',
    'negotiated_price' => 'Preț Negociat (EUR)',
    'negotiated_price_hint' => 'Preț final agreat după negocieri',
    'deposit_amount' => 'Depozit/Rezervare (EUR)',

    // Payment Method
    'payment_method' => 'Metodă de Plată',
    'select_payment_method' => 'Selectează Metodă',
    'cash' => 'Numerar',
    'bank_credit' => 'Credit Bancar',
    'mixed_payment' => 'Mixt (Numerar + Credit)',
    'installments' => 'Rate',
    'bank_name' => 'Nume Bancă',
    'bank_name_placeholder' => 'Nume bancă',
    'loan_amount' => 'Sumă Împrumut (EUR)',

    // Important Dates
    'reservation_date' => 'Data Rezervării',
    'expected_completion_date' => 'Data Estimată de Finalizare',
    'expected_completion_date_hint' => 'Data estimată de predare a proprietății',
    'final_deed_date' => 'Data Act Final',
    'final_deed_date_hint' => 'Data semnării contractului final',

    // Purchase Notes
    'purchase_notes' => 'Notițe Achiziție',
    'purchase_notes_placeholder' => 'Notițe suplimentare despre achiziție, program de plată, condiții speciale, etc.',
    'update_purchase_details' => 'Actualizează Detalii Achiziție',

    // Payment Installments Tab
    'payment_installments' => 'Rate Plată',
    'add_installment' => 'Adaugă Rată',
    'total_installments' => 'Total Rate',
    'total_amount' => 'Sumă Totală',
    'paid_amount' => 'Sumă Plătită',

    // Installments Table
    'installment_number' => 'Număr Rată',
    'payment_type_column' => 'Tip Plată',
    'amount' => 'Sumă',
    'due_date' => 'Scadență',
    'paid_date' => 'Data Plății',
    'status' => 'Status',
    'notes' => 'Notițe',
    'actions' => 'Acțiuni',

    // Installment Status Messages
    'grace_period_days_left' => 'Perioadă de grație (:days zile rămase)',
    'days_overdue' => ':days zile întârziere',
    'in_days' => 'În :days zile',
    'due_today' => 'Scadent astăzi',
    'not_paid' => 'Neplătit',
    'grace_period' => 'Perioadă de Grație',

    // Installment Statuses
    'pending' => 'În Așteptare',
    'paid' => 'Plătit',
    'overdue' => 'Întârziat',
    'cancelled' => 'Anulat',

    // Payment Types
    'initial' => 'Inițial',
    'scheduled' => 'Programat',

    // Installment Modals
    'edit_installment' => 'Editează Rata #:number',
    'add_new_payment_installment' => 'Adaugă Rată de Plată Nouă',
    'installment_number_hint' => 'ex., 1, 2, 3, etc.',
    'amount_eur' => 'Sumă (€)',
    'amount_placeholder' => 'ex., 5000',
    'paid_date_hint' => 'Lasați gol dacă nu a fost plătit încă',
    'notes_placeholder' => 'Notițe suplimentare despre această rată...',
    'cancel' => 'Anulează',
    'update_installment' => 'Actualizează Rată',
    'create_installment' => 'Creează Rată',
    'no_installments_yet' => 'Nu s-au creat rate de plată încă. Apăsați "Adaugă Rată" pentru a crea una.',
    'delete_installment_confirm' => 'Sigur doriți să ștergeți această rată?',

    // Interior Finish Schedule Tab
    'interior_finish_schedule' => 'Program Finisaje Interioare',
    'add_finish_item' => 'Adaugă Element Finisaj',
    'no_finish_items_yet' => 'Nu s-au adăugat elemente de finisaj interior încă. Apăsați "Adaugă Element Finisaj" pentru a crea unul.',

    // Rental Fields
    'rental_start_date' => 'Data Începere Închiriere',
    'rental_end_date' => 'Data Încheiere Închiriere',
    'rental_end_date_hint' => 'Data de încheiere a contractului de închiriere',
    'rental_monthly_amount' => 'Chirie Lunară (EUR)',
    'rental_deposit_amount' => 'Depozit Închiriere (EUR)',
    'rental_deposit_hint' => 'Suma depozitului de garanție',
    'rental_contract_duration_months' => 'Durată Contract (Luni)',
    'rental_duration_hint' => 'ex., 12 pentru un an',
    'rental_notes' => 'Notițe Închiriere',
    'rental_notes_placeholder' => 'Notițe suplimentare despre contract de închiriere, utilități, condiții speciale, etc.',

    // Common
    'edit' => 'Editează',
    'delete' => 'Șterge',
    'na' => 'N/A',

    // Page Titles
    'edit_property' => 'Editează Proprietate',
    'property_information' => 'Informații Proprietate',
    'update_property' => 'Actualizează Proprietate',
    'add_new_property' => 'Adaugă Proprietate Nouă',
    'create_property' => 'Creează Proprietate',
    'properties' => 'Proprietăți',
    'add_property' => 'Adaugă Proprietate',
    'property' => 'Proprietate',
    'type' => 'Tip',
    'price' => 'Preț',

    // Property Status
    'property_status' => 'Status Proprietate',
    'interested' => 'Interesat',
    'reserved' => 'Rezervat',
    'purchased' => 'Achiziționat',
    'completed' => 'Finalizat',
];
