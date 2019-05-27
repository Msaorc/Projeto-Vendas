<?php

Class Venda extends Conexao{
    private $id;
    private $id_vendedor;
    private $valor_venda;    
    private $comissao;
    private $data_venda;
    
    function __construct() {
        parent::__construct();
    }
    
    function getId() {
        return $this->id;
    }

    function getId_vendedor() {
        return $this->id_vendedor;
    }

    function getValor_venda() {
        return $this->valor_venda;
    }

    function getComissao() {
        return $this->comissao;
    }

    function getData_venda() {
        return $this->data_venda;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_vendedor($id_vendedor) {
        $this->id_vendedor = $id_vendedor;
    }

    function setValor_venda($valor_venda) {
        $this->valor_venda = $valor_venda;
    }

    function setComissao($comissao) {
        $this->comissao = $comissao;
    }

    function setData_venda($data_venda) {
        $this->data_venda = $data_venda;
    }

    function RealizarVenda(){
        try{
            $query = "INSERT INTO vendas (id_vendedor, comissao, valor_venda, data_venda) "
                    . "VALUES (".$this->getId_vendedor().",".$this->getComissao().","
                    . "".$this->getValor_venda().",'".$this->getData_venda()."')";
        
            $this->ExecuteSQL($query);
        } catch (Exception $e){
            echo '<div class="alert alert-sucess"> Erro ao registrar venda!!'.$e->getMessage().'</div>';
        }
    }
    
    function PrepararVenda($id_vendedor, $valor_venda, $comissao){
        $this->setId_vendedor($id_vendedor);
        $this->setValor_venda($valor_venda);
        $this->setData_venda(date('Y-m-d'));        
        $this->setComissao($comissao);
    }
    
    function GetVendas(){
        $query = "SELECT 
                    V.id,
                    VN.nome, 
                    VN.email,  
                    V.valor_venda, 
                    V.comissao, 
                    V.data_venda
                  FROM vendas V 
                  INNER JOIN vendedor VN ON
                    V.id_vendedor = VN.id ";
        
        $this->ExecuteSql($query);
        
        $this->GetLista();
    }
    
    function GetVendasVendedor($vendedor){
        $query = "SELECT 
                    V.id,
                    VN.nome, 
                    VN.email,  
                    V.valor_venda, 
                    V.comissao, 
                    V.data_venda
                  FROM vendas V 
                  INNER JOIN vendedor VN ON
                    V.id_vendedor = VN.id
                  WHERE V.id_vendedor = ".$vendedor;
        $this->ExecuteSql($query);
        
        $this->GetLista();
    }
    
    private function GetLista(){
        $i = 1;
        $this->itens = null;
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'id' => $lista['id'],
                'nome' => $lista['nome'],
                'email' => $lista['email'],
                'valor_venda' => $lista['valor_venda'],
                'comissao' => $lista['comissao'],
                'data_venda' => $lista['data_venda']
            );
        $i++;
        endwhile;
    }
    
    function gerarComissão($valor_venda){
        $comissao = $valor_venda * 0.085;
        
        return $comissao;
    }
    
    function ExcluirVenda($id){
        try{
            $query = "DELETE FROM vendas WHERE id = ".$id;        
            $this->ExecuteSQL($query);
        } catch (Exception $e){
            echo '<div class="alert alert-sucess"> Erro ao excluir venda!!'.$e->getMessage().'</div>';
        }
    }
}
