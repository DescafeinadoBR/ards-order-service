<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'title' => 'Teste 1', 'product' => 1, 'client' => 1, 'status' => 'Aberto'],
            ['id' => 2, 'title' => 'Teste 2', 'product' => 2, 'client' => 2, 'status' => 'Aberto'],
            ['id' => 3, 'title' => 'Teste 3', 'product' => 3, 'client' => 3, 'status' => 'Aberto'],
            ['id' => 4, 'title' => 'Teste 4', 'product' => 4, 'client' => 4, 'status' => 'Aberto'],
        ];
        return view('admin.services.listing', compact('data'));
    }
    
    public function create()
    {
        // Exibir o formulário de criação
    }
    
    public function store(Request $request)
    {
        // Salvar um novo recurso no banco de dados
    }
    
    public function show($id)
    {
        // Exibir um recurso específico
    }
    
    public function edit($id)
    {
        // Exibir o formulário de edição
    }
    
    public function update(Request $request, $id)
    {
        // Atualizar um recurso no banco de dados
    }
    
    public function destroy($id)
    {
        // Excluir um recurso do banco de dados
    }
    
}
