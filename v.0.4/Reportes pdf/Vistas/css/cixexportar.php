<?php 
function Exportar_HTML($data,$nombreArch="Reporte"){	
	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: filename=".$nombreArch.".html");	
	echo $data;
}

function Exportar_WORD($data,$nombreArch="Reporte"){	
	header("Content-type: application/vnd.ms-word");
	header("Content-Disposition: filename=".$nombreArch.".doc");	
	echo $data;
}
function Exportar_EXCEL($data,$nombreArch="Reporte"){	
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: filename=".$nombreArch.".xls");	
	echo $data;
}
function Exportar_PDF($data){

	include("../mpdf/mpdf.php");
	 $mpdf=new mPDF('','A4'); 
	// $mpdf->WriteHTML($data);
	// $mpdf->Output();
	// exit;

	$mpdf->SetDisplayMode('fullpage');

	$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

	// LOAD a stylesheet
	$stylesheet = file_get_contents('../css/estilo-pdf.css');
	$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

	$mpdf->WriteHTML($data,2);

	$mpdf->Output('mpdf.pdf','I');
}

?>