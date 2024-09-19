{\rtf1\ansi\ansicpg1252\cocoartf2818
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <!DOCTYPE html>\
<html lang="en">\
<head>\
    <meta charset="UTF-8">\
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <title>Factorial Calculator</title>\
</head>\
<body>\
    <h1>Factorial Calculator</h1>\
    \
    <form method="post" action="">\
        <label for="number">Enter a number:</label>\
        <input type="number" name="number" id="number" required>\
        <button type="submit">Calculate Factorial</button>\
    </form>\
\
    <?php\
    // Function to calculate factorial\
    function factorial($n) \{\
        if ($n <= 1) \{\
            return 1;\
        \} else \{\
            return $n * factorial($n - 1);\
        \}\
    \}\
\
    // Handling form submission\
    if ($_SERVER["REQUEST_METHOD"] == "POST") \{\
        $number = intval($_POST['number']);\
        if ($number >= 0) \{\
            $result = factorial($number);\
            echo "<h2>The factorial of $number is: $result</h2>";\
        \} else \{\
            echo "<h2>Please enter a non-negative number.</h2>";\
        \}\
    \}\
    ?>\
</body>\
</html>}