<?php // writed by Benjamin EG0N
$GLOBALS['localisation'] = [
  'fr' => [
    'download' => 'Télécharger'
    , 'upload' => 'Envoyer'
    , 'download_file' => 'Télécharger le fichier'
    , 'upload_file' => 'Envoyer le fichier'
    , 'drop_a_file' => 'Déposer un fichier'
    , 'get_a_file' => 'Récupérer un fichier'
    , 'in_about' => 'Bienvenue sur la page d info de cloud 23'
  ],
  'en' => [
    'download' => 'Download'
    , 'upload' => 'Upload'
    , 'download_file' => 'Download file'
    , 'upload_file' => 'Upload file'
    , 'drop_a_file' => 'Drop a file'
    , 'get_a_file' => 'Get a file'
    , 'in_about' => 'Welcome to the cloud 23 info page'
  ]
];

function local($key)
{
  $iso = $GLOBALS['culture'];
  $arr = $GLOBALS['localisation'][$iso];
  return array_key_exists($key, $arr) ? $arr[$key] : "{{{$key}}}";
}
