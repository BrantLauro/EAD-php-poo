<?php

include "Aula.php";

class Bd {

    static public function conecta() {
        $conexao = mysqli_connect("localhost", "root", "", "danki");
        if(mysqli_connect_errno()) {
            die("Erro ao conectar no MySQL: ". mysqli_connect_error());
        }
        return $conexao;
    }

	static public function fecha() {
		mysqli_close(Bd::conecta());
	}

    static public function inserir(Aula $aula) {
        $sql = "insert into aulas (nome, link) values ('".$aula->getNome()."','".$aula->getLink()."');";
        if(mysqli_query(Bd::conecta(), $sql)) {
            Bd::fecha();
            return true;
        } else {
            Bd::fecha();
            return false;
        }
    }

    static public function listar() {
        $sql = "select * from aulas;";
        $consulta = mysqli_query(Bd::conecta(), $sql);
        for($i = 0; $aula = mysqli_fetch_assoc($consulta); $i++) {
            $aulaObj = new Aula($aula['nome'], $aula['link']);
			$aulas[$i] = $aulaObj;
		}
        Bd::fecha();
		return $aulas;
    }
}