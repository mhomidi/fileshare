<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
subject: Fichiers expirés

{alternative:plain}

Madame, Monsieur,

Votre dépôt n°{transfer.id} sur {cfg:site_name} a expiré, ses fichiers ne sont donc plus disponibles au téléchargement ({transfer.link}).

Cordialement,
{cfg:site_name}

{alternative:html}

<p>
    Madame, Monsieur,
</p>

<p>
    Votre <a href="{transfer.link}">dépôt n°{transfer.id}</a> sur <a href="{cfg:site_url}">{cfg:site_name}</a> a expiré, ses fichiers ne sont donc plus disponibles au téléchargement.
</p>

<p>
    Cordialement,<br />
    {cfg:site_name}
</p>
