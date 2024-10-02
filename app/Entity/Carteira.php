<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;
	
 	

class Carteira{

  /**
   * Identificador único da carteira
   * @var integer
   */
  public $id;

  /**
   * ticker da carteira
   * @var string
   */
  public $ticker;

  /**
   * Descrição da carteira (pode conter html)             
   * @var string
   */
  public $produto;

   /**
   * Descrição da carteira (pode conter html)             
   * @var string
   */
  public $qtde;

   /**
   * Descrição da carteira (pode conter html)             
   * @var string
   */
  public $p_medio;

    /**
   * Descrição da carteira (pode conter html)             
   * @var string
   */
  public $c_atual;

   /**
   * Descrição da carteira (pode conter html)             
   * @var string
   */
  public $p_unitario;

   /**
   * Descrição da carteira (pode conter html)             
   * @var string
   */
  public $t_provento;

  /**
   * Descrição da carteira (pode conter html)             
   * @var string
   */
  public $rendimento;
	
  /**
   * Define se a carteira ativa
   * @var string(s/n)
   */
  public $ativo;

  /**
   * Data de publicação da carteira
   * @var string
   */
  public $data;

  /**
   * Método responsável por cadastrar uma nova carteira no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR A carteira NO BANCO
    $obDatabase = new Database('carteiras');
    $this->id = $obDatabase->insert([
                                      'ticker'	    => $this->ticker,
                                      'produto'	    => $this->produto,
                                      'qtde'	      => $this->qtde,
                                      'p_medio'	    => $this->p_medio,
                                      'c_atual'	    => $this->c_atual,
                                      'p_unitario'  => $this->p_unitario,
                                      't_provento'  => $this->t_provento,
                                      'rendimento'  => $this->rendimento,
                                      'ativo'       => $this->ativo,
                                      'data'        => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a carteira no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('carteiras'))->update('id = '.$this->id,[
                                                              'ticker'	    => $this->ticker,
                                                              'produto'	    => $this->produto,
                                                              'qtde'	      => $this->qtde,
                                                              'p_medio'	    => $this->p_medio,
                                                              'c_atual'	    => $this->c_atual,
                                                              'p_unitario'  => $this->p_unitario,
                                                              't_provento'  => $this->t_provento,
                                                              'rendimento'  => $this->rendimento,
                                                              'ativo'       => $this->ativo,
                                                              'data'        => $this->data
                                                              ]);
  }

  /**
   * Método responsável por excluir a carteira do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('carteiras'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as carteiras do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getCarteiras($where = null, $order = null, $limit = null){
    return (new Database('carteiras'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma carteira com base em seu ID
   * @param  integer $id
   * @return carteira
   */
  public static function getCarteira($id){
    return (new Database('carteiras'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}