<?php
class Hello{
  public function systemInfo(){
    phpinfo();
  }
}
$hello = new Hello();
$hello->systemInfo();
