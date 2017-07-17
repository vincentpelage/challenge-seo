<?php
    $note = 4;

    $etoiles = 0;
    $etoiledemi = 0;
    $etoilevide = 0;
    if(is_float($note)){
        $etoiles = $note - 0.5;
        $etoiledemi = 1;
        $etoilevide = 5 - $etoiles - 1;
    } else {
        $etoiles = $note;
        $etoilevide = 5 - $note;
    }
    $prix = 1.99;
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
		    <h1>Pharmaco30</h1>
            <p>Votre aspirine chez vous en moins d'une demi heure</p>
		</header>
        <main itemscope itemtype="http://schema.org/Product">
            <img itemprop="image" class="main-product" src="doliprane.jpg" alt="image doliprane">
            <div class="info-product">
                <h2 itemprop="name">Doliprane</h2>
                <h3>Sanofi Adventis</h3>
                <p class="stock"><link itemprop="availability" href="http://schema.org/InStock" />En stock</p>
                <p itemprop="aggregateRating"
    itemscope itemtype="http://schema.org/AggregateRating"><span itemprop="ratingValue" class = "la-note"><?php echo $note ?> / 5</span>
                    <?php for($i = 0 ; $i < $etoiles ;$i++): ?>
                    <img class="etoile" src="etoile-pleine.jpg" alt="note doliprane">
                    <?php endfor ?>
                    <?php for($i = 0 ; $i < $etoiledemi ;$i++): ?>
                    <img class="etoile" src="etoile-demi.jpg" alt="note doliprane">
                    <?php endfor ?>
                    <?php for($i = 0 ; $i < $etoilevide ;$i++): ?>
                    <img class="etoile" src="etoile-vide.jpg" alt="note doliprane">
                    <?php endfor ?>
                </p>
                <div class="info-product-text" itemprop="description">
                    <p>Le bon vieux Doliprane toujours efficace. En 500mg pour un rhume ou<br> 1000mg pour un cours de JavaScript.</p>
                    <p>Disponible en comprimé ou sachet effervescent.</p>
                    <p>Pharmaco30 vous livre gratuitement ce produit chez vous en moins de 30 minutes !</p>
                </div>

                <p itemprop="offers" itemscope itemtype="http://schema.org/Offer"> itemprop="price" content="<?php echo $prix ?>"><?php echo $prix ?> <span itemprop="priceCurrency" content="EUR">€</span></p>
                <form action="#" method="post">
                    <button type="submit" name="button">Acheter</button>
                </form>
            </div>
        </main>
        <footer>
            2016 - 2017 c Pharmaco30, une marque du groupe VroumVroum Doliprane
        </footer>
	</body>
</html>
