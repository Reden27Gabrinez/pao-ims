<?php


include('../../configuration/config.php');
include_once('Mysqldump/Mysqldump.php');
include('smtp/PHPMailerAutoload.php');
$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=pao', 'root', '');
$f=date('d-m-Y');
$dump->start("sql_dump/$f.sql");


$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username="paoims123@gmail.com";
$mail->Password="hrvxqqtnmmimjeeh";
$mail->SetFrom("paoims123@gmail.com");
$mail->addAddress('paoims123@gmail.com');
$mail->IsHTML(true);
$mail->Subject="PAO IMS ".$f;
$mail->Body="Backup Database";
$mail->AddAttachment("sql_dump/$f.sql");
$mail->SMTPOptions=array('ssl'=>array(
	'verify_peer'=>false,
	'verify_peer_name'=>false,
	'allow_self_signed'=>false
));
if($mail->send()){
	echo '<script type="text/javascript">';
	echo ' alert("Successfully Backup to your Email")';  //not showing an alert box.
	echo '</script>';


}else{
	echo "Error occur";
}
header('location:../index.php?page=dashboard');
?>