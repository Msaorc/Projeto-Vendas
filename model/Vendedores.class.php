<?php

Class Vendedores extends Conexao{
    private $nome;
    private $email;
    private $id;
    
    function __construct() {
        parent::__construct();
    }
    
    function PrepararVendedor($nome, $email){
        $this->setNome($nome);
        $this->setEmail($email);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getId() {
        return $this->id;
    }

    function setNome($nome) {
        if (strlen($nome) < 4):
            
            echo '<div class="alert alert-danger " 
                 id = "erro_mostrar"> Digite seu nome ';
            echo '</div>';
            else:
            $this->nome = $nome;
        endif;
    }

    function setEmail($email) {
        if (strlen($email) < 4):
            
            echo '<div class="alert alert-danger " 
                 id = "erro_mostrar"> Digite seu nome ';
            echo '</div>';
            else:
            $this->email = $email;
        endif;
    }

    function setId($id) {
        $this->id = $id;
    }
    
    function GetVendedores(){
        $query = 'SELECT * FROM vendedor'; 
        $this->ExecuteSql($query);
        $this->GetLista();
    }
    
    function GetVendedorId($id){
        $query = 'SELECT * FROM vendedor WHERE id = '.$id;
        $this->ExecuteSql($query);
        $this->GetLista();
    }
    
    function GetVendedoresVenda($id){
        $query = 'SELECT VN.id, '
                . 'VN.nome, '
                . 'VN.email '
                . 'FROM vendedor VN '
                . 'INNER JOIN vendas V ON '
                . 'VN.id = V.id_vendedor '
                . ' WHERE VN.id = '.$id; 
        $this->ExecuteSql($query);
    }
    
    private function GetLista(){
        $i = 1;
     
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
                'id' => $lista['id'],
                'nome' => $lista['nome'],
                'email' => $lista['email']
            );
        
        $i++;
        endwhile;          
    }
    
    private function GetListaTeste(){
        $i = 1;
     
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
                'id' => $lista['id'],
                'nome' => $lista['nome'],
                'email' => $lista['email']
            );
        
        $i++;
        endwhile;          
    }
    
    function GravarVendedor(){
        // Sistema::DataAtualUS(); date('Y-m-d')
        $retorno = false;
        $query = "INSERT INTO vendedor (nome, email) VALUES ('".$this->getNome()."' ,'".$this->getEmail()."')";

        $this->ExecuteSQL($query);
        $retorno = true;
        return $retorno;
    }
    
    function ExcluirVendedor($id){
        try{
            $this->GetVendedores();
            $query = "DELETE FROM vendedor WHERE id = ".$id;        
            $this->ExecuteSQL($query);
        } catch (Exception $e){
            echo '<div class="alert alert-sucess"> Erro ao excluir vendedor!!'.$e->getMessage().'</div>';
        }
    }
    
    function AlterarVendedor($id){
        try{
            $query = "UPDATE vendedor set nome = '". $this->getNome(). "', email = '". $this->getEmail()."'".
                    " WHERE id = ".$id;
            $this->ExecuteSQL($query);
        } catch (Exception $e){
            echo '<div class="alert alert-sucess"> Erro ao alterar vendedor!!'.$e->getMessage().'</div>';
        }
    }
    
}

