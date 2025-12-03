<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linii de limbaj pentru resetare parolă
    |--------------------------------------------------------------------------
    |
    | Următoarele linii de limbaj sunt liniile implicite care se potrivesc
    | cu motivele date de brokerul de parole pentru o încercare de actualizare
    | a parolei care a eșuat.
    |
    */

    'reset' => 'Parola dvs. a fost resetată cu succes! Acum vă puteți autentifica cu noua parolă.',
    'sent' => 'Link de resetare trimis! Vă rugăm verificați emailul pentru a continua.',
    'throttled' => 'Vă rugăm așteptați înainte de a încerca din nou.',
    'token' => 'Acest token de resetare a parolei este invalid.',
    'user' => 'Nu putem găsi un utilizator cu această adresă de e-mail.',
    'sent_generic' => 'Dacă există un cont cu acest email, veți primi în scurt timp un link de resetare a parolei.',

    // Email translations
    'email_subject' => 'Notificare resetare parolă',
    'email_greeting' => 'Bună ziua!',
    'email_line_1' => 'Primiți acest email deoarece am primit o solicitare de resetare a parolei pentru contul dvs.',
    'email_action' => 'Resetează parola',
    'email_line_2' => 'Acest link de resetare a parolei va expira în :count minute.',
    'email_line_3' => 'Dacă nu ați solicitat resetarea parolei, nu este necesară nicio acțiune suplimentară.',
    'email_subcopy' => 'Dacă aveți probleme la apăsarea butonului ":actionText", copiați și lipiți adresa URL de mai jos în browserul dvs.:',
    'email_regards' => 'Cu respect',

];
