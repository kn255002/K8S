<!DOCTYPE html>
<html>
<head>
<title>Joke Teller</title>
<style>
body {
  font-family: sans-serif;
  text-align: center;
  margin-top: 50px;
}
#joke {
  margin-top: 20px;
  font-size: 1.2em;
}
</style>
</head>
<body>

<h1>Tell Me Your Name, Get a Joke!</h1>

<form id="nameForm">
  <label for="name">Your Name:</label>
  <input type="text" id="name" name="name" required>
  <button type="button" onclick="tellJoke()">Tell Me a Joke</button>
</form>

<div id="joke"></div>

<script>
function tellJoke() {
  const name = document.getElementById("name").value;

  // Array of jokes (you can add more!)
  const jokes = [
    `Why don't scientists trust atoms? Because they make up everything!  Hey ${name}!`,
    `What's brown and sticky? A stick!  Hope you liked that one, ${name}!`,
    `Why did the scarecrow win an award? Because he was outstanding in his field!  Good one, ${name}, right?`,
    `What do you call a lazy kangaroo? Pouch potato!  Take it easy, ${name}!`,
    `Why did the bicycle fall over? Because it was two tired!  Cheer up, ${name}!`
  ];

  const randomIndex = Math.floor(Math.random() * jokes.length);
  const selectedJoke = jokes[randomIndex];

  document.getElementById("joke").textContent = selectedJoke;

  // Clear the input field after submission (optional)
  document.getElementById("name").value = ""; 
}
</script>

</body>
</html>