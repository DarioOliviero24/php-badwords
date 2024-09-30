<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> alternativa PHP Badwords</title>
</head>
<body>
    <header>
       <h1>RISPOSTE</h1>  
    </header>

    <main>

        <div>
            <div>
                paragrafo : 
                 <p>
                    <?php echo $_GET['paragraf']; ?>
                 </p>
            </div>
           
            <div>
                parole da censurare : 
                <p>
                    <?php echo $_GET['badword']; ?>
                </p>
            </div>
        </div>
        <hr>
        <div>
            <div>
                paragrafo : 
                 <p>
                    <?php echo $_GET['paragraf']; ?>
                 </p>
                 <div>
                    Lunghezza del paragrafo: <?php echo strlen($_GET['paragraf']); ?>
                </div>
            </div>
           
            <div>
                parola censurata : 
                <p>
                    <?php echo $_GET['badword']; ?>
                </p>
                <div>
                    Lunghezza parola censurata: <?php echo strlen($_GET['badword']); ?>
                </div>
            </div>
            
            </div>
        </div>
        <hr>
        <div>
            <a href="./index.php">
                torna alla pagina precedente
            </a>
        </div>
        
    </main>
    
    
</body>
</html>