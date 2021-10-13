    
  
    <h2 class="title col-12">Догадки экстрасенсов</h2>

    <div class="form-wrapper col-6">
        <form class="form" method="post" action="/gameRound.php">
            <input class="input" placeholder="Введите загаданное число" type="number" name="userNumber" value=""  min="10" max="99">
            <button class="button">СРАВНИТЬ ЧИСЛА</button>
        </form>
    </div> <!-- .form-wrapper -->

        <?php foreach ($game->getPsychics() as $i => $psychic): ?>
            <div class="cards-item col-12">
                <h3 class="card-title" >Экстрасенс номер <?php echo $i + 1 ?> </h3>
                <p class="card-data">Предположил число: <span class="data-color"> <?php echo $psychic->getRandomNumber(); ?> </span></p>
                <p class="card-data">История догадок: <span class="data-color"> <?php echo implode(", ", $psychic->getRandomNumbersHistory()) ?> </span></p>
                <p class="card-data">История чисел: <span class="data-color"> <?php echo implode(", ", $game->getUserNumbersHistory()) ?> </span></p>
                <p class="card-data">Значение достоверности: <span class="data-color"> <?php echo $psychic->getRating(); ?> </span></p>
            </div> <!-- .cards-item -->
        <?php endforeach; ?>

    <div class="form-wrapper col-6">
        <form class="form" method="get" action="/index.php">
            <button class="button">НАЧАТЬ ЗАНОВО</button>
        </form>
    </div> <!-- .form-wrapper -->
    