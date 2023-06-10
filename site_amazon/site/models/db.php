<?php
	try {
	  $connect = new mysqli("inforce-db.c8llfqrwmimw.us-east-1.rds.amazonaws.com", "admin", "Inforce2023", "inforce-db");
	  $connect->set_charset("utf8mb4");
	} catch(Exception $e) {
	  error_log($e->getMessage());
	  exit('Erro ao tentar conectar ao banco de dados');
	}