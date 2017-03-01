<?php

class WeatherController extends BaseController {

  public function render($params) {
    $fetcher = new WeatherFetcher("prague, cs");
    $data = $fetcher->fetch();
    $this->view->forecasts = $data->item->forecast;
    $this->view->pageTitle = "Počasí";
  }

}
