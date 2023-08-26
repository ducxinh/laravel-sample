<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DateDifference implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $dates = collect($value);

        foreach ($dates as $index => $date) {
            if ($index === 0) {
                continue; // Skip the first item
            }

            $prevDate = $dates[$index - 1]['start_date'];
            $currDate = $date['start_date'];

            $dateDiff = \Carbon\Carbon::parse($currDate)->diffInDays(\Carbon\Carbon::parse($prevDate));

            if ($dateDiff >= 30) {
                $fail("The :attribute with Index <${index}> must not be greater than 30");
            }
        }
    }
}
