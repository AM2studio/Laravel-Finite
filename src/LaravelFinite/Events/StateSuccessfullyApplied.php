<?php

namespace AM2Studio\LaravelFinite\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * Class FiniteSuccessfullyApplied
 * @package AM2Studio\LaravelFinite\Events
 */
class StateSuccessfullyApplied extends Event
{
    use SerializesModels;

    /**
     * FiniteSuccessfullyApplied constructor.
     * @param $object
     */
    public function __construct($object)
    {
        $this->object = $object;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
