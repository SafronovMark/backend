<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <title>Задание 3</title>
</head>

<body>
    <!-- <div class="name-block">
        <span>Name</span>
        <input value="test" class="input-block" />
    </div> -->
    <div class="form-container">
        <form method="POST" action="">
            <div class="input-block">
                <span>Имя</span>
                <input type="text" class="input-item" name="name" placeholder="Петр" />
            </div>
            <div class="input-block">
                <span>Email</span>
                <input type="text" class="input-item" name="email" placeholder="petr@mail.com" />
            </div>
            <div class="input-block">
                <span>Дата Рождения</span>
                <input type="date" class="input-item" name="date" />
            </div>
            <div class="input-block">
                <span>Пол</span>
                <div class="radios">
                    <div class="male-radio">
                        <input class="" type="radio" name="gender" value="m" />
                        <label class="" for="male">Мужской</label>
                    </div>
                    <div class="female-radio">
                        <input class="" type="radio" name="gender" value="f" />
                        <label class="" for="female">Женский</label>
                    </div>
                </div>
            </div>

            <div class="input-block">
                <span>Конечности</span>
                <div class="radios">
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="1" />
                        <label class="form-check-label" for="male">1</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="2" />
                        <label class="form-check-label" for="female">2</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="3" />
                        <label class="form-check-label" for="female">3</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="4" />
                        <label class="form-check-label" for="female">4</label>
                    </div>
                </div>
            </div>
            <div class="input-block">
                <span>Способности</span>
                <select class="input-item form-select-lg mb-2" name="select[]" multiple>
                    <option value="inf" selected>Бессмертие</option>
                    <option value="through">Прохождение сквозь стены</option>
                    <option value="levitation">Левитация</option>
                </select>
            </div>
            <div class="input-block">
                <span>Биография</span>
                <textarea class="input-item" placeholder="Люблю пиццу" name="bio"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="y" id="policy" name="policy" />
                <label class="form-check-label" for="policy">Согласен с политикой обработки персональных данных.</label>
            </div>
            <button class="btn btn-primary" type="submit" id="send-btn">Отправить</button>
        </form>
    </div>
</body>

</html>
