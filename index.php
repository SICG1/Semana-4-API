<?php
$defaultLanguage = 'en'; // Idioma por defecto
$allowedLanguages = ['en', 'de']; // Idiomas permitidos

// Determinar el idioma del navegador o el idioma elegido
$browserLanguage = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
$userSelectedLanguage = !empty($_GET['language']) ? strip_tags($_GET['language']) : $browserLanguage;
$str_language = in_array(substr($userSelectedLanguage, 0, 2), $allowedLanguages) ? substr($userSelectedLanguage, 0, 2) : $defaultLanguage;

// Construir enlaces de idiomas disponibles
$arr_available_languages = [
    ['str_name' => 'English', 'str_token' => 'en'],
    ['str_name' => 'Deutsch', 'str_token' => 'de']
];
$str_available_languages = '';
foreach ($arr_available_languages as $arr_language) {
    if ($arr_language['str_token'] !== $str_language) {
        $str_available_languages .= '<a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?language=' . $arr_language['str_token'] . '" lang="' . $arr_language['str_token'] . '" xml:lang="' . $arr_language['str_token'] . '" hreflang="' . $arr_language['str_token'] . '">' . $arr_language['str_name'] . '</a> | ';
    }
}
$str_available_languages = rtrim($str_available_languages, ' | ');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo htmlspecialchars($str_language); ?>" xml:lang="<?php echo htmlspecialchars($str_language); ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
    /* Tus estilos aquí */
</style>
</head>
<body>
    <!-- Contenido HTML con medidas de seguridad mejoradas -->
</body>
</html>
