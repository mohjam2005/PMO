<?php
namespace Modules\Sendsms\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSendSmsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'send_to' => 'required',
            'message' => 'required',
        ];
    }
}