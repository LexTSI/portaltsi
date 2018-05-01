<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Modelo das classes básicas para o CRUD */
class Controller extends CI_Controller {

	/**
	 * [index description]
	 * @return [type] [description]
	 */

	//view testing the index
	public function index()
	{	
		//thing of the coxinha, this is all just to change the title
		$date['title'] = 'PNC';
		$date['description'] = 'VSF coxinha';

		$this->load->view('admin/Header', $date);
		$this->load->view('admin/index');
		$this->load->view('admin/Footer');
		// Função listar itens
	}


	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function show()
	{
		// Função listar item especifico
	}



	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create()
	{
		// Função cadastrar (View)
	}


	/**
	 * [store description]
	 * @return [type] [description]
	 */
	public function store()
	{
		// Função salvar no banco (BD)
	}


	/**
	 * [edit description]
	 * @return [type] [description]
	 */
	public function edit()
	{
		// Função editar (View)
	}


	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function update()
	{
		// Função atualiazar no banco (BD)
	}


	public function delete()
	{
		// Função deletar no banco (BD)
	}


}
