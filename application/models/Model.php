<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Modelo das classes básicas para o CRUD */
class Model extends CI_Model {

	/**
	 * [get description]
	 * @return [type] [description]
	 */
	public function get()
	{
		// Busca todos os registros
	}


	/**
	 * [get_id description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getId($id)
	{
		// Busca um registro especifico
	}


	/**
	 * [save description]
	 * @param  [type] $dados [description]
	 * @return [type]        [description]
	 */
	public function save($dados)
	{
		// Salva um registro
	}


	/**
	 * [update description]
	 * @param  [type] $dados [description]
	 * @param  [type] $id    [description]
	 * @return [type]        [description]
	 */
	public function update($dados, $id)
	{
		// Atualiza um registro
	}


	public function delete($id)
	{
		// Deleta um registro
	}

}
