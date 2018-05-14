<?php
include "../core/autoload.php";
include "../core/modules/index/model/ReservationData.php";
include "../core/modules/index/model/PacientData.php";
include "../core/modules/index/model/MedicData.php";
include "../core/modules/index/model/StatusData.php";
include "../core/modules/index/model/PaymentData.php";
session_start();

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();

$word = new  PhpOffice\PhpWord\PhpWord();

$alumns = $_SESSION["report_data"];

$section1 = $word->AddSection();
$section1->addText("REPORTE DE CITAS",array("size"=>22,"bold"=>true,"align"=>"right"));


$styleTable = array('borderSize' => 6, 'borderColor' => '888888', 'cellMargin' => 40);
$styleFirstRow = array('borderBottomColor' => '0000FF', 'bgColor' => 'AAAAAA');

$table1 = $section1->addTable("table1");
$table1->addRow();
$table1->addCell()->addText("Asunto");
$table1->addCell()->addText("Paciente");
$table1->addCell()->addText("Medico");
$table1->addCell()->addText("Fecha");
$table1->addCell()->addText("Estado");

$total = 0;
foreach($alumns as $al){
	$medic = $al->getMedic();
	$pacient = $al->getPacient();
$table1->addRow();
$table1->addCell(3000)->addText($al->title);
$table1->addCell(3000)->addText($pacient->name." ".$pacient->lastname);
$table1->addCell(3000)->addText($medic->name." ".$medic->lastname);
$table1->addCell(3000)->addText($al->date_at." ".$al->time_at);
$table1->addCell(3000)->addText($al->getStatus()->name);
}





$word->addTableStyle('table1', $styleTable,$styleFirstRow);
/// datos bancarios
$section1->addText("");
$section1->addText("");
$section1->addText("");
$section1->addText("Generado por BookMedik v2.5");
$filename = "report-".time().".docx";
#$word->setReadDataOnly(true);
$word->save($filename,"Word2007");
//chmod($filename,0444);
header("Content-Disposition: attachment; filename='$filename'");
readfile($filename); // or echo file_get_contents($filename);
unlink($filename);  // remove temp file



?>