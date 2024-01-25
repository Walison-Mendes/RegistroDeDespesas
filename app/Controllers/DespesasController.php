<?php

namespace App\Controllers;

use App\Models\Despesas;

class DespesasController extends BaseController
{
    public function index()
    {
        $despesas = new Despesas();
        $data['despesas'] = $despesas->findAll();
        return view('despesas_index', $data);
    }

    public function create()
    {
        return view('despesas_create');
    }

    public function store()
    {
        $despesas = new Despesas();
        $despesas->insert([
            'descricao' => $this->request->getVar('descricao'),
            'valor' => $this->request->getVar('valor'),
            'data' => $this->request->getVar('data')
        ]);

        return redirect()->to(site_url('despesas'));
    }

    public function edit($id)
    {
        $despesas = new Despesas();
        $data['despesa'] = $despesas->find($id);
        return view('despesas_edit', $data);
    }

    public function update($id)
    {
        $despesas = new Despesas();
        $despesas->update($id, [
            'descricao' => $this->request->getVar('descricao'),
            'valor' => $this->request->getVar('valor'),
            'data' => $this->request->getVar('data')
        ]);

        return redirect()->to(site_url('despesas'));
    }

    public function delete($id)
    {
        $despesas = new Despesas();
        $despesas->delete($id);
        return redirect()->to(site_url('despesas'));
    }
}