@extends('adminlte::page')

@section('title', 'Notícias')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Notícias
    <small class="text-muted">- Formulário</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Formulário de Notícias
        </h3>
    </div>

    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Erro ao realizar esta operação</strong></p>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        @if (isset($noticia))
            <form action="/noticias/{{ $noticia->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
        @else
            <form action="/noticias" method="POST" enctype="multipart/form-data">
        @endif
        
            @csrf

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" placeholder="Digite o título da notícia" class="form-control" value="{{ isset($noticia) ? $noticia->titulo : '' }}">
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea name="conteudo" placeholder="Digite o conteúdo da notícia" class="form-control" rows="5">{{ isset($noticia) ? $noticia->conteudo : '' }}</textarea>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem Destaque</label>
                <input type="file" name="imagem"/>
                @if (isset($noticia) && $noticia->imagem)
                    <img src="{{ $noticia->imagem }}" alt="" height="100px" class="d-block">
                @endif
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="A" {{ isset($noticia) && $noticia->status == "A" ? "selected='selected'" : "" }}>Ativo</option>
                    <option value="I" {{ isset($noticia) && $noticia->status == "I" ? "selected='selected'" : "" }}>Inativo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data_publicacao">Data da Publicação</label>
                <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR" value="{{ isset($noticia) ? $noticia->data_publicacao->format("d/m/Y") : '' }}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

        </form>
        
        <div class="mt-5">
            <h4 class="mb-2">Comentários:</h4>
            @if (isset($noticia))
                @foreach($noticia->comentarios as $comentario)
                    {{ $comentario->conteudo }} <hr/>
                @endforeach
            @endif
        </div>
    </div>
</div>
@stop

