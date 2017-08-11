<?php

echo '<h2>Welcome! The time is ' . date("D M d, Y G:i a") . '</h2>';

if ($this->request->is('post')) {
  $name = $this->request->data['Greeting']['name'];
  echo '<h3>Hello, ' . $name . '</h3>';
} else {
  echo $this->Form->create('Greeting');
  echo $this->Form->input('name', array('label' => "What's your name?"));
  echo $this->Form->end('Send');
}

?>
