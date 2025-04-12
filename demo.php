<?php
// Start the PHP section
echo "<h2>PHP Echo Demo</h2>";
echo "<p>This text is generated using PHP's <code>echo</code> command. The current server time is: " . date("h:i:s A") . "</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javascript + php demo - ifsc 7310</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            max-width: 1000px;
            margin: 30px auto;
            padding: 25px;
            line-height: 1.8;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        h1, h2, h3 {
            color: #1e3799;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        p {
            margin: 12px 0;
            color: #2f3542;
        }
        button {
            padding: 12px 25px;
            margin: 8px 5px;
            background: linear-gradient(to right, #00a8ff, #0097e6);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s, background 0.3s;
        }
        button:hover {
            background: linear-gradient(to right, #0097e6, #0077b6);
            transform: scale(1.05);
        }
        .demo-section {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: #1e3799;
            color: white;
            border-radius: 8px;
        }
        footer a {
            color: #00a8ff;
            text-decoration: none;
        }
        footer a:hover {
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>javascript + php demo - ifsc 7310</h1>
    <p id="datetime">Page viewed at: Loading...</p>
    <h2>javascript commands</h2>

    <!-- HW9 Section -->
    <div class="demo-section">
        <h3>hw9</h3>
        <p>Below are 5 alphabetized JavaScript commands from HW9:</p>

        <div>
            <button onclick="let num = prompt('Enter a number:'); if(num > 0) { alert('Positive!'); } else if(num < 0) { alert('Negative!'); } else { alert('Zero!'); }">else if</button>
            <p>The <code>else if</code> checks additional conditions; this identifies if a number is positive, negative, or zero.</p>
        </div>

        <div>
            <button onclick="let i = 0; do { alert('Count: ' + i); i++; } while(i < 5);">do-while</button>
            <p>The <code>do-while</code> loop executes at least once, then continues if the condition is true; this counts from 0 to 4.</p>
        </div>

        <div>
            <button onclick="let num = prompt('Enter a number:'); if(num > 0) { alert('Positive!'); } else { alert('Not positive!'); }">if-else</button>
            <p>The <code>if-else</code> statement runs one block if true, another if false; here, it checks a number’s sign.</p>
        </div>

        <div>
            <button onclick="let num = prompt('Enter a number:'); if(num > 0) { alert('Positive number!'); }">if</button>
            <p>The <code>if</code> statement executes code if a condition is true; here, it checks if a number is positive.</p>
        </div>

        <div>
            <button onclick="let i = 0; while(i < 5) { alert('Count: ' + i); i++; }">while</button>
            <p>The <code>while</code> loop runs as long as a condition is true; this counts from 0 to 4.</p>
        </div>
    </div>

    <!-- HW8 Section -->
    <div class="demo-section">
        <h3>hw8</h3>
        <p>Below are 7 alphabetized JavaScript commands from HW8:</p>

        <div>
            <button onclick="document.body.appendChild(document.createElement('p')).innerText = 'New paragraph!';">appendChild()</button>
            <p>The <code>appendChild()</code> method adds a new node (here, a paragraph) to the end of an element’s children.</p>
        </div>

        <div>
            <button onclick="navigator.clipboard.writeText('Copied!').then(() => alert('Text copied to clipboard!'));">clipboard.writeText()</button>
            <p>The <code>clipboard.writeText()</code> method copies text to the clipboard asynchronously.</p>
        </div>

        <div>
            <button onclick="let el = document.createElement('div'); el.innerText = 'Hello!'; document.body.appendChild(el);">createElement()</button>
            <p>The <code>createElement()</code> method creates a new HTML element, here a div with text.</p>
        </div>

        <div>
            <button onclick="let sum = 0; for(let i = 0; i < 200; i++) { sum += i; } alert('Sum from 0 to 199: ' + sum);">for loop</button>
            <p>The <code>for</code> loop iterates over a range; this sums numbers from 0 to 199 (result: 19,900).</p>
        </div>

        <div>
            <button onclick="let arr = [1, 2, 3]; alert(arr.reduce((a, b) => a + b));">reduce()</button>
            <p>The <code>reduce()</code> method reduces an array to a single value, here summing array elements.</p>
        </div>

        <div>
            <button onclick="let el = document.querySelector('h1'); el.scrollIntoView({ behavior: 'smooth' });">scrollIntoView()</button>
            <p>The <code>scrollIntoView()</code> method scrolls the page to an element, here the h1, with smooth animation.</p>
        </div>

        <div>
            <button onclick="window.open('https://ualr.edu', '_blank');">window.open()</button>
            <p>The <code>window.open()</code> method opens a new browser tab or window with a specified URL.</p>
        </div>
    </div>

    <!-- HW7 Section -->
    <div class="demo-section">
        <h3>hw7</h3>
        <p>Below are 10 alphabetized JavaScript commands from HW7:</p>

        <div>
            <button onclick="let num = Math.round(Math.random() * 100); alert('Random number: ' + num);">array.sort()</button>
            <p>The <code>Array.sort()</code> method sorts array elements; here, paired with <code>Math.random()</code> to show a random number.</p>
        </div>

        <div>
            <button onclick="document.body.classList.toggle('dark-mode');">classList.toggle()</button>
            <p>The <code>classList.toggle()</code> method adds or removes a CSS class (e.g., <code>.dark-mode { background: #2f3542; color: white; }</code>).</p>
        </div>

        <div>
            <button onclick="let text = 'Hello'; alert(text.concat(' World!'));">concat()</button>
            <p>The <code>concat()</code> method joins strings, here combining 'Hello' and 'World!'.</p>
        </div>

        <div>
            <button onclick="fetch('https://api.chucknorris.io/jokes/random').then(res => res.json()).then(data => alert(data.value)).catch(err => alert('Error: ' + err));">fetch()</button>
            <p>The <code>fetch()</code> method retrieves data from an API, here showing a Chuck Norris joke.</p>
        </div>

        <div>
            <button onclick="let x = 10; alert(x > 5 ? 'Yes' : 'No');">if ternary</button>
            <p>The ternary operator (<code>?:</code>) is a concise if-else; this checks if 10 > 5.</p>
        </div>

        <div>
            <button onclick="localStorage.setItem('visit', Date.now()); alert('Last visit saved: ' + localStorage.getItem('visit'));">localStorage.setItem()</button>
            <p>The <code>localStorage.setItem()</code> method stores data in the browser, here saving a timestamp.</p>
        </div>

        <div>
            <button onclick="let nums = [1, 2, 3]; alert(nums.map(n => n * 2));">map()</button>
            <p>The <code>map()</code> method transforms array elements, here doubling numbers.</p>
        </div>

        <div>
            <button onclick="document.querySelector('h1').style.color = '#e74c3c';">querySelector()</button>
            <p>The <code>querySelector()</code> method selects an element by CSS selector, here changing h1 color.</p>
        </div>

        <div>
            <button onclick="setTimeout(() => alert('3 seconds passed!'), 3000);">setTimeout()</button>
            <p>The <code>setTimeout()</code> function delays code execution, alerting after 3 seconds.</p>
        </div>

        <div>
            <button onclick="let str = 'javascript'; alert(str.toUpperCase());">toUpperCase()</button>
            <p>The <code>toUpperCase()</code> method converts a string to uppercase, e.g., 'javascript' to 'JAVASCRIPT'.</p>
        </div>
    </div>

    <!-- HW6 Section -->
    <div class="demo-section">
        <h3>hw6</h3>
        <p>Below are 10 alphabetized JavaScript commands from HW6:</p>

        <div>
            <button onclick="alert('Hello, class!')">alert()</button>
            <p>The <code>alert()</code> function displays a pop-up message to the user.</p>
        </div>

        <div>
            <button onclick="let colors = ['red', 'blue', 'green']; alert('Second color: ' + colors[1]);">array access</button>
            <p>An <code>array</code> stores items, accessed by index (starting at 0); this shows the second color.</p>
        </div>

        <div>
            <button onclick="console.log('Check the console!')">console.log()</button>
            <p>The <code>console.log()</code> method outputs a message to the browser’s console for debugging.</p>
        </div>

        <div>
            <button onclick="for(let i = 0; i < 3; i++) { alert('Loop iteration ' + i); }">for loop</button>
            <p>A <code>for</code> loop repeats code a set number of times, here showing 3 alerts.</p>
        </div>

        <div>
            <button onclick="function sayHi() { alert('Hi there!'); }; sayHi();">function</button>
            <p>A <code>function</code> groups reusable code; this defines and calls one to show a message.</p>
        </div>

        <div>
            <button onclick="if(confirm('Do you like this HW?')) { alert('Great!'); } else { alert('Oh no!'); }">if-else</button>
            <p>The <code>if-else</code> statement runs code based on a condition, using <code>confirm()</code> for input.</p>
        </div>

        <div>
            <button onclick="document.getElementById('demo6').innerHTML = 'Text changed!'">innerHTML</button>
            <p id="demo6">Original text.</p>
            <p>The <code>innerHTML</code> property modifies an element’s content, here updating a paragraph.</p>
        </div>

        <div>
            <button onclick="let now = new Date(); alert('Current time: ' + now);">show date</button>
            <p>The <code>Date()</code> object provides the current date and time as a string.</p>
        </div>

        <div>
            <button onclick="let sum = 5 + 10; alert('5 + 10 = ' + sum);">simple math</button>
            <p>The <code>let</code> keyword declares a variable; this shows basic arithmetic with <code>+</code>.</p>
        </div>

        <div>
            <button onclick="document.body.style.backgroundColor = 'lightblue'">style</button>
            <p>The <code>style</code> property modifies an element’s CSS dynamically, here changing the background.</p>
        </div>
    </div>

    <!-- HW5 Section -->
    <div class="demo-section">
        <h3>hw5</h3>
        <p>Below are 4 alphabetized JavaScript commands from HW5:</p>

        <div>
            <button onclick="alert('This is a pop-up!')">alert()</button>
            <p>The <code>alert()</code> function shows a pop-up message to the user.</p>
        </div>

        <div>
            <button onclick="document.write('This replaces everything!')">document.write()</button>
            <p>The <code>document.write()</code> method overwrites the entire page with new content—use with caution!</p>
        </div>

        <div>
            <p id="output5">This will change!</p>
            <button onclick="document.getElementById('output5').innerHTML = 'Hello, World!'">innerHTML</button>
            <p>The <code>innerHTML</code> property updates an element’s content, here changing text to 'Hello, World!'.</p>
        </div>

        <div>
            <button onclick="window.print()">window.print()</button>
            <p>The <code>window.print()</code> method opens the browser’s print dialog for the page.</p>
        </div>
    </div>

    <footer>
        <p>Back to <a href="http://yourwebsite.com/index.html">homepage</a></p>
    </footer>

    <script>
        document.getElementById('datetime').innerText = `Page viewed at: ${new Date().toLocaleString()}`;
    </script>
</body>
</html>