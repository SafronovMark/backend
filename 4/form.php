<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <title>Задание 4</title>
</head>

<body>

    <?php
    if (!empty($messages['success'])) {
        print('<div id="messages">');
        print $messages['success'];
        print('</div>');
    }
    ?>

    <div class="form-container">
        <form method="POST" action="">
            <div class="input-block">
                <span><?php print $messages['name']; ?></span>
                <input type="text" class="input-item <?php if ($errors['name']) {
                                                            print 'error';
                                                        } ?>" name="name" placeholder="Петр" value="<?php print $values['name']; ?>" />
            </div>
            <div class="input-block">
                <span><?php print $messages['email']; ?></span>
                <input type="text" class="input-item <?php if ($errors['email']) {
                                                            print 'error';
                                                        } ?>" name="email" placeholder="petr@mail.com" value="<?php print $values['email']; ?>" />
            </div>
            <div class="input-block">
                <span><?php print $messages['date']; ?></span>
                <input type="date" class="input-item <?php if ($errors['date']) {
                                                            print 'error';
                                                        } ?>" name="date" value="<?php print $values['date']; ?>" />
            </div>
            <div class="input-block">
                <span><?php print $messages['gender']; ?></span>
                <div class="radios <?php if ($errors['gender']) {
                                        print 'error';
                                    } ?>">
                    <div class="male-radio">
                        <input class="" type="radio" name="gender" value="m" <?php if ($values['gender'] == 'm') {
                                                                                    print 'checked';
                                                                                }; ?> />
                        <label class="" for="male">Мужской</label>
                    </div>
                    <div class="female-radio">
                        <input class="" type="radio" name="gender" value="f" <?php if ($values['gender'] == 'f') {
                                                                                    print 'checked';
                                                                                }; ?> />
                        <label class="" for="female">Женский</label>
                    </div>
                </div>
            </div>

            <div class="input-block">
                <span><?php print $messages['limbs']; ?></span>
                <div class="radios <?php if ($errors['limbs']) {
                                        print 'error';
                                    } ?>">
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="1" <?php if ($values['limbs'] == '1') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label" for="male">1</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="2" <?php if ($values['limbs'] == '2') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label" for="female">2</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="3" <?php if ($values['limbs'] == '3') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label" for="female">3</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="4" <?php if ($values['limbs'] == '4') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label" for="female">4</label>
                    </div>
                </div>
            </div>
            <div class="input-block">
                <span><?php print $messages['select']; ?></span>
                <select class="input-item form-select-lg mb-2 <?php if ($errors['select']) {
                                                                    print 'error';
                                                                } ?>" name="select[]" multiple>
                    <option value="inf" <?php $arr = explode(',', $values['select']);
                                        if ($arr != '') {
                                            foreach ($arr as $value) {
                                                if ($value == "inf") {
                                                    print 'selected';
                                                }
                                            }
                                        }
                                        ?>>Бессмертие</option>
                    <option value="through" <?php $arr = explode(',', $values['select']);
                                            if ($arr != '') {
                                                foreach ($arr as $value) {
                                                    if ($value == "through") {
                                                        print 'selected';
                                                    }
                                                }
                                            }
                                            ?>>Прохождение сквозь стены</option>
                    <option value="levitation" <?php $arr = explode(',', $values['select']);
                                                if ($arr != '') {
                                                    foreach ($arr as $value) {
                                                        if ($value == "levitation") {
                                                            print 'selected';
                                                        }
                                                    }
                                                }
                                                ?>>Левитация</option>
                </select>
            </div>
            <div class="input-block">
                <span><?php print $messages['bio']; ?></span>
                <textarea placeholder="Расскажите о себе..." class="input-item <?php if ($errors['bio']) {
                                                                                    print 'error';
                                                                                } ?>" name="bio"><?php print $values['bio']; ?></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="y" id="policy" name="policy" checked />
                <label class="form-check-label" for="policy">Согласен с политикой обработки персональных данных.</label>
            </div>
            <button class="btn btn-primary" type="submit" id="send-btn">Отправить</button>
        </form>
    </div>
</body>

</html>
