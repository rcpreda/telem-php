<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Password Reset Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset' => 'Your password has been reset successfully! You can now sign in with your new password.',
    'sent' => 'Password reset link sent! Please check your email to continue.',
    'throttled' => 'Please wait before retrying.',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that email address.",
    'sent_generic' => 'If an account exists with this email, you will receive a password reset link shortly.',

    // Email translations
    'email_subject' => 'Reset Password Notification',
    'email_greeting' => 'Hello!',
    'email_line_1' => 'You are receiving this email because we received a password reset request for your account.',
    'email_action' => 'Reset Password',
    'email_line_2' => 'This password reset link will expire in :count minutes.',
    'email_line_3' => 'If you did not request a password reset, no further action is required.',
    'email_subcopy' => 'If you\'re having trouble clicking the ":actionText" button, copy and paste the URL below into your web browser:',
    'email_regards' => 'Regards',

];
