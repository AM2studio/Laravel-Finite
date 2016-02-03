<?php

namespace AM2Studio\LaravelFinite;

use AM2Studio\LaravelFinite\Models\FiniteStates;
use Finite\StateMachine\StateMachine;
use Finite\Loader\ArrayLoader;

/**
 * Class Finite
 * @package AM2Studio\LaravelFinite
 */
class Finite
{
    /**
     * @var StateMachine
     */
    public $stateMachine;

    /**
     * Finite constructor.
     * @param $app
     */
    public function __construct($app)
    {
        $this->stateMachine = new StateMachine;
        $this->app          = $app;
    }

    /**
     * Checks whether object can transition
     *
     * @param \Illuminate\Database\Eloquent\Model $object
     * @param $value
     * @return bool
     */
    public function can(\Illuminate\Database\Eloquent\Model $object, $value)
    {
        $this->setStateMachine($object);

        return $this->stateMachine->can($value);
    }

    /**
     * Transitions selected object
     *
     * @param \Illuminate\Database\Eloquent\Model $object
     * @param $value
     * @throws \Finite\Exception\StateException
     */
    public function apply(\Illuminate\Database\Eloquent\Model $object, $value, $properties = [])
    {
        $this->setStateMachine($object);
        $this->stateMachine->apply($value);
        $object->saveFiniteRelationship($this->stateMachine->getCurrentState()->getName(), $properties);
    }

    /**
     * Returns the state name of selected object
     *
     * @param \Illuminate\Database\Eloquent\Model $object
     * @return string
     */
    public function getName(\Illuminate\Database\Eloquent\Model $object)
    {
        $this->setStateMachine($object);

        return $this->stateMachine->getCurrentState()->getName();
    }

    /**
     * Configures $stateMachine according to selected object
     *
     * @param \Illuminate\Database\Eloquent\Model $object
     * @throws \Finite\Exception\ObjectException
     */
    private function setStateMachine(\Illuminate\Database\Eloquent\Model $object)
    {
        $config = array_merge(
            ['class' => get_class($object)],
            $object->getFiniteConfig()
        );
        if (!$object->finiteStates->isEmpty()) {
            $object->setFiniteState($object->latestFiniteState);
        }
        $loader = new ArrayLoader($config);
        $loader->load($this->stateMachine);
        $this->stateMachine->setObject($object);
        $this->stateMachine->initialize();
    }
}
