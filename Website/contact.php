<?php 
$mail = isset($_POST["mail"])? $_POST["mail"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$message = isset($_POST["message"])? $_POST["message"] : "";
$message='';
if(empty($mail)||empty($nom)||empty($message))
{
	$message ='<p> Un champ est vide, remplissez tous les champs s\'il-vous-plaît </p>' ;
}
else
{
	$message ='<p> Récapitulatif : <br>
	Nom : '.$nom.' <br>
	Mail : '.$mail.' <br>
	Message : '.$message.'<br>
	 </p>';
}
echo $message;
?>