<html>
    <head>
        <title>My Coffee</title>
        <body>
            <h1>This is a test 1</h1>
        <?php 
        
        $first  =   "The quick brown fox";
        $second =   "Jumps over the lazy dog";

        $third  =   $first;
        $third  .=  $second;

        echo $third;
        
        ?>
        <br />
        Lowercase: <?php    echo strtolower($third);   ?> <br />
        Uppercase: <?php    echo strtoupper($third);   ?> <br />           
        Ucfirst: <?php    echo ucfirst($third);   ?> <br />          
        Ucwords: <?php    echo ucwords($third);   ?> <br />           
        <br />
        Strlen : <?php    echo strlen($third);   ?> <br />
        Trim: <?php    echo trim($third);   ?> <br />           
        Ucfirst: <?php    echo strstr($third);   ?> <br />          
        Ucwords: <?php    echo ucwords($third);   ?> <br />      
        </body>
    </head>
</html>
