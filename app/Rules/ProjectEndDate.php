<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ProjectEndDate implements Rule
{
    protected $startDate;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($startDate)
    {
        $this->startDate = $startDate;
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
        return (strtotime($value) > strtotime($this->startDate));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Project :attribute must be greater than project start date.';
    }
}
