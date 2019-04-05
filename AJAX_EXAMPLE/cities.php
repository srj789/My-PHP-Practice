<?php
$state=$_GET['state'];
$c1=array('patna','mujaffarpur','motihari','vaishali');
$c2=array('Bhopal','indore','jabalpur');
$c3=array('jaipur','kota','jaisalmer','ajmer');
$c4=array('kanpur','lucknow','gorakhpur');

if($state=="Bihar")
	{
		foreach($c1 as $c)
			echo "<option>$c</option>";
	}
	else if($state=="Madhya Pradesh")
	{
		foreach($c2 as $c)
			echo "<option>$c</option>";
	}
	else if($state=="Rajasthan")
	{
		foreach($c3 as $c)
			echo "<option>$c</option>";
	}
	else if($state=="Uttar Pradesh")
	{
		foreach($c4 as $c)
			echo "<option>$c</option>";
	}
else
{
	echo "<option>First select state</option";
}
