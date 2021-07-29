<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckComment implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $comments = strtolower($value);
        
        $comments = explode(" ", $comments);
        
        $words = ['hate', 'idiot', 'stupid'];
        
        foreach($words as $word) {
            if(in_array($word, $comments)) {
                return redirect('/forbidden');
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
