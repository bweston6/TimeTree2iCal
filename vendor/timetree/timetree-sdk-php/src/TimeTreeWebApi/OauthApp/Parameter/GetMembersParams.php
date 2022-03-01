<?php

namespace TimeTreeWebApi\OauthApp\Parameter;

class GetMembersParams
{
  private $calendarId;

  public function __construct(string $calendarId)
  {
    $this->calendarId = $calendarId;
  }

  public function getCalendarId()
  {
    return $this->calendarId;
  }
}
