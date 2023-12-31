<?php
    class Usuario {
        private $id;
        private $nome;
        private $email;
        private $senha;

        public function __construct($id, $nome, $email, $senha) {
            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getSenha() {
            return $this->senha;
        }

    }
