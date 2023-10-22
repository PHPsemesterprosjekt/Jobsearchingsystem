<?php
class Jobbannonse{
    public $tittel;
    public $sted;
    public $stilling;
    public $organisasjon;
    public $frist;
    public $arbeidsgiver;
    public $beskrivelse;
    public $sektor;
    public $bransje;
    public $kompetanse;

    function __construct($tittel, $sted, $stilling, $organisasjon, $frist, $arbeidsgiver, $beskrivelse, $sektor, $bransje, $kompetanse){
        $this->tittel = $tittel;
        $this->sted = $sted;
        $this->stilling = $stilling;
        $this->organisasjon = $organisasjon;
        $this->frist = $frist;
        $this->arbeidsgiver = $arbeidsgiver;
        $this->beskrivelse = $beskrivelse;
        $this->sektor = $sektor;
        $this->bransje = $bransje;
        $this->kompetanse = $kompetanse;
    }
}

class Bruker{
    public $fornavn;
    public $etternavn;
    public $epost;
    public $telefon;
    public $bilde;

    function __construct($fornavn, $etternavn, $epost, $telefon){
        $this->fornavn = $fornavn;
        $this->etternavn = $etternavn;
        $this->epost = $epost;
        $this->telefon = $telefon;
    }
}

class Jobbsoker extends Bruker{
    public $CV;
}

class soknad{
    public $soknadstekst;
    public $CV;
    public $dokument;

    function __construct($soknadstekst, $CV){
        $this->soknadstekst = $soknadstekst;
        $this->CV = $CV;
    }
}

class Melding{
    public $tid;
    public $beskrivelse;
    public $forfatter;

    function __construct($tid, $beskrivelse, $forfatter){
        $this->tid = $tid;
        $this->beskrivelse = $beskrivelse;
        $this->forfatter = $forfatter;
    }
}
?>