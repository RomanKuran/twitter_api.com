<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TwitterAddRemoveRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id'                => 'required',
            'user'              => 'required',
            'secret'            => 'in:'.sha1("WBYX1TLPRWJ7NSV36LCPP2OZFH6AE6LMelonmusk"),
        ];
    }

    public function messages()
    {
        return [
            'id.required'       => '{"error": "missing parameter"}',
            'user.required'     => '{"error": "missing parameter"}',
            'secret.in'         => '{"error": "access denied"}',
        ];
    }
}
