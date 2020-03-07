<?php
session_start();
require('fpdf.php');
$path=$_REQUEST['path'];
$type=$_REQUEST['typeFile'];



function tre($arr)
{
    echo'<pre>';
    print_r($arr);
    echo'</pre>';
}
if(!is_dir($path) )
{
    header('location:index.php');
}
else{
$dirArr=scandir($path);
$dirStr=join('<br>',$dirArr);
$file='';
$folder='';
foreach($dirArr as $dir)
{
    if(is_dir($path.'/'.$dir))
    {
        $folder =$folder. $dir."\n";
    }

    if(is_file($path.'/'.$dir))
    {
        $file =$file. $dir."\n";
    }

}
$docu2='****Folders In :'.$path."\n". $folder."\n".'****Files In :'.$path."\n".$file;

if($type=='.pdf')
{
    $pdf = new FPDF();
    $pdf->AddPage();

    // $pdf->AddFont('DejaVu','','tahoma.ttf',true);
    $pdf->SetFont('Arial','B',16);

    $pdf->Cell(0,10,'****************************************************************',0,1);
    $pdf->Cell(0,10,'********************* Folder In :'.$path.' ************************',0,1);
    $pdf->Cell(0,10,'****************************************************************',0,1);
    foreach($dirArr as $dir)
    {
        if(is_dir($path.'/'.$dir))
        {
            $pdf->Cell(0,10,$dir,0,1);
        }
    }

    $pdf->Cell(0,10,'***************************************************************',0,1);
    $pdf->Cell(0,10,'********************* Files In :'.$path.' *************************',0,1);
    $pdf->Cell(0,10,'***************************************************************',0,1);

    foreach($dirArr as $dir)
    {
        if(is_file($path.'/'.$dir))
        {
            $pdf->Cell(0,10,$dir,0,1);      
        }
    }
    $pdf->Cell(0,10,'***************************************************************',0,1);
    $pdf->Cell(0,10,'********************* Design by Eng/ Kareem Osaman **************',0,1);
    $pdf->Cell(0,10,'***************************************************************',0,1);
    $pdf->Output();

}
else
{
    $_SESSION['docu']=$docu2;
    $_SESSION['type']=$type;
    file_put_contents('dir'.$type,$docu2);
    header('location:index.php');
}

}

?>