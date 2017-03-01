<?php

class WeatherFetcher {

  private $location;

  function __construct($location) {
    $this->location = $location;
  }

    public function fetch() {
      $query = urlencode("select * from weather.forecast where woeid in (select woeid from geo.places(1) where text=\"" . $this->location . "\")  and u='c'");
      $response = file_get_contents("https://query.yahooapis.com/v1/public/yql?q=" . $query ."&format=json");
      $data = json_decode($response);
      return $data->query->results->channel;
  }

}
