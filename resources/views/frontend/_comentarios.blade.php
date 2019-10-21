<h5 class="mb-3">Comentarios:</h5>
@forelse ($post->comentarios as $comentario)
    <div class="card-body w-100 border-left border-primary">
        <h6 class="card-subtitulo mb-2 text-muted">{{ $comentario->user->name }}  - <small class="text-muted">{{ $comentario->created_at->diffForHumans() }}</small></h6>
        <p class="card-text">{{ str_limit($comentario->texto, 200) }}</p>
        @if(Auth::user())
            <a href="{{ url("/admin/comentarios/{$comentario->id}/edit") }}" class="btn btn-info mr-2">Editar</a>
            <a href="{{ url("/admin/comentarios/{$comentario->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Você tem certeza?" class="btn btn-danger">Deletar</a>
        @endif
    </div>
    <hr>
@empty
    <div class="card-body text-center w-100">
        <h5 class="card-titulo text-danger">Não encontrado!!</h5>
        <p class="card-text">Nenhum comentario encontrado.</p>
    </div>
@endforelse

