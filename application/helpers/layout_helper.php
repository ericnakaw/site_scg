<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @return void
 * */
function init_layout() {
    $CI = & get_instance();
    $CI->load->library(array('sistema', 'session', 'form_validation'));
    $CI->load->helper(array('layout', 'form', 'url', 'array', 'text'));

    set_layout('template', 'default');
    set_layout('titulo', 'Camila Golin | ');
    set_layout('menu', load_content('template/menu/menu'));
    set_layout('breadcrumb', load_content('template/breadcrumb/breadcrumb'));
    set_layout('footer', load_content('template/footer/footer'));
    set_layout('conteudo', "Não foi carregado nenhum conteudo na variavel Sistema->layout['conteudo']");
    //CSS
    set_layout('header', load_css(array('blueimp-gallery.min','bootstrap-image-gallery','w3css','bootstrap.min', 'carousel', 'googleapis','main','DirectionAwareHoverEffect-noJS','DirectionAwareHoverEffect-style')), FALSE);
    //JS
    set_layout('header', load_js(array('jquery.min','blueimp-gallery.min', 'bootstrap.min', 'ie10-viewport-bug-workaround', 'holder.min','bootpag.min','DirectionAwareHoverEffect-jquery.hoverdir','main')), FALSE);
}

// Definir prodiedades do layout
function set_layout($prop, $valor, $replace = TRUE) {
    $CI = & get_instance();
    $CI->load->library('sistema');
    if ($replace) {
        $CI->sistema->layout[$prop] = $valor;
    } else {
        if (!isset($CI->sistema->layout[$prop])) {
            $CI->sistema->layout[$prop] = '';
        }
        $CI->sistema->layout[$prop] .= $valor;
    }
}

// Definir qual a view do bloco principal
function load_content($view, $dados = NULL) {
    $CI = & get_instance();
    if ($view != NULL) {
        // terceiro parametro(TRUE) e para retornar a view, e nao printar
        return $CI->load->view("$view", array('dados' => $dados), TRUE);
    } else {
        return FALSE;
    }
}

// Retorna um array com o layout
function get_layout() {
    $CI = & get_instance();
    $CI->load->library('sistema');
    return $CI->sistema->layout;
}

// Carregar o layout definido na variavel Sistema->layout
function load_layout() {
    $CI = & get_instance();
    $CI->load->library('sistema');
    $CI->parser->parse('template/' . $CI->sistema->layout['template'], get_layout());
}

//carrega um ou vários arquivos .css de uma pasta
function load_css($arquivo = NULL, $pasta = 'assets/css', $media = 'all') {
    if ($arquivo != NULL):
        $CI = & get_instance();
    $CI->load->helper('url');
    $retorno = '';
    if (is_array($arquivo)) {
        foreach ($arquivo as $css) {
            $retorno .= '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$css.css") . '" media="' . $media . '" />';
        }
    } else {
        $retorno .= '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$arquivo.css") . '" media="' . $media . '" />';
    }
    endif;
    return $retorno;
}

//carrega um ou vários arquivos .js de uma pasta ou servidor remoto
function load_js($arquivo = NULL, $pasta = 'assets/js', $remoto = FALSE) {
    if ($arquivo != NULL) {
        $CI = & get_instance();
        $CI->load->helper('url');
        $retorno = '';
        if (is_array($arquivo)) {
            foreach ($arquivo as $js) {
                if ($remoto) {
                    $retorno .= '<script type="text/javascript" src="' . $js . '"></script>';
                } else {
                    $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$js.js") . '"></script>';
                }
            }
        } else {
            if ($remoto) {
                $retorno .= '<script type="text/javascript" src="' . $arquivo . '"></script>';
            } else {
                $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$arquivo.js") . '"></script>';
            }
        }
    }
    return $retorno;
}

//gera uma miniatura de uma imagem caso ela ainda não exista
function thumb($imagem = NULL, $largura = 100, $altura = 75, $geratag = TRUE) {
    $CI = & get_instance();
    $CI->load->helper('file');
    $thumb = $largura . 'x' . $altura . '_' . $imagem;
    $thumbinfo = get_file_info('./uploads/thumbs/' . $thumb);
    if ($thumbinfo != FALSE):
        $retorno = base_url('uploads/thumbs/' . $thumb);
    else:
        $CI->load->library('image_lib');
    $config['image_library'] = 'gd2';
    $config['source_image'] = './uploads/' . $imagem;
    $config['new_image'] = './uploads/thumbs/' . $thumb;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = $largura;
    $config['height'] = $altura;
    $CI->image_lib->initialize($config);
    if ($CI->image_lib->resize()):
        $CI->image_lib->clear();
    $retorno = base_url('uploads/thumbs/' . $thumb);
    else:
        $retorno = FALSE;
    endif;
    endif;
    if ($geratag && $retorno != FALSE)
        $retorno = '<img src="' . $retorno . '" alt="" />';
    return $retorno;
}

function enviar_email($para, $assunto, $mensagem, $cc = '', $co = '') {
    $CI = & get_instance();
    $CI->load->library('email');

    $CI->email->from('news@camilagolin.com.br', 'Contato Site');
    $CI->email->to($para);
    $CI->email->cc('');
    $CI->email->bcc('');
    
    $CI->email->subject($assunto);
    $CI->email->message($mensagem);
    
    if ($CI->email->send()) {
        return TRUE;
    } else {
        return FALSE;
    }
}

// Gera um breadcrumb com base no controller atual
function breadcrumb() {
    $CI = & get_instance();
    $CI->load->helper('url');

    // Buscar a classe
    $classe = str_replace('_', ' ', ucfirst($CI->router->class));


    if ($classe == 'Home') {
        $classe = '';
    } else {
        $classe = " &raquo; " . anchor($CI->router->class, $classe);
    }

    // buscar o metodo
    $metodo = ucwords(str_replace('_', ' ', $CI->router->method));
    if ($metodo && $metodo != 'Index') {
        $metodo = " &raquo; " . anchor($CI->router->class . "/" . $CI->router->method, $metodo);
    } else {
        $metodo = '';
    }

    return '<ol id="breadcrumb" class="breadcrumb"><li> ' . anchor('home', 'Home') . $classe . $metodo . '</li></ol>';
    
}

/*
//
//
//
//
//
//carrega um módulo do sistema devolvendo a tela solicitada
//function load_modulo($modulo = NULL, $tela = NULL, $diretorio = 'painel') {
//    $CI = & get_instance();
//    if ($modulo != NULL):
//        return $CI->load->view("$diretorio/$modulo", array('tela' => $tela), TRUE);
//    else:
//        return FALSE;
//    endif;
//}
//seta valores ao array $tema da classe sistema
function set_tema($prop, $valor, $replace = TRUE) {
    $CI = & get_instance();
    $CI->load->library('sistema');
    if ($replace):
        $CI->sistema->tema[$prop] = $valor;
    else:
        if (!isset($CI->sistema->tema[$prop]))
            $CI->sistema->tema[$prop] = '';
        $CI->sistema->tema[$prop] .= $valor;
    endif;
}

//retorna os valores do array $tema da classe sistema
function get_tema() {
    $CI = & get_instance();
    $CI->load->library('sistema');
    return $CI->sistema->tema;
}

//inicializa o painel adm carregando os recursos necessários
function init_painel() {
    $CI = & get_instance();
    $CI->load->library(array('parser', 'sistema', 'session', 'form_validation'));
    $CI->load->helper(array('form', 'url', 'array', 'text'));
    //carregamento dos models
    $CI->load->model('usuarios_model', 'usuarios');

    set_tema('titulo_padrao', 'Gerenciamento de conteúdo');
    set_tema('rodape', '<p>&copy; 2012 | Todos os direitos reservados para <a href="http://rbtech.info">RBTech.info</a>');
    set_tema('template', 'painel_view');

    set_tema('headerinc', load_css(array('foundation.min', 'app')), FALSE);
    set_tema('headerinc', load_js(array('foundation.min', 'app')), FALSE);
    set_tema('footerinc', '');
}

//inicializa o tinymce para criação de textarea com editor html
function init_htmleditor() {
    set_tema('headerinc', load_js(base_url('htmleditor/jquery.tinymce.js'), NULL, TRUE), FALSE);
    set_tema('headerinc', incluir_arquivo('htmleditor', 'includes', FALSE), FALSE);
}

//retorna ou printa o conteúdo de uma view
function incluir_arquivo($view, $pasta = 'includes', $echo = TRUE) {
    $CI = & get_instance();
    if ($echo == TRUE):
        echo $CI->load->view("$pasta/$view", '', TRUE);
        return TRUE;
    endif;
    return $CI->load->view("$pasta/$view", '', TRUE);
}

//carrega um template passando o array $tema como parâmetro
function load_template() {
    $CI = & get_instance();
    $CI->load->library('sistema');
    $CI->parser->parse($CI->sistema->tema['template'], get_tema());
}

//carrega um ou vários arquivos .js de uma pasta ou servidor remoto
function load_js($arquivo = NULL, $pasta = 'js', $remoto = FALSE) {
    if ($arquivo != NULL):
        $CI = & get_instance();
        $CI->load->helper('url');
        $retorno = '';
        if (is_array($arquivo)):
            foreach ($arquivo as $js):
                if ($remoto):
                    $retorno .= '<script type="text/javascript" src="' . $js . '"></script>';
                else:
                    $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$js.js") . '"></script>';
                endif;
            endforeach;
        else:
            if ($remoto):
                $retorno .= '<script type="text/javascript" src="' . $arquivo . '"></script>';
            else:
                $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$arquivo.js") . '"></script>';
            endif;
        endif;
    endif;
    return $retorno;
}

//mostra erros de validação em forms
function erros_validacao() {
    if (validation_errors())
        echo '<div class="alert-box alert">' . validation_errors('<p>', '</p>') . '</div>';
}

//verifica se o usuário está logado no sistema
function esta_logado($redir = TRUE) {
    $CI = & get_instance();
    $CI->load->library('session');
    $user_status = $CI->session->userdata('user_logado');
    if (!isset($user_status) || $user_status != TRUE):
        $CI->session->sess_destroy();
        if ($redir):
            $CI->session->set_userdata(array('redir_para' => current_url()));
            set_msg('errologin', 'Acesso restrito, faça login antes de prosseguir', 'erro');
            redirect('usuarios/login');
        else:
            return FALSE;
        endif;
    else:
        return TRUE;
    endif;
}

//define uma mensagem para ser exibida na próxima tela carregada
function set_msg($id = 'msgerro', $msg = NULL, $tipo = 'erro') {
    $CI = & get_instance();
    switch ($tipo):
        case 'erro':
            $CI->session->set_flashdata($id, '<div class="alert-box alert"><p>' . $msg . '</p></div>');
            break;
        case 'sucesso':
            $CI->session->set_flashdata($id, '<div class="alert-box success"><p>' . $msg . '</p></div>');
            break;
        default:
            $CI->session->set_flashdata($id, '<div class="alert-box"><p>' . $msg . '</p></div>');
            break;
    endswitch;
}

//verifica se existe uma mensagem para ser exibida na tela atual
function get_msg($id, $printar = TRUE) {
    $CI = & get_instance();
    if ($CI->session->flashdata($id)):
        if ($printar):
            echo $CI->session->flashdata($id);
            return TRUE;
        else:
            return $CI->session->flashdata($id);
        endif;
    endif;
    return FALSE;
}



//gera um slug basedo no título
function slug($string = NULL) {
    $string = remove_acentos($string);
    return url_title($string, '-', TRUE);
}

//remove acentos e caracteres especiais de uma string
function remove_acentos($string = NULL) {
    $procurar = array('À', 'Á', 'Ã', 'Â', 'É', 'Ê', 'Í', 'Ó', 'Õ', 'Ô', 'Ú', 'Ü', 'Ç', 'à', 'á', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'õ', 'ô', 'ú', 'ü', 'ç');
    $substituir = array('A', 'A', 'A', 'A', 'E', 'E', 'I', 'O', 'O', 'O', 'U', 'U', 'C', 'a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'c');
    return str_replace($procurar, $substituir, $string);
}

//gera o resumo de uma string
function resumo_post($string = NULL, $palavras = 50, $decodifica_html = TRUE, $remove_tags = TRUE) {
    if ($string != NULL):
        if ($decodifica_html)
            $string = to_html($string);
        if ($remove_tags)
            $string = strip_tags($string);
        $retorno = word_limiter($string, $palavras);
    else:
        $retorno = FALSE;
    endif;
    return $retorno;
}

//converter dados do bd para html válido
function to_html($string = NULL) {
    return html_entity_decode($string);
}

//salva ou atualiza uma config no bd
function set_setting($nome, $valor = '') {
    $CI = & get_instance();
    $CI->load->model('settings_model', 'settings');
    if ($CI->settings->get_bynome($nome)->num_rows() == 1):
        if (trim($valor) == ''):
            $CI->settings->do_delete(array('nome_config' => $nome), FALSE);
        else:
            $dados = array(
                'nome_config' => $nome,
                'valor_config' => $valor
            );
            $CI->settings->do_update($dados, array('nome_config' => $nome), FALSE);
        endif;
    else:
        $dados = array(
            'nome_config' => $nome,
            'valor_config' => $valor
        );
        $CI->settings->do_insert($dados, FALSE);
    endif;
}

//retorna uma config do bd
function get_setting($nome) {
    $CI = & get_instance();
    $CI->load->model('settings_model', 'settings');
    $setting = $CI->settings->get_bynome($nome);
    if ($setting->num_rows() == 1):
        $setting = $setting->row();
        return $setting->valor_config;
    else:
        return NULL;
    endif;
}
*/