<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Старт в PHP</title>
  <link rel="icon" href="./images/favicon.ico">
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>
  <h1>Таблицы истинности и сравнения</h1>
  <table class="logical">
    <caption>1. Таблица истинности в PHP</caption>

    <?php $a = 0; $b = 0; ?>

    <thead>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>! A</th>
        <th>A || B</th>
        <th>A && B</th>
        <th>A xor B</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="a"><?php echo $a; ?></td>
        <td class="b">
          <?php echo $b; ?>
        </td>
        <td class="not_a">
          <?php echo (int)!$a; ?>
        </td>
        <td>
          <?php echo var_dump($a || $b); ?>
        </td>
        <td>
          <?php echo var_dump($a && $b); ?>
        </td>
        <td>
          <?php echo var_dump($a xor $b); ?>
        </td>
      </tr>
      <tr>
        <td class="a">
          <?php echo $a; ?>
        </td>
        <td class="b">
          <?php echo ++$b; ?>
        </td>
        <td class="not_a">
          <?php echo (int)!$a; ?>
        </td>
        <td>
          <?php echo var_dump($a || $b); ?>
        </td>
        <td>
          <?php echo var_dump($a && $b); ?>
        </td>
        <td>
          <?php echo var_dump($a xor $b); ?>
        </td>
      </tr>
      <tr>
        <td class="a">
          <?php echo ++$a; ?>
        </td>
        <td class="b">
          <?php echo --$b; ?>
        </td>
        <td class="not_a">
          <?php echo (int)!$a; ?>
        </td>
        <td>
          <?php echo var_dump($a || $b); ?>
        </td>
        <td>
          <?php echo var_dump($a && $b); ?>
        </td>
        <td>
          <?php echo var_dump($a xor $b); ?>
        </td>
      </tr>
      <tr>
        <td class="a">
          <?php echo $a; ?>
        </td>
        <td class="b">
          <?php echo ++$b; ?>
        </td>
        <td class="not_a">
          <?php echo (int)!$a; ?>
        </td>
        <td>
          <?php echo var_dump($a || $b); ?>
        </td>
        <td>
          <?php echo var_dump($a && $b); ?>
        </td>
        <td>
          <?php echo var_dump($a xor $b); ?>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <table class="comparison">
    <caption>2. Таблица
        <span class="loose">гибкого</span>
        <!-- <strong>(==)</strong> -->
        и
        <span class="strict">жёсткого</span>
        <!-- <strong>(===)</strong> -->
        сравнений в PHP
    </caption>

    <?php
      $true = true;
      $false = false;
      $one_number = 1;
      $zero = 0;
      $one_minus = -1;
      $one_string = "1";
      $null = null;
      $php = "php";

      function comparisonLoose($x, $y) {
        if ($x == $y) {
          echo '<span style="color:navy;">true</span>';
        }
        else {
          echo '<span style="color:navy;">false</span>';
        }
      }

      function comparisonStrict($x, $y) {
        if ($x === $y) {
            echo '<span style="color:darkred;">true</span>';
          }
          else {
            echo '<span style="color:darkred;">false</span>';
          }
      }
    ?>

    <thead>
      <tr>
        <th class="first">
          <span class="loose">
            <b>==</b>
          </span>
          <hr>
          <span class="strict">
            <b>===</b>
          </span>
        </th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>
          <?php echo "true"; ?>
        </th>
        <td>
          <?php echo comparisonLoose($true, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($true, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($true, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($true, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($true, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($true, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($true, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($true, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($true, $php); ?>
        </td>
      </tr>
      <tr>
        <th>
          <?php echo "false"; ?>
        </th>
        <td>
          <?php echo comparisonLoose($false, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($false, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($false, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($false, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($false, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($false, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($false, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($false, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($false, $php); ?>
        </td>
      </tr>
      <tr>
        <th>
          <?php echo "1"; ?>
        </th>
        <td>
          <?php echo comparisonLoose($one_number, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_number, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_number, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_number, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_number, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_number, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_number, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_number, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_number, $php); ?>
        </td>
      </tr>
      <tr>
        <th>
          <?php echo "0"; ?>
        </th>
        <td>
          <?php echo comparisonLoose($zero, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($zero, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($zero, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($zero, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($zero, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($zero, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($zero, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($zero, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($zero, $php); ?>
        </td>
      </tr>
      <tr>
        <th>
          <?php echo "-1"; ?>
        </th>
        <td>
          <?php echo comparisonLoose($one_minus, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_minus, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_minus, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_minus, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_minus, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_minus, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_minus, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_minus, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_minus, $php); ?>
        </td>
      </tr>
      <tr>
        <th>
          <?php echo '"1"'; ?>
        </th>
        <td>
          <?php echo comparisonLoose($one_string, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_string, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_string, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_string, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_string, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_string, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_string, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($one_string, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($one_string, $php); ?>
        </td>
      </tr>
      <tr>
        <th>
          <?php echo "null"; ?>
        </th>
        <td>
          <?php echo comparisonLoose($null, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($null, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($null, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($null, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($null, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($null, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($null, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($null, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($null, $php); ?>
        </td>
      </tr>
      <tr>
        <th>
          <?php echo '"php"'; ?>
        </th>
        <td>
          <?php echo comparisonLoose($php, $true); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $true); ?>
        </td>
        <td>
          <?php echo comparisonLoose($php, $false); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $false); ?>
        </td>
        <td>
          <?php echo comparisonLoose($php, $one_number); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $one_number); ?>
        </td>
        <td>
          <?php echo comparisonLoose($php, $zero); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $zero); ?>
        </td>
        <td>
          <?php echo comparisonLoose($php, $one_minus); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $one_minus); ?>
        </td>
        <td>
          <?php echo comparisonLoose($php, $one_string); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $one_string); ?>
        </td>
        <td>
          <?php echo comparisonLoose($php, $null); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $null); ?>
        </td>
        <td>
          <?php echo comparisonLoose($php, $php); ?>
          <?php echo "<hr>"; ?>
          <?php echo comparisonStrict($php, $php); ?>
        </td>
      </tr>
    </tbody>
  </table>
  <ul class="conclusion">
    <strong>Вывод:</strong>
    <!-- «после преобразования типов» -->
    <li>При <span class="loose">гибком</span> <b>'=='</b> (<i>нестрогом</i>)
      сравнении оператор осуществляет приведение между двумя различными типами,
      если они различаются (то есть он сравнивает значение после преобразования типов).
    </li>
    <li>При <span class="strict">жёстком</span> <b>'==='</b> (<i>строгом</i>)
      сравнении оператор вернёт true, только если оба операнда имеют одинаковый тип
      и одно и то же значение.
    </li>
    <li>Используя в своём коде различные операторы сравнения, старайтесь
      пользоваться операторами со <i>строгим</i> сравнением, также учитывайте
      особенности <i>нестрогого</i> сравнения во избежание неожиданных ошибок
      и различия сравнения в PHP 7 и PHP 8 ("php" == 0).
    </li>
    <li>В любой непонятной ситуации <span class="advice">ложитесь спать</span>
      сначала поработайте с
        <a href="https://www.php.net/manual/ru/" target="_blank" title="https://www.php.net/manual/ru/">
          официальной документацией.
        </a>
    </li>
  </ul>
</body>
</html>
