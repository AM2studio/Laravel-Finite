<?php

namespace AM2Studio\LaravelFinite\Traits;

use Finite;
use AM2Studio\LaravelFinite\Models\FiniteStates;

trait LaravelFiniteTrait
{
    protected $finiteState;

    public function finiteStates()
    {
        return $this->morphMany('AM2Studio\LaravelFinite\Models\FiniteStates', 'stateable');
    }

    public function getLatestFiniteStateAttribute()
    {
        return $this->finiteStates()->orderBy('id', 'DESC')->first()->state;
    }

    public function getFiniteState()
    {
        return $this->finiteState;
    }

    public function setFiniteState($state)
    {
        $this->finiteState = $state;
    }

    public function getFiniteConfig()
    {
        return $this->finiteConfig;
    }

    public function saveFiniteRelationship($stateName, $properties = [])
    {
        $state             = new FiniteStates();
        $state->state      = $stateName;
        $state->properties = $properties;
        $this->finiteStates()->save($state);

        return $this;
    }

    public function getPossibleFiniteStates()
    {
        $result       = [];
        $currentState = Finite::getName($this);
        foreach ($this->finiteConfig['transitions'] as $transition) {
            if (in_array($currentState, $transition['from'], true)) {
                array_push($result, $transition['to']);
            }
        }
        $result = array_unique($result);
        $result = array_combine($result, $result);

        return $result;
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($object) {
            $object->saveFiniteRelationship(Finite::getName($object));

            return true;
        });
    }
}
