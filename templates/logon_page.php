<div class="box">
    {tr:site_splash}
    
    <div class="logon">
        <?php
        
        $embed = Config::get('auth_sp_embed');
        header('Location: '.AuthSP::logonURL());
        if(!$embed) $embed = '<a id="btn_logon" href="'.AuthSP::logonURL().'">'.Lang::tr('logon').'</a>';
        
        echo $embed;
        
        ?>
    </div>
</div>
