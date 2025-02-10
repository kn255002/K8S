<!DOCTYPE html>
<html>
<head>
<title>Joke Teller</title>
<style>
/* ... (same CSS as before) ... */
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
  const jokeDiv = document.getElementById("joke");

  if (name.trim() === "") { // Check for empty input
    jokeDiv.textContent = "Please enter your name!";
    return; // Stop the function
  }

  const jokes = [
    // ... (your jokes array) ...
  ];

  try {
    const randomIndex = Math.floor(Math.random() * jokes.length);
    const selectedJoke = jokes[randomIndex];
    jokeDiv.textContent = selectedJoke;
    document.getElementById("name").value = ""; // Clear input
  } catch (error) { // Catch potential errors
    console.error("An error occurred:", error);
    jokeDiv.textContent = "Oops! Something went wrong. Please try again.";
  }
}
</script>

</body>
</html>
