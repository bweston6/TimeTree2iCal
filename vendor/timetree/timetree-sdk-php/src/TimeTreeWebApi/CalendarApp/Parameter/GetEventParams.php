<?php

namespace TimeTreeWebApi\CalendarApp\Parameter;

class GetEventParams
{
  private $eventId;

  public function __construct(string $eventId)
  {
    $this->eventId = $eventId;
  }

  public function getEventId()
  {
    return $this->eventId;
  }
}
