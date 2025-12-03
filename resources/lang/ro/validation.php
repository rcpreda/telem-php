<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linii de limbaj pentru validare
    |--------------------------------------------------------------------------
    |
    | Următoarele linii de limbaj conțin mesajele de eroare implicite folosite
    | de clasa de validare. Unele dintre aceste reguli au mai multe versiuni,
    | cum ar fi regulile de dimensiune.
    |
    */

    'accepted' => 'Câmpul :attribute trebuie acceptat.',
    'active_url' => 'Câmpul :attribute nu este un URL valid.',
    'after' => 'Câmpul :attribute trebuie să fie o dată după :date.',
    'after_or_equal' => 'Câmpul :attribute trebuie să fie o dată după sau egală cu :date.',
    'alpha' => 'Câmpul :attribute poate conține doar litere.',
    'alpha_dash' => 'Câmpul :attribute poate conține doar litere, numere, liniuțe și underscores.',
    'alpha_num' => 'Câmpul :attribute poate conține doar litere și numere.',
    'array' => 'Câmpul :attribute trebuie să fie un array.',
    'before' => 'Câmpul :attribute trebuie să fie o dată înainte de :date.',
    'before_or_equal' => 'Câmpul :attribute trebuie să fie o dată înainte sau egală cu :date.',
    'between' => [
        'numeric' => 'Câmpul :attribute trebuie să fie între :min și :max.',
        'file' => 'Câmpul :attribute trebuie să fie între :min și :max kilobyți.',
        'string' => 'Câmpul :attribute trebuie să fie între :min și :max caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă între :min și :max elemente.',
    ],
    'boolean' => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed' => 'Confirmarea câmpului :attribute nu se potrivește.',
    'date' => 'Câmpul :attribute nu este o dată validă.',
    'date_equals' => 'Câmpul :attribute trebuie să fie o dată egală cu :date.',
    'date_format' => 'Câmpul :attribute nu se potrivește cu formatul :format.',
    'different' => 'Câmpurile :attribute și :other trebuie să fie diferite.',
    'digits' => 'Câmpul :attribute trebuie să fie de :digits cifre.',
    'digits_between' => 'Câmpul :attribute trebuie să fie între :min și :max cifre.',
    'dimensions' => 'Câmpul :attribute are dimensiuni de imagine invalide.',
    'distinct' => 'Câmpul :attribute are o valoare duplicată.',
    'email' => 'Câmpul :attribute trebuie să fie o adresă de email validă.',
    'ends_with' => 'Câmpul :attribute trebuie să se termine cu una din următoarele: :values.',
    'exists' => 'Câmpul :attribute selectat este invalid.',
    'file' => 'Câmpul :attribute trebuie să fie un fișier.',
    'filled' => 'Câmpul :attribute trebuie să aibă o valoare.',
    'gt' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare decât :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mare decât :value kilobyți.',
        'string' => 'Câmpul :attribute trebuie să fie mai mare decât :value caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă mai mult de :value elemente.',
    ],
    'gte' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value kilobyți.',
        'string' => 'Câmpul :attribute trebuie să fie mai mare sau egal cu :value caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă :value elemente sau mai multe.',
    ],
    'image' => 'Câmpul :attribute trebuie să fie o imagine.',
    'in' => 'Câmpul :attribute selectat este invalid.',
    'in_array' => 'Câmpul :attribute nu există în :other.',
    'integer' => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'ip' => 'Câmpul :attribute trebuie să fie o adresă IP validă.',
    'ipv4' => 'Câmpul :attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6' => 'Câmpul :attribute trebuie să fie o adresă IPv6 validă.',
    'json' => 'Câmpul :attribute trebuie să fie un șir JSON valid.',
    'lt' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic decât :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mic decât :value kilobyți.',
        'string' => 'Câmpul :attribute trebuie să fie mai mic decât :value caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă mai puțin de :value elemente.',
    ],
    'lte' => [
        'numeric' => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value.',
        'file' => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value kilobyți.',
        'string' => 'Câmpul :attribute trebuie să fie mai mic sau egal cu :value caractere.',
        'array' => 'Câmpul :attribute nu trebuie să aibă mai mult de :value elemente.',
    ],
    'max' => [
        'numeric' => 'Câmpul :attribute nu poate fi mai mare decât :max.',
        'file' => 'Câmpul :attribute nu poate fi mai mare decât :max kilobyți.',
        'string' => 'Câmpul :attribute nu poate fi mai mare decât :max caractere.',
        'array' => 'Câmpul :attribute nu poate avea mai mult de :max elemente.',
    ],
    'mimes' => 'Câmpul :attribute trebuie să fie un fișier de tipul: :values.',
    'mimetypes' => 'Câmpul :attribute trebuie să fie un fișier de tipul: :values.',
    'min' => [
        'numeric' => 'Câmpul :attribute trebuie să fie cel puțin :min.',
        'file' => 'Câmpul :attribute trebuie să fie cel puțin :min kilobyți.',
        'string' => 'Câmpul :attribute trebuie să fie cel puțin :min caractere.',
        'array' => 'Câmpul :attribute trebuie să aibă cel puțin :min elemente.',
    ],
    'multiple_of' => 'Câmpul :attribute trebuie să fie un multiplu al lui :value',
    'not_in' => 'Câmpul :attribute selectat este invalid.',
    'not_regex' => 'Formatul câmpului :attribute este invalid.',
    'numeric' => 'Câmpul :attribute trebuie să fie un număr.',
    'password' => 'Parola este incorectă.',
    'present' => 'Câmpul :attribute trebuie să fie prezent.',
    'regex' => 'Formatul câmpului :attribute este invalid.',
    'required' => 'Câmpul :attribute este obligatoriu.',
    'required_if' => 'Câmpul :attribute este obligatoriu când :other este :value.',
    'required_unless' => 'Câmpul :attribute este obligatoriu cu excepția cazului în care :other este în :values.',
    'required_with' => 'Câmpul :attribute este obligatoriu când :values este prezent.',
    'required_with_all' => 'Câmpul :attribute este obligatoriu când :values sunt prezente.',
    'required_without' => 'Câmpul :attribute este obligatoriu când :values nu este prezent.',
    'required_without_all' => 'Câmpul :attribute este obligatoriu când niciunul dintre :values nu sunt prezente.',
    'same' => 'Câmpurile :attribute și :other trebuie să se potrivească.',
    'size' => [
        'numeric' => 'Câmpul :attribute trebuie să fie :size.',
        'file' => 'Câmpul :attribute trebuie să fie :size kilobyți.',
        'string' => 'Câmpul :attribute trebuie să fie :size caractere.',
        'array' => 'Câmpul :attribute trebuie să conțină :size elemente.',
    ],
    'starts_with' => 'Câmpul :attribute trebuie să înceapă cu una din următoarele: :values.',
    'string' => 'Câmpul :attribute trebuie să fie un șir de caractere.',
    'timezone' => 'Câmpul :attribute trebuie să fie o zonă validă.',
    'unique' => 'Câmpul :attribute a fost deja folosit.',
    'uploaded' => 'Câmpul :attribute nu a putut fi încărcat.',
    'url' => 'Formatul câmpului :attribute este invalid.',
    'uuid' => 'Câmpul :attribute trebuie să fie un UUID valid.',

    /*
    |--------------------------------------------------------------------------
    | Linii de limbaj personalizate pentru validare
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atribute de validare personalizate
    |--------------------------------------------------------------------------
    */

    'attributes' => [],

];
