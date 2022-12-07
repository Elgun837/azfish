<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Mail\Subscribe;
use App\Models\Mail\Newsletter;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {

        $this->validateEmail($request);

        if(Newsletter::where('email', $request->email)->doesntExist()) {

            Newsletter::create([
                'email' => $request->email
            ]);

            Mail::to($request->email)->send(new Subscribe());
        }
    }

    public function unsubscribe(Request $request)
    {
        $this->validateEmail($request);

        Newsletter::where('email', $request->email)->delete();

        //Mail::to($request->email)->send(new Subscribe());
    }

    /**
     * Get a validator for an incoming newsletter request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateEmail(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
    }
}
