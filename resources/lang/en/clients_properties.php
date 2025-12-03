<?php

return [
    // Purchase Details Tab - Sections
    'transaction_type' => 'Transaction Type',
    'property_transaction_type' => 'Property Transaction Type',
    'purchase' => 'Purchase',
    'rental' => 'Rental',
    'transaction_type_warning' => 'Warning: Changing the transaction type may affect existing property data. Please ensure this change is intentional.',
    'transaction_type_locked' => 'Transaction type is locked after initial selection. Only administrators can change it.',
    'transaction_type_change_confirm' => 'Are you sure you want to change the transaction type? This may affect existing property information (pricing, payment details, rental information, etc.). Continue?',
    'selected_property' => 'Selected Property',
    'pricing_information' => 'Pricing Information',
    'payment_information' => 'Payment Information',
    'important_dates' => 'Important Dates',
    'rental_details' => 'Rental Details',
    'rental_period' => 'Rental Period',
    'rental_pricing' => 'Rental Pricing',

    // Purchase Details - Property Selection
    'complex' => 'Complex',
    'select_complex' => 'Select Complex',
    'building' => 'Building',
    'select_building' => 'Select Building',
    'apartment' => 'Apartment',
    'select_apartment' => 'Select Apartment',
    'parking_space_optional' => 'Parking Space (Optional)',
    'select_parking_optional' => 'Select Parking (Optional)',
    'finishing_level' => 'Finishing Level',
    'select_finishing_level' => 'Select Finishing Level',
    'finishing_level_hint' => 'Level of interior finishing for the purchased property',

    // Finishing Levels
    'turnkey' => 'Turnkey (Finisat)',
    'unfinished' => 'Unfinished (Nefinisat)',
    'partial_finished' => 'Partial Finished (Parțial Finalizat)',

    // Selected Property Display
    'area' => 'Area',
    'rooms' => 'Rooms',
    'parking' => 'Parking',
    'sqm' => 'sqm',
    'floor' => 'Floor',

    // Pricing
    'list_price' => 'List Price (EUR)',
    'negotiated_price' => 'Negotiated Price (EUR)',
    'negotiated_price_hint' => 'Final agreed price after negotiations',
    'deposit_amount' => 'Deposit/Reservation (EUR)',

    // Payment Method
    'payment_method' => 'Payment Method',
    'select_payment_method' => 'Select Method',
    'cash' => 'Cash',
    'bank_credit' => 'Bank Credit/Loan',
    'mixed_payment' => 'Mixed (Cash + Credit)',
    'installments' => 'Installments',
    'bank_name' => 'Bank Name',
    'bank_name_placeholder' => 'Bank name',
    'loan_amount' => 'Loan Amount (EUR)',

    // Important Dates
    'reservation_date' => 'Reservation Date',
    'expected_completion_date' => 'Expected Completion Date',
    'expected_completion_date_hint' => 'Expected property handover date',
    'final_deed_date' => 'Final Deed Date',
    'final_deed_date_hint' => 'Date of final contract signing',

    // Purchase Notes
    'purchase_notes' => 'Purchase Notes',
    'purchase_notes_placeholder' => 'Additional notes about the purchase, payment schedule, special conditions, etc.',
    'update_purchase_details' => 'Update Purchase Details',

    // Payment Installments Tab
    'payment_installments' => 'Payment Installments',
    'add_installment' => 'Add Installment',
    'total_installments' => 'Total Installments',
    'total_amount' => 'Total Amount',
    'paid_amount' => 'Paid Amount',

    // Installments Table
    'installment_number' => 'Installment Number',
    'payment_type_column' => 'Payment Type',
    'amount' => 'Amount',
    'due_date' => 'Due Date',
    'paid_date' => 'Paid Date',
    'status' => 'Status',
    'notes' => 'Notes',
    'actions' => 'Actions',

    // Installment Status Messages
    'grace_period_days_left' => 'Grace period (:days days left)',
    'days_overdue' => ':days days overdue',
    'in_days' => 'In :days days',
    'due_today' => 'Due today',
    'not_paid' => 'Not paid',
    'grace_period' => 'Grace Period',

    // Installment Statuses
    'pending' => 'Pending',
    'paid' => 'Paid',
    'overdue' => 'Overdue',
    'cancelled' => 'Cancelled',

    // Payment Types
    'initial' => 'Initial',
    'scheduled' => 'Scheduled',

    // Installment Modals
    'edit_installment' => 'Edit Installment #:number',
    'add_new_payment_installment' => 'Add New Payment Installment',
    'installment_number_hint' => 'e.g., 1, 2, 3, etc.',
    'amount_eur' => 'Amount (€)',
    'amount_placeholder' => 'e.g., 5000',
    'paid_date_hint' => 'Leave empty if not paid yet',
    'notes_placeholder' => 'Any additional notes about this installment...',
    'cancel' => 'Cancel',
    'update_installment' => 'Update Installment',
    'create_installment' => 'Create Installment',
    'no_installments_yet' => 'No payment installments created yet. Click "Add Installment" to create one.',
    'delete_installment_confirm' => 'Are you sure you want to delete this installment?',

    // Interior Finish Schedule Tab
    'interior_finish_schedule' => 'Interior Finish Schedule',
    'add_finish_item' => 'Add Finish Item',
    'no_finish_items_yet' => 'No interior finish items added yet. Click "Add Finish Item" to create one.',

    // Rental Fields
    'rental_start_date' => 'Rental Start Date',
    'rental_end_date' => 'Rental End Date',
    'rental_end_date_hint' => 'End date of the rental contract',
    'rental_monthly_amount' => 'Monthly Rental Amount (EUR)',
    'rental_deposit_amount' => 'Rental Deposit (EUR)',
    'rental_deposit_hint' => 'Security deposit amount',
    'rental_contract_duration_months' => 'Contract Duration (Months)',
    'rental_duration_hint' => 'e.g., 12 for one year',
    'rental_notes' => 'Rental Notes',
    'rental_notes_placeholder' => 'Additional notes about the rental agreement, utilities, special conditions, etc.',

    // Common
    'edit' => 'Edit',
    'delete' => 'Delete',
    'na' => 'N/A',
    'edit_property' => 'Edit Property',
    'update_property' => 'Update Property',
    'add_new_property' => 'Add New Property',
    'create_property' => 'Create Property',
    'property_information' => 'Property Information',
    'properties' => 'Properties',
    'add_property' => 'Add Property',
    'property' => 'Property',
    'type' => 'Type',
    'price' => 'Price',
    'property_status' => 'Property Status',

    // Property Statuses
    'interested' => 'Interested',
    'reserved' => 'Reserved',
    'purchased' => 'Purchased',
    'completed' => 'Completed',
];
