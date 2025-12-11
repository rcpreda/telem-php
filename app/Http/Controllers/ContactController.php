<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('presentation.contact');
    }

    /**
     * Send contact form email.
     */
    public function send(ContactFormRequest $request)
    {
        try {
            // Get recipient email from config or env
            $recipientEmail = config('mail.contact.recipient', 'razvan@ex3mtech.com');

            // Send email
            Mail::to($recipientEmail)->send(
                new ContactFormMail(
                    firstName: $request->first_name,
                    lastName: $request->last_name,
                    email: $request->email,
                    phone: $request->phone,
                    formSubject: $request->subject,
                    formMessage: $request->message,
                )
            );

            return back()->with('success', __('Thank you for your message! We will get back to you soon.'));
        } catch (\Exception $e) {
            logger()->error('Contact form error: '.$e->getMessage(), [
                'email' => $request->email,
                'exception' => $e,
            ]);

            return back()
                ->withInput()
                ->with('error', __('There was an error sending your message. Please try again later.'));
        }
    }
}
