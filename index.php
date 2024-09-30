<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <header>
       <h1>PHP Badwords</h1>  
    </header>

    <main>
        <form action="./alternativa.php" method="GET">
            <div>
                <div>
                    <label for="paragraf">
                        paragrafo
                    </label>
                </div>
                <textarea id="paragraf" name="paragraf" placeholder="inserisci il testo"></textarea>

            </div>
            <div>
                <div>
                    <label for="badword">
                        parole da censurare
                    </label>
                </div>
                <input id="badword" name="badword" type="text" value="" placeholder="inserisci il testo"></input>

            </div>
            <div>
                <button>
                    invia
                </button>
            </div>

        </form>
    </main>
    
</body>
</html>