<?php 
$q = isset($_GET['paka'])?$_GET['paka']:"";
header("location: ../index?$q");?>