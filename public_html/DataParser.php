<?php
namespace JsonParser;
class DataParser
{
  private $file,
          $data,
          $samples,
          $labels;
  public function __construct($file) {
    $this->file = __DIR__ . '/' .$file;
    $this->parse();
  }
  private function parse() {
    $this->data = json_decode(file_get_contents($this->file), true);
  }
  public function getSamplesArray() {
    return $this->data['samples'];
  }
  public function getLabelsArray() {
    return $this->data['labels'];
  }
  public function getConfig() {
    return $this->data['config'];
  }
}


?>
