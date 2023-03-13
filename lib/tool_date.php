<?php

function formatDate($tabDate) {
  $weekDay = ['Dimanche','Lundi','Mardi','Mercredi', 'Jeudi', 'Vendredi','Samedi'];
  $month = [
    'Jan' => 'Janvier',
    'Feb' => 'Février',
    'Mar' => 'Mars',
    'Apr' => 'Avril',
    'May' => 'Mai',
    'Jun' => 'Juin',
    'Jul' => 'Juillet',
    'Aug' => 'Aout',
    'Sep' => 'Septembre',
    'Oct' => 'Octobre',
    'Nov' => 'Novembre',
    'Dec' => 'Décembre'
  ];

$tabDateFormated = explode('-', $tabDate);
  if ($tabDateFormated) {
    $timestamp = mktime(0,0,0,$tabDateFormated['1'],$tabDateFormated['2'], $tabDateFormated['0']);
    $j = date("w",$timestamp);
    $m = date("M",$timestamp);
    return $weekDay[$j].' '.$tabDateFormated['2'].' '.$month[$m].' '.$tabDateFormated['0'];
  }else {
    return ('Saisissez une date valide jj/mm/aaaa');
  }
}
