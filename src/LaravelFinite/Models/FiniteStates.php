<?php

namespace AM2Studio\LaravelFinite\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FiniteStates
 * @package AM2Studio\LaravelFinite\Models
 */
class FiniteStates extends Model
{
    /**
     * @var string
     */
    protected $table = 'am2_finite_states';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function stateable()
    {
        return $this->morphTo();
    }
}
