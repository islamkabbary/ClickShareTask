<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * The productCodes that belong to the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function productCodes(): BelongsToMany
    {
        return $this->belongsToMany(ProductCode::class, 'code_distribution', 'country_id', 'code_id');
    }
}
