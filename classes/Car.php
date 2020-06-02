<?php
 class Car
 {
  private int $year; 
  private string $manufacturer; 
  private string $model; 
  private string $type; 
  private string $color; 
  private float $VIN;
  private int $gearsCount;
  private int $doorsCount;
  private float $power;

     public function __construct(array $basicSettings) {
            $this->year = $basicSettings['year'];
            $this->manufacturer = $basicSettings['manufacturer'];
            $this->model = $basicSettings['model'];
            $this->type = $basicSettings['type'];
            $this->color = $basicSettings['color'];
            $this->VIN = $basicSettings['VIN'];
            $this->gearsCount = $basicSettings['gearsCount'];
            $this->doorsCount = $basicSettings['doorsCount'];
            $this->power = $basicSettings['power'];
        }

    public function getManufacturer() {
        return $this->manufacturer;
    }
    public function getModel() {
        return $this->model;
    }
    public function getType() {
        return $this->type;
    }
 }