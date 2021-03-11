<div>
    Show Tweets.
    <br>
    {{ $message }}
    <br>
    <input type="text" name="message" id="message" wire:model="message">

    <h1>Lista de todos os Tweets</h1>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}. <br>
    @endforeach
</div>
