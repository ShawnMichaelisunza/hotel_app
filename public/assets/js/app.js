const words = ["Hello, World!", "Welcome to my website!", "This is a typewriter effect."];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
currentWord = words[i];
if (isDeleting) {
document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
j--;
if (j == 0) {
isDeleting = false;
i++;
if (i == words.length) {
i = 0;
}
}
} else {
document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
j++;
if (j == currentWord.length) {
isDeleting = true;
}
}
setTimeout(type, 100);
}

type();


window.onload = function() {
    // Display the loading page for 2 seconds
    setTimeout(function() {
        // Hide the loading screen
        document.getElementById('loading').style.display = 'none';

        // Show the main content
        document.getElementById('content').style.display = 'block';
    }, ); // 2000 milliseconds = 2 seconds
};
