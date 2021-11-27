<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\SendContactForm;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view("contact.form");
    }

    public function send(ContactFormRequest $request){

        try {

            // dd($request->input());

            Mail::to(User::first())->send(
                new SendContactForm(
                    $request->input("subject"),
                    $request->input("message"),
                )
            );

            return back()->with("success", "A mensagem foi enviada corretamente!");
        } catch (\Exception $exception) {
            return back()->with("error", "Ocorreu um erro ao enviar a mensagem!: " . $exception->getMessage());
        }

    }
}
