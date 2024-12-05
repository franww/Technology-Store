<?php


namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Exibe o formulário de contato
    public function showForm()
    {
        return view('contato'); // Ajuste o caminho da view conforme necessário
    }

    // Processa os dados do formulário e armazena na base de dados
    public function submitForm(Request $request)
    {
        // Validação dos dados recebidos
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email',
            'mensagem' => 'required',
        ]);

        // Criação de um novo registro na tabela de mensagens de contato
        ContactMessage::create([
            'name' => $validated['nome'],
            'email' => $validated['email'],
            'message' => $validated['mensagem'],
        ]);

        // Redireciona para uma página de sucesso ou uma resposta
        return redirect()->route('contactos.index')->with('success', 'Mensagem enviada com sucesso!');
    }

    public function index()
    {
        // Pega todas as mensagens de contato
        $messages = ContactMessage::all();

        // Retorna a view com as mensagens
        return view('contactmessages.index', compact('messages'));
    }


    public function destroy($id)
    {
        // Encontrar a mensagem pelo ID
        $message = ContactMessage::findOrFail($id);

        // Excluir a mensagem
        $message->delete();

        // Redirecionar de volta com uma mensagem de sucesso
        return redirect()->route('contactmessages.index')->with('success', 'Mensagem excluída com sucesso!');
    }
    public function show($id)
    {
        // Encontre a mensagem pelo ID
        $message = ContactMessage::findOrFail($id);

        // Retorne a view com a mensagem
        return view('contactmessages.show', compact('message'));
    }
}
