<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=url()?>/resources/css/style.css">
    <link rel="stylesheet" href="<?=url()?>/resources/views/user/card/update/style.css">
</head>
<body>  
    <header class="header">
        <a href="<?= url("usuario")?>">
            <div class="header__container">
                <div class="header__flip1 header__div">
                    <img src="<?=url()?>/resources/assets/img/Card-From.png" width="30" height="50" />
                </div>
                <div class="header__flip2 header__div">
                    <img src="<?=url()?>/resources/assets/img/Card-Back.jpg" width="30" height="50" />
                </div>
             </div>
        </a>
        <div>
            <a href="<?=url("usuario")?>" class="header__login">Home</a>
            <a href="<?=url("logout")?>" class="header__login">Logout</a>
        </div>
    </header>

    <section class="section__form">
        <?php            
            if (isset($_SESSION['msg'])&&!empty($_SESSION['msg'])) {
                echo "<div class='login__error'>".$_SESSION['msg'] . "</div>";
                unset($_SESSION['msg']);
            }
        ?>
        <form action="" method="POST">
            <div class="form__container">
                <!-- <div class="form__box">
                    <label for="ftipo" class="form__label">Tipo de Jogo</label>
                    <input type="text" name="" id="ftipo" class="form__input">
                </div> -->
                <div class="form__box">
                    <label for="fnome" class="form__label"><?= $campos['carta_campos']['nome_jogo_carta_campo']?></label>
                    <input type="text" name="nome_jogo_carta_valor" id="fnome" class="form__input" required value="<?php if (isset($campos['card_info'])) {
                                                                                                            echo $campos['card_info']['nome_jogo_carta_valor'];
                                                                                                        } ?>">
                </div>

                <div class="form__box">
                    <label for="fcarta" class="form__label"><?= $campos['carta_campos']['nome_carta_campo'] ?></label>
                    <input type="text" name="nome_valor" id="fcarta" class="form__input" required value="<?php if (isset($campos['card_info'])) {
                                                                                                            echo $campos['card_info']['nome_carta_valor'];
                                                                                                        } ?>">
                </div>                
            </div>
            <button type="submit" class="form__btn">Salvar e avançar</button>
        </form>
    </section>
</body>
</html>