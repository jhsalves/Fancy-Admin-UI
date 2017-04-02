<?php

if (!defined('ABSPATH')) {
    exit;
}

remove_filter('admin_footer_text', 'fau_swap_footer_admin');



add_filter('admin_footer_text', 'wp_lojica_admin_rodape');

function wp_lojica_admin_rodape() {
    $termos_de_uso = $politica_de_privacidade = $creditos = $politica_de_suporte = "#";
    $politica_de_privacidade = "#";
    if (function_exists('Lojica_Template') && !empty(Lojica_Template())) {
        switch_to_blog(get_current_site()->blog_id);
        $politica_de_privacidade = Lojica_Template()->obter_link_pagina('Política de privacidade');
        $termos_de_uso = Lojica_Template()->obter_link_pagina('Termos e condições de uso');
        $creditos = Lojica_Template()->obter_link_pagina('Créditos');
        $politica_de_suporte = Lojica_Template()->obter_link_pagina('Política de suporte');
        restore_current_blog();
    }
    echo 'Lojica© 2017 | <a target="_blank" href="' . $termos_de_uso . '">Termos de uso</a> | <a target="_blank" href="' . $politica_de_privacidade . '">Política de privacidade</a> | <a href="'.$politica_de_suporte.'" target="_blank">Política de suporte</a> | <a href="'.$creditos.'" target="_blank">Créditos</a></p>';
}
