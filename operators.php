<?php require_once 'public/templates/head.tmpl.php'; ?>

<?php require_once 'public/templates/nav.tmpl.php'; ?>

<div class="center">
    <a href="/">
        <i>Back</i>
    </a>
    <br>
    <sup>Operator output generated with the PHP var_dump(); function.</sup>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Incrementing</span>
                    <strong>++</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i=3;<br>
                                $j=2;
                            </td>
                            <td>
                                $i++ && ++$j;
                            </td>
                            <td>
                                <?php
                                    $i = 3;
                                    $j = 2;
                                    $i++ && ++$j;

                                    var_dump($i, $j);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=5;<br>
                                $j=0;
                            </td>
                            <td>
                                $i++ && $j++;
                            </td>
                            <td>
                                <?php
                                    $i=5;
                                    $j=0;

                                    $i++ && $j++;

                                    var_dump($i, $j);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Decrementing</span>
                    <strong>--</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i=1;<br>
                                $j=-1;
                            </td>
                            <td>
                                $i-- && --$j;
                            </td>
                            <td>
                                <?php
                                $i = 1;
                                $j = -1;
                                $i-- && --$j;

                                var_dump($i, $j);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=-3;<br>
                                $j=-2;
                            </td>
                            <td>
                                $i-- && $j--;
                            </td>
                            <td>
                                <?php
                                $i=-3;
                                $j=-2;

                                $i-- && $j--;

                                var_dump($i, $j);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Addition</span>
                    <strong>+</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i=10;<br>
                                $j=10;
                            </td>
                            <td>
                                $k = $i + $j;
                            </td>
                            <td>
                                <?php
                                $i = 10;
                                $j = 10;
                                $k = $i + $j;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=5;<br>
                                $j=0;
                            </td>
                            <td>
                                $k = --$i + $j++;
                            </td>
                            <td>
                                <?php
                                $i=5;
                                $j=0;

                                $k = --$i + $j++;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Subtraction</span>
                    <strong>-</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i=1;<br>
                                $j=1;
                            </td>
                            <td>
                                $k = $i - $j;
                            </td>
                            <td>
                                <?php
                                $i = 1;
                                $j = 1;
                                $k = $i - $j;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=-5;<br>
                                $j=3;<br>
                                $l=-1;
                            </td>
                            <td>
                                $k = ++$i - $j++ + $l--;
                            </td>
                            <td>
                                <?php
                                $i=-5;
                                $j=3;
                                $l=-1;

                                $k = $i - ++$j + $l--;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Multiplication</span>
                    <strong>*</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i=10;<br>
                                $j=2;
                            </td>
                            <td>
                                $i * $j;
                            </td>
                            <td>
                                <?php
                                $i = 10;
                                $j = 2;
                                $k = $i * $j;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=5;<br>
                                $j=-3;
                            </td>
                            <td>
                                $k = ++$i - $j-- * $j;
                            </td>
                            <td>
                                <?php
                                $i=5;
                                $j=-3;

                                $k = ++$i - $j-- * $j;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Division</span>
                    <strong>/</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i=100;<br>
                                $j=10;
                            </td>
                            <td>
                                $i / $j;
                            </td>
                            <td>
                                <?php
                                $i = 100;
                                $j = 10;
                                $k = $i / $j;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=5;<br>
                                $j=0;
                            </td>
                            <td>
                                k = ++$i / $i++ * $j++ -$i;
                            </td>
                            <td>
                                <?php
                                $i=5;
                                $j=0;

                                $k = ++$i / $i++ * $j++ -$i;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Modulus</span>
                    <strong>%</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i=200;<br>
                                $j=10;
                            </td>
                            <td>
                                $k = $j % $i;
                            </td>
                            <td>
                                <?php
                                $i = 200;
                                $j = 10;
                                $k = $j % $i;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=500;<br>
                                $j=5;<br>
                                $l=$j % --$i;
                            </td>
                            <td>
                                $i++ && $j++;
                            </td>
                            <td>
                                <?php
                                $i=500;
                                $j=5;
                                $l=$j % --$i;

                                $k= ++$l % $i * $j;

                                var_dump($k);
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center">
                    <span class="card-title center">Comparison</span>
                    <strong>==, ===, !=, !== <>, <, >, <=, >=</strong>
                </div>
                <div class="card-action">
                    <table>
                        <tr>
                            <th>Variables</th>
                            <th>Task</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td>
                                $i = '10';
                            </td>
                            <td>
                                echo $i == 10; <br>
                                echo $i === 10;
                            </td>
                            <td>
                                <?php
                                $i = '10';

                                echo $i == 10;
                                echo $i === 10;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i = 10

                            </td>
                            <td>
                                echo $i != 10;<br>
                                echo $i !== 10;
                            </td>
                            <td>
                                <?php
                                $i = 10;

                                echo $i != 10;
                                echo $i !== 10;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i = 10

                            </td>
                            <td>
                                echo $i <> 10;<br>
                                echo $i > $j;<br>
                                echo $i < $j;
                            </td>
                            <td>
                                <?php
                                $i = 10;
                                $j = 5;

                                echo $j <> $i;
                                echo $i > $j;
                                echo $i < $j;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                $i=10

                            </td>
                            <td>
                                echo $i <= $k;<br>
                                echo $i >= $j;<br>
                                echo $i = $k;<br>
                                echo $i = $j;
                            </td>
                            <td>
                                <?php
                                $i = 10;
                                $j = 15;
                                $k = 10;

                                echo $i <= $k;
                                echo $i >= $j;
                                echo $i = $k;
                                echo $i = $j;
                                ?>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

    <br>
    <br>
<?php require_once 'public/templates/footer.tmpl.php'; ?>