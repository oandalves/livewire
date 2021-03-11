<div>
    Show Tweets.
    <br>
    {{ $content }}
    <br>
    <hr>
    <h1>Cadastrar novo tweet</h1>
    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            {{ $message }}
        @enderror
        <button type="submit">Salvar</button>
    </form>
    <hr>
    <h1>Lista de todos os Tweets</h1>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}. <br>
    @endforeach
    <div>
        <!-- Paginação do laravel -->
        {{ $tweets->links() }}
    </div>
    <hr>
</div>
