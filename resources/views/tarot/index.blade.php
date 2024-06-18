<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritatis Tarot</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="images/sparkl.png" class="sparkling">
    <p class="main-text">VERITATIS TAROT.</p>
    <p class="sec-text">in nomine purae mentis et cordis sinceri </p>
    <hr color="#620000" width="100%"/>
    <div class="second-block">
        <h1>Verum non vocant cum audire nolunt</h1>
        <p>Не зови правду, когда не хочешь ее слышать</p>
        <form action="/generate" method="POST">
        @csrf
        <button type="submit">Сгенерировать расклад</button>
    </form>
    
    </div>
    @if(isset($spread))
        <div class="result">
            <div class="cards">
                <div class="card">
                    <img src="/images/{{ $cards['card1'] }}" alt="{{ $spread->card1 }}">
                </div>
                <div class="card">
                    <img src="/images/{{ $cards['card2'] }}" alt="{{ $spread->card2 }}">
                </div>
                <div class="card">
                    <img src="/images/{{ $cards['card3'] }}" alt="{{ $spread->card3 }}">
                </div>

            </div>
                <h1>Tua tarot propagationem</h1>

            <div class="description">
                <h2>Описание расклада</h2>
                <p>{{ $spread->description }}</p>
            </div>
        </div>
    @endif

</body>
</html>