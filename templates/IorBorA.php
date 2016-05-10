<?php
$rasa = false;
if( isset( $_POST['a001'] ) )
{
	switch( $_POST['a001'] )
	{
        case 'First':
			$rasa = true;
//			echo 'Вам подходит прохождение игры на стороне Инноса. Рекомендации:';
		break;
		case 'Second':
            $rasa = $orcs;
//			echo 'Вам подходит прохождение игры на стороне Белиара. Рекомендации:';
		break;
	}
}
else
{
	
}
	
if( isset( $_POST['b001'] ) )
{
	switch( $_POST['b001'] )
	{
        case 'First':
			$killHuman = $yes;
//			echo 'Вам подходит прохождение игры на стороне Инноса. Рекомендации:';
		break;
		case 'Second':
            $killHuman = $no;
//			echo 'Вам подходит прохождение игры на стороне Белиара. Рекомендации:';
		break;
	}
}

if( isset( $_POST['c001'] ) )
{
	switch( $_POST['c001'] )
	{
        case 'First':
			$killOrcs = true;
//			echo 'Вам подходит прохождение игры на стороне Инноса. Рекомендации:';
			break;
		case 'Second':
            $killOrcs = false;
//			echo 'Вам подходит прохождение игры на стороне Белиара. Рекомендации:';
			break;
	}
}

if( isset( $_POST['d001'] ) )
{
	switch( $_POST['d001'] )
	{
        case 'First':
			$Innos = $godOfLight;
			break;
		case 'Second':
            $Innos = $godOfDarkness;
			break;
		case 'Third':
            $Innos = $godOfEquilibrium;
			break;
		case 'Fourth':
            $Innos = $dontKnow;
			break;
	}
}

if( isset( $_POST['e001'] ) )
{
	switch( $_POST['e001'] )
	{
        case 'First':
			$Beliar = $godOfLight;
			break;
		case 'Second':
            $Beliar = $godOfDarkness;
			break;
		case 'Third':
            $Beliar = $godOfEquilibrium;
			break;
		case 'Fourth':
            $Beliar = $dontKnow;
			break;
	}
}

if( isset( $_POST['f001'] ) )
{
	switch( $_POST['f001'] )
	{
        case 'First':
			$Adanos = $godOfLight;
			break;
		case 'Second':
            $Adanos = $godOfDarkness;
			break;
		case 'Third':
            $Adanos = $godOfEquilibrium;
			break;
		case 'Fourth':
            $Adanos = $dontKnow;
			break;
	}
}

if( isset( $_POST['g001'] ) )
{
	switch( $_POST['g001'] )
	{
        case 'First':
			$Xardas = $god;
			break;
		case 'Second':
            $Xardas = $king;
			break;
		case 'Third':
            $Xardas = $darkMage;
			break;
		case 'Fourth':
            $Xardas = $dontKnow;
			break;
	}
}

if( isset( $_POST['h001'] ) )
{
	switch( $_POST['h001'] )
	{
        case 'First':
			$XardasRelationship = $good;
			break;
		case 'Second':
            $XardasRelationship = $bad;
			break;
		case 'Third':
            $XardasRelationship = $dontKnow;
			break;
	}
}

/*
if($killOrcs == true)
{
	echo 'test';
//	require 'vote2.php';
}
else
	echo 'test';
*/

if($rasa == true)
{
//	echo 'test';
	require 'humans.php';
}
else if($rasa == $orcs)
	require 'orcs.php';
else if($rasa == false)
	require 'index.php';


?>