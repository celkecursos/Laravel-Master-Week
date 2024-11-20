@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">
            <span>Listar Usuários</span>
            <span class="ms-auto">
                <a href="{{ route('user.create')}}" class="btn btn-success btn-sm">Cadastrar</a>
            </span>
        </div>

        <div class="card-body">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <td>Cesar</td>
                    <td>cesar@celke.com.br</td>
                    <td>
                        <a href="{{ route('user.show', ['user' => 1])}}" class="btn btn-primary btn-sm">Visualiar</a>
                        <a href="{{ route('user.edit', ['user' => 1])}}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="#" class="d-inline">
                          @csrf
                          @method('get') {{-- Alterar de get para delete --}}

                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar este registro')"> 
                            Apagar
                          </button>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <td>Kelly</td>
                    <td>kelly@celke.com.br</td>
                    <td>
                        <a href="{{ route('user.show', ['user' => 2])}}" class="btn btn-primary btn-sm">Visualiar</a>
                        <a href="{{ route('user.edit', ['user' => 2])}}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="#" class="d-inline">
                          @csrf
                          @method('get') {{-- Alterar de get para delete --}}

                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar este registro')"> 
                            Apagar
                          </button>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <th>3</th>
                    <td>Jessica</td>
                    <td>jessica@celke.com.br</td>
                    <td>
                        <a href="{{ route('user.show', ['user' => 3])}}" class="btn btn-primary btn-sm">Visualiar</a>
                        <a href="{{ route('user.edit', ['user' => 3])}}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="#" class="d-inline">
                          @csrf
                          @method('get') {{-- Alterar de get para delete --}}

                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar este registro')"> 
                            Apagar
                          </button>
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <th>4</th>
                    <td>Gabrielly</td>
                    <td>gabrielly@celke.com.br</td>
                    <td>
                        <a href="{{ route('user.show', ['user' => 4])}}" class="btn btn-primary btn-sm">Visualiar</a>
                        <a href="{{ route('user.edit', ['user' => 4])}}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="#" class="d-inline">
                          @csrf
                          @method('get') {{-- Alterar de get para delete --}}

                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar este registro')"> 
                            Apagar
                          </button>
                        </form>
                    </td>
                  </tr>
                </tbody>
              </table>

        </div>

    </div>
@endsection
