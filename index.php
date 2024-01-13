<?php
// Load autoloader (using Composer)
require __DIR__ . '/vendor/autoload.php';

$pdf = new TCPDF();                 // create TCPDF object with default constructor args
$pdf->AddPage();                    // add a page

// Define the style for the dropdown
$style = array(
    'border' => 2,
    'padding' => 1,
    'fgcolor' => array(0,0,0),  // Foreground color (black)
    'bgcolor' => array(255,255,255), // Background color (white)
);

// Define the dropdown items
$items = array(
    '' => '- Select an option -',
    'option1' => 'Option 1',
    'option2' => 'Option 2',
    'option3' => 'Option 3',
);

// Add the dropdown (combo box)
$pdf->ComboBox('dropdown', 50, 10, $items, $style);

$pdf->Write(1, 'Hello world');      // Write some text

$pdf->Output('hello_world.pdf');    // send the file inline to the browser
?>
