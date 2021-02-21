<form action="{{ url('') }}" method="post">
    @{{ csrf_token() }}
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="">
    <button type="submit" class="btn btn-success">Salvar</button>
    </form>
