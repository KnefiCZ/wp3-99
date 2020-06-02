<?php 
class CarRender {

    private Car $car;
    private string $output;

    public function __construct(Car $car) {
      $this->output = ""; 
      $this->car = $car; 
      $this->renderManufacturer();
        
    }
    public function renderAll(){
        $this->renderManufacturer();
        $this->renderType();
        return $this->output;        
    }

    protected function renderManufacturer() {
      $this->output .= '<img src="assets/';
      $this->output .= strtolower($this->car->getManufacturer());
      $this->output .= '/logo.png" />';
      $this->output .= '<br>';
    }

    protected function renderType() {
      $this->output .= '<img src="assets/';
      $this->output .= strtolower($this->car->getManufacturer());
      $this->output .= '/';
      $this->output .= $this->car->getModel();
      $this->output .= '/';
      $this->output .= $this->car->getType();
      $this->output .= '.png" />';
      $this->output .= '<br>';
    }
}