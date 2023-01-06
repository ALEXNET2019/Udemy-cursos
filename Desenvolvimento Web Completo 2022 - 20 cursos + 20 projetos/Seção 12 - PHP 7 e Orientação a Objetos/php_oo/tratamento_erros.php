<?php

try {
    echo '<h3> ### Try ### </h3>';

    //$sql = 'Select * from Ativos';
    //mysql_query($sql);

    if (!file_exists('require_arquivo_a.php')) {
        throw new Exception('O arquivo em questão deveria está disponivel as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir mesmo assim');
    }
} catch (Error $e) {
    echo '<h3> ### Catch erro ### </h3>';
    echo '<b style="color: blue">' . $e . '</b>';
} catch (Exception $e) {

    echo '<h3> ### Catch Exception ### </h3>';
    echo '<b style="color: red">' . $e . '</b>';

} finally {
    echo '<h3> ### Finally ### </h3>';
}
