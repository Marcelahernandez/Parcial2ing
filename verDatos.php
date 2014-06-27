<?php
include "fpdf/fpdf.php";
include "ConexionBD.php";

class MiPdf extends FPDF
{
	public function Header()
	{
		$this->SetFont('Arial','B',20);
		$this->Cell(50,10,"NVCH S.A",0,0,'C');
		$consultar = mysql_query( "SELECT No_Facturafa,fecha FROM facturafa");
		$row = mysql_fetch_row($consultar);
		$this->Cell(70,10,"Numero de Factura",0,0,'C');
		$this->Cell(10,10,$row[0],0,0,'C');
		$this->Cell(120,10,$row[1],0,0,'C');
		$this->Ln(30);
	}
}

$cabeceraT=array(
"Referencia","Producto","Cantidad","Costo","Total"
);

$mipdf= new MiPdf('L','mm','A4');;
$mipdf->addPage();

for ($i = 0; $i < count( $cabeceraT ) ; $i++)
{
	$mipdf -> SetFont( 'Courier' , 'B' , 12 );
	$mipdf -> SetTextColor( 255 , 255 , 255);
	$mipdf -> Cell ( 40 , 10 , $cabeceraT[ $i ] , 1 , 0 , 'C' , true );
}

$mipdf -> Ln( 10);

$consulta = mysql_query( "SELECT * FROM facturafa" );



while ( $datos = mysql_fetch_array( $consulta ) )
{
	//$No_Facturafa = $datos [ 'No_Facturafa' ];
	//$fecha = $datos [ 'fecha' ];
	$Ref_Producto = $datos [ 'Ref_Producto' ];
	$Producto = $datos [ 'Producto' ];
	$Cantidad = $datos [ 'Cantidad' ];
	$costo = $datos [ 'costo' ];
	$total = $datos [ 'total' ];

	$mipdf -> SetFillColor( 100 , 100 , 200 );	
	//$mipdf -> Cell( 40, 10 , $No_Facturafa , 1, 0, 'C' , true );
	//$mipdf -> Cell( 40, 10 , $fecha , 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $Ref_Producto, 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $Producto, 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $Cantidad , 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $costo , 1, 0, 'C' , true );
	$mipdf -> Cell( 40, 10 , $total , 1, 0, 'C' , true );
	$mipdf -> Ln( 10);
}

$mipdf->Output();
echo"<script>alert('Contemplad la Factura.');window.location.href=\"Factura.php\"</script>"; 
?>