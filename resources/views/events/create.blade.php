@extends('layout.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Evento:</label>
                <input type="file" class="form-control-file" id="image" name="image" placeholder="Nome do Evento">
            </div>

            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>

            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="dt_event" name="dt_event">
            </div>

            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
            </div>

            <div class="form-group">
                <label for="title">Evento privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descreva o que vai acontecer no evento!"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Cadeiras"> Cadeiras
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Palco"> Palco
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Cerveja Grátis"> Cerveja Grátis
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Open Food"> Open Food
                </div>

                <div class="form-group">
                    <input type="checkbox" name="itens[]"  value="Brindes"> Brindes
                </div>

            </div>
                <input type="submit" class="btn btn-primary mt-2 mb-5" value="Criar Evento">
        </form>
    </div>
@endsection