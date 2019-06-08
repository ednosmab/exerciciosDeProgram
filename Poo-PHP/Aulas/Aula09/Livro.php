<?php
    require_once("Pessoa.php");
    require_once("Publicacao.php");
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //Métodos especias
        public function __construct($titulo, $autor, $totPag, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPag;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;
        }

        private function getTitulo(){
            return $this->titulo;
        }
        private function getAutor(){
            return $this->autor;
        }
        private function getTotPag(){
            return $this->totPaginas;
        }
        private function getPagAtual(){
            return $this->pagAtual;
        }
        private function getAberto(){
            return $this->aberto;
        }
        private function getLeitor(){
            return $this->leitor;
        }

        private function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        private function setAutor($autor){
            $this->autor = $autor;
        }
        private function setTotPag($totPag){
            $this->totPaginas = $totPag;
        }
        private function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }
        private function setAberto($aberto){
            $this->aberto = $aberto;
        }
        private function setLeitor($leitor){
            $this->leitor = $leitor;
        }
        
        //Métodos da Interface
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function avancarPag(){
            if($this->getPagAtual() < $this->getTotPag()){
                $this->pagAtual++;
            }else{
                $this->pagAtual = 0;
            }
        }
        public function voltarPag(){
            if($this->getPagAtual() >= 1){
                $this->pagAtual--;
            }
        }
        public function folhear($pag){
            if($pag > $this->getTotPag()){
                $this->pagAtual = 0;
                
            }elseif($pag < 0){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $pag;
            }
        }
        //Métodos
        public function detalhes(){
            echo "Livro ".$this->titulo." escrito por ".$this->autor;
            echo "<br/>Total de páginas: ".$this->totPaginas;
            echo "<br/>Sendo lido por ".$this->leitor->getNome();
            echo "<br/>Página atual ".$this->pagAtual;
        }
    }

?>