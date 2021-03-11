<div>
    Show Tweets.
    <br>
    {{ $message }}
    <br>
    <hr>
    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="message" id="message" wire:model="message">
        <button type="submit">Salvar</button>
    </form>
    <hr>
    <h1>Lista de todos os Tweets</h1>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}. <br>
    @endforeach
</div>
