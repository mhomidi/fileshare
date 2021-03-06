<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo Lang::getCode() ?>" xml:lang="<?php echo Lang::getCode() ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <title><?php echo htmlspecialchars(Config::get('site_name')); ?></title>
        
        <?php GUI::includeFavicon() ?>
        
        <?php GUI::includeScripts() ?>
        
        <script type="text/javascript" src="{path:filesender-config.js.php}"></script>
        
        <script type="text/javascript" src="{path:rest.php/lang?callback=lang.setTranslations}"></script>
        
        <meta name="robots" content="noindex, nofollow" />
        
        <meta name="auth" content="noindex, nofollow" />

        <?php GUI::includeStylesheets() ?>
    </head>
    
    <body data-security-token="<?php echo Utilities::getSecurityToken() ?>" data-auth-type="<?php echo Auth::type() ?>"
    style="
    <?php

    if(Config::get('lang_selector_enabled') && (count(Lang::getAvailableLanguages()) > 1)) {
        $code = Lang::getCode();
        $lang = 'en';
        foreach (Lang::getAvailableLanguages() as $id => $dfn) {
            if (($id == $code)) {
                $lang = $id;
                error_log((string)$code);
            }
        }
    }
    if (strcmp($lang, 'fa') == 0) {
        ?>
            text-align: right; direction: rtl
        <?php
    }
    ?>
            ">
        <div id="wrap">
            <div id="header">
                <a href="<?php echo GUI::path() ?>">
                    <?php GUI::includeLogo() ?>
                    
                    <?php if(Config::get('site_name_in_header')) { ?>
                    <div class="site_name"><?php echo Config::get('site_name') ?></div>
                    <div class="site_baseline"><?php echo Config::get('site_baseline') ?></div>
                    <?php } ?>
                </a>
            </div>
