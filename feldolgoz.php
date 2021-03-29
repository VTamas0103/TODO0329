<?php

class feldolgoz {

    private $db_szerver;
    private $db_felhnev;
    private $db_jelszo;
    private $db_nev;
    private $kapcs;

    public function __construct() {
        $this->db_szerver = "web1.szamalk-szalezi.hu";
        $this->db_felhnev = "c1_tanulo21szf1b";
        $this->db_jelszo = "_tanulo21szf1b";
        $this->db_nev = "c1ABtanulo21szf1b";

//        $this->db_szerver = "localhost";
//        $this->db_felhnev = "root";
//        $this->db_jelszo = "";
//        $this->db_nev = "todo";
        $this->kapcsolat();
    }

    public function kapcsolat() {
        $this->kapcs = new mysqli($this->db_szerver, $this->db_felhnev, $this->db_jelszo, $this->db_nev);
        $this->kapcs->set_charset('utf8');
        if ($this->kapcs->connect_error) {
            die("Kapcsolódás nem sikerült: " . $this->kapcs->connect_error);
        }
    }
    
}