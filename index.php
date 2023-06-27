<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Exercice 1 -->
        <div>
            <?php
                $name="Abde";
                echo $name
            ?>
        </div>

    <!-- Exercice 2 -->
        <div>
            <?php
                $lastname="Mehenni";
                $firstname="Abderrezak";
                $age=22;
                echo "Bonjour je m'appelle ".$firstname." ".$lastname." et j'ai ".$age." ans";
            ?>
        </div>

    <!-- Exercice 3 -->
        <div>
            <?php
                $km=1;
                echo $km;
                $km=3;
                echo $km;
                $km=125;
                echo $km;
            ?>
        </div>

    <!-- Exercice 4 -->
        <div>
            <?php
                $string="texte";
                $int=5;
                $float=11.7;
                $boolean= TRUE;  
                echo "voici un ".$string." contenant ".$int." lettres le float est ".$float."et le boolean ".$boolean;
            ?>
        </div>

    <!-- Exercice 5 -->
        <div>
            <?php
                $int=null;
                echo $int;
                $int=7;
                echo $int;
            ?>
        </div>

    <!-- Exercice 6 -->
        <div>
            <?php
                $name="Jean-Yves";
                echo "Bonjour ".$name.", comment vas-tu ?";
            ?>
        </div>

    <!-- Exercice 7 -->
        <div>
            <?php
                $lastname="Roronoa";
                $firstname="Zoro";
                $age=21;
                echo "Bonjour je m'appelle ".$lastname." ".$firstname." et j'ai ".$age." ans";
            ?>
        </div>

    <!-- Exercice 8 -->
        <div>
            <?php
                $calcul1=3+4;
                $calcul2=5*20;
                $calcul3=45/5;
                echo "Le résultat de 3+4 est ".$calcul1.". Le résultat de 5 multiplié par 20 est ".$calcul2.". Le résultat de 45 divisé par 5 est ".$calcul3;
            ?>
        </div>
</body>
</html>