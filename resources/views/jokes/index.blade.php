<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joke App</title>
</head>
<body>
<h1>Programming Jokes</h1>
<ul>
    @foreach ($jokes as $joke)
        <li>{{ $joke->setup }} - {{ $joke->punchline }}</li>
    @endforeach
</ul>
<button onclick="refreshJokes()">Refresh Jokes</button>

<script>
    function refreshJokes() {
        fetch('/api/jokes')
            .then(response => response.json())
            .then(jokes => {
                const jokeList = document.querySelector('ul');
                jokeList.innerHTML = '';
                jokes.forEach(joke => {
                    const li = document.createElement('li');
                    li.textContent = `${joke.setup} - ${joke.punchline}`;
                    jokeList.appendChild(li);
                });
            });
    }
</script>
</body>
</html>
