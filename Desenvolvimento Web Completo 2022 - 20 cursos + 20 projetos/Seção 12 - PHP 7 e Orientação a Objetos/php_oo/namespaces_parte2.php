 <?php

    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    use A\Produto as P1;
    use B\Produto as P2;

    $p = new P1();
    print_r($p);
    echo $p->__get('nome');

    $p = new P2();
    print_r($p);
    echo $p->__get('nome');
