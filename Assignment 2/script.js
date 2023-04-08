function convert() {
    let weightInput = document.getElementById("weight");
    let unitSelect = document.getElementById("unit");
    let resultSpan = document.getElementById("output");
    let weight = parseFloat(weightInput.value);
    let unit = unitSelect.value;
    
    if (!isNaN(weight)) {
        if (unit === "kg") {
            let pounds = weight * 2.2046;
            resultSpan.textContent = `${weight} kilograms is equal to ${pounds.toFixed(2)} pounds.`;
        } else {
            let kilograms = weight * 0.4536;
            resultSpan.textContent = `${weight} pounds is equal to ${kilograms.toFixed(2)} kilograms.`;
        }
    } else {
        resultSpan.textContent = "Invalid input. Please enter a valid weight.";
    }
}
//max
function calculate() {
	// get input value
	let numbersInput = document.getElementById("numbers").value;
	
	// convert input string to array of numbers
	let numbersArray = numbersInput.split(",").map(Number);
	
	// calculate max, min, sum, and average
	let max = Math.max(...numbersArray);
	let min = Math.min(...numbersArray);
	let sum = numbersArray.reduce((acc, cur) => acc + cur, 0);
	let avg = sum / numbersArray.length;
	
	// calculate reverse order
	let reverseArray = numbersArray.slice().reverse();
	
	// display output
	let output = document.getElementById("output");
	output.innerHTML = `
	  <p>Max: <span>${max}</span></p>
	  <p>Min: <span>${min}</span></p>
	  <p>Sum: <span>${sum}</span></p>
	  <p>Average: <span>${avg.toFixed(2)}</span></p>
	  <p>Reverse Order: <span>${reverseArray.join(", ")}</span></p>
	`;
  }
  const textArea = document.getElementById('textArea');
  const clearButton = document.getElementById('clearButton');
  const capitalizeButton = document.getElementById('capitalizeButton');
  const sortButton = document.getElementById('sortButton');
  const reverseButton = document.getElementById('reverseButton');
  const stripButton = document.getElementById('stripButton');
  const addNumberButton = document.getElementById('addNumberButton');
  const shuffleButton = document.getElementById('shuffleButton');
  
  // Clear All button
  clearButton.addEventListener('click', () => {
  textArea.value = '';
  });
  
  // Capitalize button
  let capitalize = false;
  capitalizeButton.addEventListener('click', () => {
  capitalize = !capitalize;
  let text = textArea.value;
  if (capitalize) {
  textArea.value = text.toUpperCase();
  capitalizeButton.classList.add('active');
  } else {
  textArea.value = text.toLowerCase();
  capitalizeButton.classList.remove('active');
  }
  });
  
  // Sort button
  sortButton.addEventListener('click', () => {
  let lines = textArea.value.split('\n');
  lines.sort();
  textArea.value = lines.join('\n');
  });
  
  // Reverse button
  reverseButton.addEventListener('click', () => {
  let lines = textArea.value.split('\n');
  for (let i = 0; i < lines.length; i++) {
  lines[i] = lines[i].split('').reverse().join('');
  }
  textArea.value = lines.join('\n');
  });
  
  // Strip Blank button
  stripButton.addEventListener('click', () => {
  let lines = textArea.value.split('\n');
  lines = lines.filter(line => line.trim() !== '');
  textArea.value = lines.join('\n');
  });
  
  // Add Numbers button
addNumberButton.addEventListener('click', () => {
	let lines = textArea.value.split('\n');
	for (let i = 0; i < lines.length; i++) {
	  lines[i] = `${i + 1}. ${lines[i]}`;
	}
	textArea.value = lines.join('\n');
  });
  
  // Shuffle button
  shuffleButton.addEventListener('click', () => {
  let lines = textArea.value.split('\n');
  for (let i = lines.length - 1; i > 0; i--) {
  const j = Math.floor(Math.random() * (i + 1));
  [lines[i], lines[j]] = [lines[j], lines[i]];
  }
  textArea.value = lines.join('\n');
  });

  const quotes = [
    "Life is like a blank canvas and you are the artist. Every brushstroke is a decision, every color choice is a reflection of your soul. So paint boldly, without hesitation, for you never know what masterpiece you might create."
  ];
  
  function getRandomQuote() {
    const index = Math.floor(Math.random() * quotes.length);
    return quotes[index];
  }
  
  function changeColors(color1, color2, color3) {
    document.getElementById("quote-box").style.backgroundColor = color1;
    document.getElementById("quote-box").style.color = color2;
    document.getElementById("quote-box").style.borderColor = color3;
  }
  
  document.addEventListener("DOMContentLoaded", function() {
    const quoteEl = document.getElementById("quote");
    const color1 = "#f0f0f0";
    const color2 = "#333";
    const color3 = "#333";
    changeColors(color1, color2, color3);
    quoteEl.innerHTML = getRandomQuote();
  
    document.getElementById("color1").addEventListener("click", function() {
      changeColors("#b2f9b5", "#333", "#333");
    });
  
    document.getElementById("color2").addEventListener("click", function() {
      changeColors("#f7c843", "#333", "#333");
    });
  
    document.getElementById("color3").addEventListener("click", function() {
      changeColors("#C6E2FF", "#333", "#333");
    });
  
    document.getElementById("color4").addEventListener("click", function() {
      changeColors("#FFA500", "#333", "#333");
    });
  });
  