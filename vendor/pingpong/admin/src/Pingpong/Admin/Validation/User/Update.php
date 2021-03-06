<?php namespace Pingpong\Admin\Validation\User;

use Pingpong\Admin\Validation\Validator;
use Illuminate\Support\Facades\Request;

class Update extends Validator
{

    public function rules()
    {
        $id = Request::segment(3);

        $rules = [
            'fname' => 'required',
			'lname' => 'required',
            'email' => 'required|unique:users,email,' . $id,
        ];

        if ($this->has('password')) {
            $rules['password'] = 'required|min:6|max:20';
        }

        return $rules;
    }
	    public function messages()
    {
        $current_year = date('Y');
        return [
            
            
        ];
    }
}
