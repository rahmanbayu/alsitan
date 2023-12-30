<?php

namespace App\Rules;

use App\Models\Petani;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NikNotBlacklisted implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $petani = Petani::where('nik', $value)->first();
        if($petani != null && $petani->blacklist_at != null){
            $fail('Petani di blacklist!');
        }
    }
}
